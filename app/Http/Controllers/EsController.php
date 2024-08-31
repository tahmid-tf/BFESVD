<?php

namespace App\Http\Controllers;

use App\Es;
use Illuminate\Http\Request;

class EsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Es::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() == 0) {
            return view('user.forms.es.create');
        }else{
            return redirect()->route('es.edit',session('tracker'));
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
        $inputs['es_bundle'] = \request('es_bundle');
        $inputs['es_class'] = \request('es_class');
        $inputs['es_text'] = \request('es_text');
        $inputs['sub_es_text'] = \request('sub_es_text');
        $inputs['teeb'] = \request('teeb');
        $inputs['iucn'] = \request('iucn');

//        return $inputs;
        auth()->user()->es()->create($inputs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Es  $es
     * @return \Illuminate\Http\Response
     */
    public function show(Es $es)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Es  $es
     * @return \Illuminate\Http\Response
     */
    public function edit(Es $es)
    {
        if (session('tracker') && Es::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0) {
            $tracking = session()->get('tracker');
            return view('user.forms.es.edit', compact('tracking'));
        }else{
            return "Unauthorized entry for Ecosystem Page";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Es  $es
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Es $es)
    {
        if (session('tracker') && Es::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0){
            $inputs = [];

            $inputs = [];
            $inputs['es_value_id'] = \request('es_value_id');
            $inputs['es_bundle'] = \request('es_bundle');
            $inputs['es_class'] = \request('es_class');
            $inputs['es_text'] = \request('es_text');
            $inputs['sub_es_text'] = \request('sub_es_text');
            $inputs['teeb'] = \request('teeb');
            $inputs['iucn'] = \request('iucn');
            $inputs['comment'] = \request('comment');

            Es::where('es_value_id','=',session('tracker'))->update($inputs);
        }else{
            return "Unauthorized update";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Es  $es
     * @return \Illuminate\Http\Response
     */
    public function destroy(Es $es)
    {
        //
    }
}
