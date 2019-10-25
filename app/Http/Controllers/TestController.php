<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\test;

class TestController extends Controller
{
    public function index(Request $request){
        //if ($request::has('test1')){
        $test1=$request::only('test1');
        $test1=$test1['test1'];
        $test2=$request::only('test2');
        $test2=$test2['test2'];
        $test3=$request::only('test3');
        $test3=$test3['test3'];
        $result=shell_exec("bash /var/www/html/bootstrap/app/Http/add.sh $test1 $test2 $test3");
        return view('test', compact('result'));
        //echo $test1;
        //echo $test2;
        //echo $test3;

        //return view('test');

        //$studnets=test::all();
        //dd($studnets);
        //var_dump($student['attributes']);

        //$student=Student::get();
        //var_dump($student);
    }
}
