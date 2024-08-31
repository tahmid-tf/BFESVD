<?php

namespace App\Http\Controllers;

use App\Bibilographic;
use App\Data;
use Illuminate\Http\Request;

class BibilographicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Bibilographic::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->count() == 0) {
            return view('user.forms.bibilographic.create');
        } else {
            return redirect()->route('bibilographic.edit', session('tracker'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  return $request->all();

        auth()->user()->bibilographic()->create(\request()->all());

        // -------------------------------- this page is rendered by laravel blade engine ----------------------------------------

        return redirect()->route('data.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Bibilographic $bibilographic
     * @return \Illuminate\Http\Response
     */
    public function show(Bibilographic $bibilographic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Bibilographic $bibilographic
     * @return \Illuminate\Http\Response
     */
    public function edit(Bibilographic $id)
    {
        if (session('tracker') && Bibilographic::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->count() > 0) {

            $tracking = Bibilographic::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->first();

            return view('user.forms.bibilographic.edit', compact('tracking'));
        } else {
            return "Unauthorized entry for bibliographic edit Page";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Bibilographic $bibilographic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (session('tracker') && Bibilographic::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->count() > 0) {


            $inputs = [];
            $inputs['author'] = \request('author');
            $inputs['year_publication'] = \request('year_publication');
            $inputs['title'] = \request('title');
            $inputs['full_reference'] = \request('full_reference');
            $inputs['study_link'] = \request('study_link');
            $inputs['research_link'] = \request('research_link');
            $inputs['comment'] = \request('comment');

            Bibilographic::where('es_value_id', '=', session('tracker'))->update($inputs);

            if (auth()->user()->role == "user") {
                if (Data::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->count() > 0) {
                    return redirect()->route('data.edit', session('tracker'));
                } else {
                    return redirect()->route('data.index');
                }
            } else {
                return redirect()->route('data.edit', session('tracker'));
            }
        } else {
            return "Unauthorized update for bibliographic page";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Bibilographic $bibilographic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bibilographic $bibilographic)
    {
        //
    }
}
