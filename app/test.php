<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = 'SRX_QC';
    protected $primaryKey = 'SRX';
    public $incrementing = false;
    //protected $keyType = 'string';
    //this code will cause error : Use of undefined constant string
    public $timestamps = false;
    
}
