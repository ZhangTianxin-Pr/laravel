<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CellLine extends Model
{
    protected $table = 'CELLLINE';
    protected $primaryKey = 'CELL_LINE_ID';
    public $timestamps = false;
    #protected $keyType = 'string';

    public function relation1()
    {
        return $this->hasMany('App\Total','Total_ID');
    }

}
