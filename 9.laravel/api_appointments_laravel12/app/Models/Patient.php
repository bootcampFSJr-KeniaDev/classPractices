<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //creamos una fabrica de registros random
    use HasFactory;

    //definimos los campos que se pueden asignar de forma masiva
    protected $fillable = [
        'name',
        'date_born',
        'gender',
        'address',
        'phone',
        'email',
    ];
}
