<?php

namespace App\Http\Controllers;

use Request;

class OptionController extends Controller
{
    public function index(Request $request){
        $input=$request::all();
        $chrom=$input['chrom'];
        $chromstart=$input['chromstart'];
        $chromend=$input['chromend'];
        $factor=$input['select_factor'];
        echo $chrom;
        echo $chromstart;
        echo $chromend;
        echo $factor;
        //return view('Option', compact('chrom'));
    }
}
