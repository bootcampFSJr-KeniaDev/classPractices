<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = [
        'name',
        'date_born',
        'gender',
        'address',
        'phone',
        'email',
    ];
}
