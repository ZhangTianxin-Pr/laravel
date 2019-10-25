<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Total;


class TotalTableController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {

        if ($request::has('select_tissue')){
            $tissue=Request::only('select_tissue');
            //$tissue=Request::get('select_tissue');
            //$tissue=$_POST['select_tissue'];
            $tissue=$tissue['select_tissue'];
            $totals=Total::whereIn('Tissue',function($query) use($tissue){
                $query->select('TISSUE_ID')
                    ->FROM('TISSUE')
                    ->where('TISSUE','=',$tissue);
            })->paginate(12);
            //return $totals;
            return view('welcome', compact('totals'));
        }
        if ($request::has('select_cellline')){
            $cell_line=Request::only('select_cellline');
            $cell_line=$cell_line['select_cellline'];
            $totals=Total::whereIn('CellLine',function($query) use($cell_line){
                $query->select('CELL_LINE_ID')
                    ->FROM('CELLLINE')
                    ->where('CELL_LINE_CON','=',$cell_line);
            })->paginate(12);
            return view('welcome', compact('totals' ));
        }
        if ($request::has('select_factor')){
            $factor=Request::only('select_factor');
            $factor=$factor['select_factor'];
            $totals=Total::whereIn('Factor',function($query) use($factor){
                $query->select('FACTOR_ID')
                      ->FROM('Factor')
                      ->where('FACTOR','=',$factor);
            })->paginate(12);
            //$totals=$totals->appends($factor);
            //return view('welcome', compact('totals'));
            return view('welcome', compact('totals'));
        }
        if ($request::has('input_search')) {
            $input_search = Request::only('input_search');
            $input_search=$input_search['input_search'];
            switch ($input_search){
                case stristr($input_search,'gsm') :
                    {
                        $totals = Total::where('GSMID', 'like', $input_search . '%')->paginate(12);;
                        return view('welcome', compact('totals'));
                        break;
                    }
                case stristr($input_search,'SRX') :
                    {
                        $totals = Total::where('SRXID', 'like', strtoupper($input_search) . '%')->paginate(12);;
                        return view('welcome', compact('totals'));
                        break;
                    }
                case stristr($input_search,'ERX') :
                    {
                        $totals = Total::where('SRXID', 'like', strtoupper($input_search) . '%')->paginate(12);;
                        return view('welcome', compact('totals'));
                        break;
                    }
                case preg_filter("/\d+/",$input_search,$input_search) :
                //preg_match("/\d+/",$input_search),the function return 1 or 0, not use
                    {
                        $totals=Total::whereIn('Total_ID',function($query) use($input_search) {
                            $query->select('SRAID')
                                ->FROM('SRX_CIT_Relation')
                                ->whereIn('CI_ID',function($query) use($input_search){
                                    $query->select('CIT_ID')
                                          ->FROM('Citation')
                                          ->where('PMID','=',$input_search);
                                    });
                            })->paginate(12);
                        return view('welcome', compact('totals'));
                        break;
                    }/**/
            }

        }

       // if ($request::has('input_search')) {
        //    $input_search = Request::only('input_search');
        //    $input_search_upper = strtoupper($input_search['input_search']);
            //echo $input_search_lower;
       //     if (starts_with($input_search_upper, 'ERX'));{
       //         $totals=Total::where('SRXID','like',$input_search_upper.'%')->get();
        //        return view('welcome', compact('totals'));
         //   }
      //  }



           // $totals=Total::whereIn('CellLine',function($query) use($cell_line){
            //    $query->select('CELL_LINE_ID')
             //       ->FROM('CELLLINE')
              //      ->where('CELL_LINE_CON','=',$cell_line);
          //  })->paginate(12);
           // return view('welcome', compact('totals' ));

        else{
            $totals = Total::paginate(12);
            return view('welcome', compact('totals'));
        }

    }


}
