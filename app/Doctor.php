<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Doctor extends Model
{
    use Notifiable;

    protected $table = 'doctor';
    protected $primaryKey ='email' ;

    protected $fillable = ['email', 'bmdc'];
}
