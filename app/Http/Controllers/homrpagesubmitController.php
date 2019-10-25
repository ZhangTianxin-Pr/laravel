<?php

namespace App\Http\Controllers;

use Request;
use App\Tissue;


class homrpagesubmitController extends Controller
{
    public function index(Request $request){
       // if ($request -> has('select_tissue')){
          //$tissue=$_POST['select_tissue'];
            //dd($tissue);
        $tissue=Request::only('select_tissue');
        //$total->Tissue_relation->TISSUE_ID;
        //echo $tissue;
        //print_r($tissues);
        //$tissue=$tissues['select_tissue'];
        //$tissues=Total::find('ERX004310');
        $tissueids=Tissue::select('TISSUE_ID')->where('TISSUE',$tissue);
        foreach($tissueids as $tissueid)
        $selects=Tissue::where('TISSUE_ID','=',$tissueid)->relation2;
        //$selects=Total::select($tissue)->get()->toArray();
        print_r($selects);
        //foreach ($selects as $select){
         //   echo $select;
        //}
        //dd($selects);
        //error:Non-static method Illuminate\Http\Request::only() should not be called statically
        //slove: change (use Illuminate\Http\Request;) to (use Request;)
         //$selects=Total::where('Tissue','=','$tissue')->first();
        //foreach($tissues as $tissue) {
         //   $selects=Total::where('Tissue','$tissue');
          //  dd($selects);
       // }
          //foreach($selects as $select){
           //   $select_Tissue_Factor=$select;
            //  dd($select_Tissue_Factor);
          //}

          //return view('welcome', compact('Tissue_select_Factors'));
      //  }
        //if ($request -> has('select_cellline')){
        // echo $_POST['select_cellline'];
        //}
        //if ($request -> has('select_stage')) {
        //  echo $_POST['select_stage'];
        //}
        //if ($request -> has('select_factor')) {
        // echo $_POST['select_factor'];
        //}
        //$input = Request::all();
        //echo $input;   
        //dd($stage=$request['select_cellline']);
        //$stage=$request['select_cellline']
       // $total = Total::where('stage', '$stage');
        //dd($stage);
        //return view('TotalTable', ['total' => $total]);
        //$cellline=$request['select_cellline'];
        //$tissue=$request['select_tissue'];
        //$factor=$request['select'];
    }
}
