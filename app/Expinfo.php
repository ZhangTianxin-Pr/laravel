<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expinfo extends Model
{
    protected $table = 'Expinfo';
    //设置模型对应的表名
    public $timestamps = true;
    //false关闭时间戳
    protected $dateFormat = 'U';
    //模型日期列的存储格式
}
