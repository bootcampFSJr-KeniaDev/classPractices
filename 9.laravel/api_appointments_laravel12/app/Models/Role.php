<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //forzamos que el nombre de la tabla es role porque sino laravel lo asume como roles
    protected $table = 'role';
}
