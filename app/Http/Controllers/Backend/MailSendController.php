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


class MailSendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function followupmail()
    {
        $datas = Data::where('status', '!=', '0')->get();
        $followupmails = FollowUpMail::orderBy('time_gap', 'asc')->get();

        foreach ($datas as $data) {
            if (!empty($data->email)) {
                foreach ($followupmails as $followup) {

                    $dataCreatedAt = $data->created_at;
                    $createdAtDateOnly = $dataCreatedAt->startOfDay();
                    $daysDifference = $createdAtDateOnly->diffInDays(Carbon::now());
                    $daydifference = intval($daysDifference);

                    if ($daydifference < $followup->time_gap) {
                        break;
                    } elseif ($daydifference == $followup->time_gap) {
                        if (strtolower($data->event->name) == "wedding" && $followup->event_type == "wedding") {

                            $this->sendMail($data, $followup);

                        } else {

                        }

                    } else {
                        continue;
                    }

                }
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
            $mail->addAddress('technonazmul@gmail.com', $data->first_name);     //Add a recipient
            $mail->addReplyTo($data->company->smtp_username, $data->company->name);




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
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
