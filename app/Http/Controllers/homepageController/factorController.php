<?php

namespace App\Http\Controllers\homepageController;

use App\Expinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class factorController extends Controller
{
    public function index()
    {
       // $insert = DB::insert('insert into Expinfo (ID,SRX, Factor, Know, Tissue, Cellline, Stage, Treatment) values(?,?,?,?,?,?,?,?)', ['1','GSM2941906', 'SA', 'none', 'none', 'CNS-derived', 'none', 'none']);
        //var_dump($insert);
        $info = Expinfo::all();
        //var_dump($info);
        return view('test.index') -> with(['test' => $info]);
    }
}
