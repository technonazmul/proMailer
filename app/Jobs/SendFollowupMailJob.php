<?php

namespace App\Jobs;

use App\Models\FollowUpMail;
use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class SendFollowupMailJob implements \Illuminate\Contracts\Queue\ShouldQueue
{
    use \Illuminate\Bus\Queueable, \Illuminate\Queue\InteractsWithQueue, \Illuminate\Queue\SerializesModels, \Illuminate\Foundation\Bus\Dispatchable;

    public function handle(): void
    {
        Log::info('I am triggered');

        $datas = Data::where('status', '!=', '0')
        ->where(function ($query) {
            $query->whereNull('send_mail_date')
                ->orWhereDate('send_mail_date', '!=', Carbon::today());
        })
        ->whereDate(DB::raw("STR_TO_DATE(event_date, '%d/%m/%Y')"), '>', Carbon::today())
        ->get();


        $followupmails = FollowUpMail::orderBy('time_gap', 'asc')->get();

        foreach ($datas as $data) {
            DB::beginTransaction();

            try {
                if (!empty($data->email)) {
                    foreach ($followupmails as $followup) {
                        $currentFollowUps = $data->follow_up_send_ids ? explode(',', $data->follow_up_send_ids) : [];

                        if (in_array($followup->id, $currentFollowUps)) {
                            continue;
                        }

                        $dataCreatedAt = $data->created_at->startOfDay();
                        $daysDifference = $dataCreatedAt->diffInDays(Carbon::today());

                        if ($daysDifference < $followup->time_gap) {
                            break;
                        } elseif ($daysDifference == $followup->time_gap) {
                            $mailSent = $this->sendMail($data, $followup);

                            if ($mailSent) {
                                $currentFollowUps[] = $followup->id;
                                $data->send_mail_date = Carbon::today();
                                $data->follow_up_send_ids = implode(',', $currentFollowUps);
                                $data->save();
                            }

                            break;
                        }
                    }
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error("Follow-up mail error: " . $e->getMessage());
            }
        }
    }

    private function sendMail($data, $followup): bool
    {
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

        $template = $this->replaceShortcodes($followup->mailtemplate->template, $shortcodes);
        $subject = $this->replaceShortcodes($followup->mailtemplate->subject, $shortcodes);

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $data->company->smtp_host;
            $mail->SMTPAuth = true;
            $mail->Username = $data->company->smtp_username;
            $mail->Password = $data->company->smtp_password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ]
            ];

            $mail->setFrom($data->company->smtp_username, $data->company->name);
            $mail->addAddress($data->email ?? 'mehedi.h25057@gmail.com', $data->first_name);
            $mail->addReplyTo($data->company->smtp_username, $data->company->name);

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            $mail->Subject = $subject;
            $mail->Body = $template;
            $mail->AltBody = strip_tags($template);

            $mail->send();

            return true;
        } catch (Exception $e) {
            Log::error("PHPMailer error: " . $mail->ErrorInfo);
            return false;
        }
    }

    private function replaceShortcodes($template, $shortcodes)
    {
        $template = nl2br($template);

        foreach ($shortcodes as $shortcode => $replacement) {
            $template = str_replace("[$shortcode]", $replacement, $template);
        }

        return $template;
    }
}
