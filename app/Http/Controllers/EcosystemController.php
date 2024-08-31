<?php

namespace App\Http\Controllers;

use App\Ecosystem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EcosystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Ecosystem::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() == 0) {
            return view('user.forms.ecosystem_information.create');
        }else{
            return redirect()->route('ecosystem.edit',session('tracker'));
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
        $inputs['fao_biome'] = \request('faoBiome');
        $inputs['ecoSystem'] = \request('ecoSystem');
        $inputs['teeb'] = \request('teeb');
        $inputs['zone'] = \request('zone');
        $inputs['others'] = \request('others');
        $inputs['zone_text'] = \request('zone_text');
        $inputs['comment'] = \request('comment');


        auth()->user()->ecosystem()->create($inputs);
//        return response()->json([
//            "status" => Response::HTTP_OK
//        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function show(Ecosystem $ecosystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function edit($track)
    {
        if (session('tracker') && Ecosystem::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0) {
            $tracking = session()->get('tracker');
            return view('user.forms.ecosystem_information.edit', compact('tracking'));
        }else{
            return "Unauthorized entry for Ecosystem Page";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if (session('tracker') && Ecosystem::where('es_value_id','=',session('tracker'))->orderBy('id','desc')->count() > 0){
            $inputs = [];

            $inputs['es_value_id'] = \request('es_value_id');
            $inputs['fao_biome'] = \request('faoBiome');
            $inputs['ecoSystem'] = \request('ecoSystem');
            $inputs['teeb'] = \request('teeb');
            $inputs['zone'] = \request('zone');
            $inputs['others'] = \request('others');
            $inputs['zone_text'] = \request('zone_text');
            $inputs['comment'] = \request('comment');

            Ecosystem::where('es_value_id','=',session('tracker'))->update($inputs);
        }else{
            return "Unauthorized update";
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecosystem $ecosystem)
    {
        //
    }
}
