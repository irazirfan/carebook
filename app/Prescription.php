<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{

    protected $table = 'prescription';
    protected $primaryKey ='prescription_id' ;

    protected $fillable = ['pdf','patinet_email', 'doctor_email', 'date'];

   
}
