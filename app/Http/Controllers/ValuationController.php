<?php

namespace App\Http\Controllers;

use App\Valuation;
use Illuminate\Http\Request;

class ValuationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Valuation::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() == 0) {
            return view('user.forms.valuation.create');
        }else{
            return redirect()->route('valuation.edit',session('tracker'));
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
        auth()->user()->valuation()->create(\request()->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Valuation  $valuation
     * @return \Illuminate\Http\Response
     */
    public function show(Valuation $valuation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Valuation  $valuation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (session('tracker') && Valuation::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0) {
            $tracking = session()->get('tracker');
            return view('user.forms.valuation.edit', compact('tracking'));
        }else{
            return "Unauthorized entry for valuation Page";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Valuation  $valuation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (session('tracker') && Valuation::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0){
            $inputs = [];


            $inputs['es_value_id'] = request('es_value_id');
            $inputs["valuation_method"]= request('valuation_method');
            $inputs["valuation_other_1"]= request('valuation_other_1');
            $inputs["valuation_other_2"]= request('valuation_other_2');
            $inputs["valuation_measured_text"]=request('valuation_measured_text');
            $inputs["value_original"]= request('value_original');
            $inputs["value_total"]= request('value_total');
            $inputs["value_currency"]= request('value_currency');
            $inputs["value_year"]= request('value_year');
            $inputs["spatial_unit"]= request('spatial_unit');
            $inputs["temporal_unit"]= request('temporal_unit');
            $inputs["beneficial_unit"]= request('beneficial_unit');
            $inputs["beneficial_other_1"]= request('beneficial_other_1');
            $inputs["beneficial_other_2"]= request('beneficial_other_2');
            $inputs["beneficial_number"]= request('beneficial_number');
            $inputs["beneficial_text"]= request('beneficial_text');
            $inputs["comment"]= request('comment');


            Valuation::where('es_value_id','=',session('tracker'))->update($inputs);
        }else{
            return "Unauthorized update";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Valuation  $valuation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Valuation $valuation)
    {
        //
    }
}
