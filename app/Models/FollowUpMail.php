<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUpMail extends Model
{
    use HasFactory;
    function mailtemplate() {
        return $this->belongsTo( MailTemplate::class, 'mail_template_id' );
    }
    
}
