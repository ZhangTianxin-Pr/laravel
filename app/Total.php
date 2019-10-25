<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    //指定表名
    protected $table = 'SRX_TOTAL';
    //指定主键
    protected $primaryKey = 'SRXID';
    //去掉时间戳
    public $timestamps = false;
    //protected $filllable = ['Antibody'];
    //默认主键类型为int，返回字符串时要将主键的类型修改
    protected $keyType = 'string';
    public function Factor_relation()
    {
        return $this->belongsTo('App\Factor','Factor');
    }
    public function Cellline_relation()
    {
        return $this->belongsTo('App\CellLine','CellLine');
    }
    public function Tissue_relation()
    {
        return $this->belongsTo('App\Tissue','Tissue');
    }
    public function Cia_relation()
    {
        return $this->belongsToMany('App\Citation','SRX_CIT_Relation','SRAID','CI_ID','Total_ID','CIT_ID');
        //
    }
}
