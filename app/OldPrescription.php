<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldPrescription extends Model
{

    protected $table = 'old_prescription';
    protected $primaryKey ='id' ;

    protected $fillable = ['patinet_email', 'doctor_name', 'pdf', 'date'];

   
}
