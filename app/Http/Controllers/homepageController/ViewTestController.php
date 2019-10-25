<?php

namespace App\Http\Controllers\homepageController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ViewTestController extends Controller
{
    public function index(){
        return view('layout.all');
    }
}
