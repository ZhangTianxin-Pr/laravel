<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factor;


class FactorTableController extends Controller
{
    public function Factor()
    {
        //$srx_id = Total::findOrFail($SRX);
        //return view('TotalTable', compact('srx_id'));
        //return view('TotalTable', compact('total'));
        $factor = Factor::find(1)->relation1;
        return view('welcome', compact('factor'));
    }
}
