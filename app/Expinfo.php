<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expinfo extends Model
{
    protected $table = 'Expinfo';
    //����ģ�Ͷ�Ӧ�ı���
    public $timestamps = true;
    //false�ر�ʱ���
    protected $dateFormat = 'U';
    //ģ�������еĴ洢��ʽ
}
