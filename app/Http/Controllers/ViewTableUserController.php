<?php

namespace App\Http\Controllers;

use App\Application;
use App\Bibilographic;
use App\Data;
use App\Ecosystem;
use App\Es;
use App\Study;
use App\Valuation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class ViewTableUserController extends Controller
{
    public function viewTable(){

//       ----------------------------- view table paginate ------------------------------------------------------------

        $id = auth()->user()->id;

        $applications = Application::where('status','a')->where('user_id',$id)->paginate(10);
        

        // ----------------------------- view table paginate ------------------------------------------------------------


        return view('user.view_data.index',compact('applications'));
    }

    public function getData($data){
        $ecosystem = Ecosystem::where('es_value_id','=',$data)->orderBy('id','desc')->first();
        $es = Es::where('es_value_id','=',$data)->orderBy('id','desc')->first();
        $study = Study::where('es_value_id','=',$data)->orderBy('id','desc')->first();
        $valuation = Valuation::where('es_value_id','=',$data)->orderBy('id','desc')->first();
        $bibliographic = Bibilographic::where('es_value_id','=',$data)->orderBy('id','desc')->first();
        $data_format = Data::where('es_value_id','=',$data)->orderBy('id','desc')->first();
        $application = Application::where('es_value_id','=',$data)->orderBy('id','desc')->first();


        return response()->json([
            "ecosystem"=> $ecosystem,
            "es" => $es,
            "study" => $study,
            "valuation" => $valuation,
            "application" => $application,
            "bibliographic" => $bibliographic,
            "data_format" => $data_format
        ]);
    }

    public function singleData($data){
        return view('user.view_data.view_single_data', compact('data'));
    }
}
