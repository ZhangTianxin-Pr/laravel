<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $table = 'Factor';
    protected $primaryKey = 'FACTOR_ID';
    public $timestamps = false;
    #protected $keyType = 'string';

    public function relation1()
    {
        return $this->hasMany('App\Total','Total_ID');
    }
}
