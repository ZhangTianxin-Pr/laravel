<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    protected $table = 'Citation';
    protected $primaryKey = 'CIT_ID';
    public $timestamps = false;
    #protected $keyType = 'string';

   public function SRX_Cia_relation()
    {
        return $this->belongsToMany('App\Total','SRX_CIT_Relation','CI_ID','SRAID','CIT_ID','Total_ID');
    }
}
