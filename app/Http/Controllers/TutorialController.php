<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorials = Tutorial::all();
        return view('cms.admin_content.tutorial.index', compact('tutorials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.admin_content.tutorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        Tutorial::create($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Tutorial $tutorial
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorial $tutorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Tutorial $tutorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorial $tutorial)
    {
        return view('cms.admin_content.tutorial.edit', compact('tutorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Tutorial $tutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorial $tutorial)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        $tutorial->update($inputs);
        return redirect()->route("tutorial.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Tutorial $tutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorial $tutorial)
    {
        $tutorial->delete();

        return redirect()->route('tutorial.index');
    }
}
