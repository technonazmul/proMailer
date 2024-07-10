<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    function company() {
        return $this->belongsTo( Company::class, 'company_id' );
    }
    function event() {
        return $this->belongsTo( EventType::class, 'event_type_id' );
    }
}
