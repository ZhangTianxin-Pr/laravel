<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tissue extends Model
{
    protected $table = 'TISSUE';
    protected $primaryKey = 'TISSUE_ID';
    public $timestamps = false;
    #protected $keyType = 'string';

    public function relation2()
    {
        return $this->hasMany('App\Total','Total_ID');
    }

}
