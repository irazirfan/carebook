<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg extends Model
{

    protected $table = 'user';
    protected $primaryKey ='email' ;

    protected $fillable = ['email','phone', 'firstname', 'lastname', 'address', 'gender', 'password', 'nid'];
}
