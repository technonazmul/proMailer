<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendFollowupMailJob;

class SendFollowupMail extends Command
{
    protected $signature = 'send:followupmail';
    protected $description = 'Dispatch job to send follow-up mails';

    public function handle()
    {
        SendFollowupMailJob::dispatch();
        $this->info("Follow-up mail job dispatched.");
    }
}
