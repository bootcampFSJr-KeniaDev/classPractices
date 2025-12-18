<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id',
        'user_id',
        'date_appointment',
        'time_appointment',
        'reason',
        'status',
    ];
}
