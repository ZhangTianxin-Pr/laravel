<?php

namespace App\Http\Controllers;

use Illuminate\View\View;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }

    public function total(Total  $total)
    {
        //$srx_id = Total::findOrFail($SRX);
        //return view('TotalTable', compact('srx_id'));
        //return view('TotalTable', compact('total'));
        $totals = Total::all();
        return view('TotalTable', compact('totals'));
    }
}
