<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FollowUpMail;
use App\Models\Data;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class MailSendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function followupmail()
{
    // Query to filter data where emails haven't been sent today
    $datas = Data::where('status', '!=', '0')
        ->where(function ($query) {
            $query->whereNull('send_mail_date')
                  ->orWhereDate('send_mail_date', '!=', Carbon::today());
        })->get();

    $followupmails = FollowUpMail::orderBy('time_gap', 'asc')->get();

    foreach ($datas as $data) {
        DB::beginTransaction(); // Start transaction

        try {
            if (!empty($data->email)) {
                foreach ($followupmails as $followup) {
                    $dataCreatedAt = $data->created_at->startOfDay();
                    $daysDifference = $dataCreatedAt->diffInDays(Carbon::today());

                    if ($daysDifference < $followup->time_gap) {
                        break; // Stop if the gap is not reached yet
                    } elseif ($daysDifference == $followup->time_gap) {
                        if (strtolower($data->event->name) == "wedding" && $followup->event_type == "wedding") {
                            $this->sendMail($data, $followup);

                            // Update send_mail_date immediately
                            $data->send_mail_date = Carbon::today();
                            $data->save();

                            break; // Stop further checks for this data record
                        }
                    }
                }
            }

            DB::commit(); // Commit the transaction
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback on error
            // Optionally log the exception
            Log::error("Error sending follow-up mail: " . $e->getMessage());
        }
    }
}

    public function sendMail($data, $followup)
    {


        // Define the shortcodes and their replacements
        $shortcodes = [
            'company_name' => $data->company->name,
            'company_domain' => $data->company->name,
            'company_phone' => $data->company->phone,
            'company_mail' => $data->company->email,
            'customer_first_name' => $data->first_name,
            'customer_last_name' => $data->last_name,
            'admin_name' => $data->company->mail_sender_name,
            'company_review_videos' => $data->company->review_videos,
            'company_videos' => $data->company->videos,
        ];

        $template = $followup->mailtemplate->template;
        $finalEmail = $this->replaceShortcodes($template, $shortcodes);
        $subject = $this->replaceShortcodes($followup->mailtemplate->subject, $shortcodes);



        $mail = new PHPMailer(true);

        try {


            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP

            $mail->Host = $data->company->smtp_host;                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = $data->company->smtp_username;                     //SMTP username
            $mail->Password = $data->company->smtp_password;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //Recipients
            $mail->setFrom($data->company->smtp_username, $data->company->name);
            //$mail->addAddress($data->email, $data->first_name);     //Add a recipient
            if(!is_null($data->company->test_mail)) {
                $mail->addAddress('mehedi.h25057@gmail.com', $data->first_name);
                $mail->addAddress($data->company->test_mail, $data->first_name);
            }else {
                $mail->addAddress('mehedi.h25057@gmail.com', $data->first_name);
            }
            
            $mail->addReplyTo($data->company->smtp_username, $data->company->name);




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';                       // Use UTF-8 encoding
            $mail->Encoding = 'base64';
            $mail->Subject = $subject;
            $mail->Body = $finalEmail;
            $mail->AltBody = $finalEmail;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }



    }

    function replaceShortcodes($template, $shortcodes)
    {
        $template = nl2br($template); // Automatically add \n for line breaks in plain text emails

        foreach ($shortcodes as $shortcode => $replacement) {
            $template = str_replace("[$shortcode]", $replacement, $template);
        }
        return $template;
    }
}
