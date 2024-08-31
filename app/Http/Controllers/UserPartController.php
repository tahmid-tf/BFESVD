<?php

namespace App\Http\Controllers;

use App\Application;
use App\Ecosystem;
use App\User;
use Illuminate\Http\Request;

class UserPartController extends Controller
{
    public function userPanel()
    {
        return view('user.start_survey');
    }

    public function startSurvey()
    {

        if (!session('tracker')) {
            $rd = 'ESV ' . random_int(10000000, 99999999);

            auth()->user()->application()->create([
                "es_value_id" => $rd,
                "status" => 'u'
            ]);

            session()->put('tracker', $rd);
            return view('user.forms.ecosystem_information.create');
        }else{
            if(Ecosystem::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0){
                return redirect()->route('ecosystem.edit',session('tracker'));
            }else{
                return redirect()->route('ecosystem.index');
            }
        }

    }

    public function editSurvey(){
        $applications = auth()->user()->application;
        return view('user.edit_survey.edit_survey', compact('applications'));
    }

    public function viewSurvey($track){
        session()->put('tracker',$track);

        return redirect()->route('ecosystem.index');
    }
}
