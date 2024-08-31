<?php

namespace App\Http\Controllers;

use App\Study;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Study::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() == 0) {
            return view('user.forms.study.create');
        }else{
            return redirect()->route('study.edit',session('tracker'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = [];
        $inputs['es_value_id'] = \request('es_value_id');
        $inputs['district'] = \request('district');
        $inputs['division'] = \request('division');
        $inputs['site_scale'] = \request('site_scale');
        $inputs['other_1'] = \request('other_1');
        $inputs['teeb'] = \request('teeb');
        $inputs['location_name'] = \request('location_name');
        $inputs['legal_status'] = \request('legal_status');
        $inputs['other_2'] = \request('other_2');
        $inputs['site_area'] = \request('site_area');
        $inputs['site_unit'] = \request('site_unit');
        $inputs['site_ha'] = \request('site_ha');
        $inputs['site_condition_text'] = \request('site_condition_text');
        $inputs['site_condition'] = \request('site_condition');
        $inputs['latitude'] = \request('latitude');
        $inputs['longitude'] = \request('longitude');

        auth()->user()->study()->create($inputs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(Study $study)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (session('tracker') && Study::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0) {
            $tracking = session()->get('tracker');
            return view('user.forms.study.edit', compact('tracking'));
        }else{
            return "Unauthorized entry for Ecosystem Page";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if (session('tracker') && Study::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0){
            $inputs = [];

            $inputs['es_value_id'] = \request('es_value_id');
            $inputs['district'] = \request('district');
            $inputs['division'] = \request('division');
            $inputs['site_scale'] = \request('site_scale');
            $inputs['other_1'] = \request('other_1');
            $inputs['teeb'] = \request('teeb');
            $inputs['location_name'] = \request('location_name');
            $inputs['legal_status'] = \request('legal_status');
            $inputs['other_2'] = \request('other_2');
            $inputs['site_area'] = \request('site_area');
            $inputs['site_unit'] = \request('site_unit');
            $inputs['site_ha'] = \request('site_ha');
            $inputs['site_condition_text'] = \request('site_condition_text');
            $inputs['site_condition'] = \request('site_condition');
            $inputs['latitude'] = \request('latitude');
            $inputs['longitude'] = \request('longitude');
            $inputs['comment'] = \request('comment');

            Study::where('es_value_id','=',session('tracker'))->update($inputs);
        }else{
            return "Unauthorized update access for study site";
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
