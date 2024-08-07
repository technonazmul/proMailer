<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FollowUpMail;
use App\Models\Data;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class MailSendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function followupmail()
    {
        //$followupmails = Data::where('status', '!=', '0')->get();
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP

            $mail->Host = 'mail.surreydj.co.uk';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'office@surreydj.co.uk';                     //SMTP username
            $mail->Password = 'Surr3y%ShuvoShuvo1%';                               //SMTP password
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
            $mail->setFrom('office@surreydj.co.uk', 'Surrey DJs');
            $mail->addAddress('technonazmul@gmail.com', 'Nazmul');     //Add a recipient
            $mail->addReplyTo('office@surreydj.co.uk', 'Surrey DJs');




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here last test';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
