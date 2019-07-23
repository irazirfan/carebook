<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{

    protected $table = 'technician';
    protected $primaryKey ='id' ;

    protected $fillable = ['email', 'center'];
}
