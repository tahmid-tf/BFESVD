<?php

namespace App\Http\Controllers;

use App\Background;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $backgrounds = Background::all();
        return view('cms.admin_content.home_page.index',compact('backgrounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.admin_content.home_page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }

        Background::create($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function show(Background $background)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function edit(Background $background)
    {
        return view('cms.admin_content.home_page.edit',compact('background'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Background $background)
    {
//        $trade = Trade::find($id);

        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        } else {
            $inputs['image'] = $background->image;
        }

        $background->update($inputs);
        return redirect()->route("background.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function destroy(Background $background)
    {
        if (Storage::disk('public')->exists($background->image)) {
            $image = 'storage/' . $background->image;
            unlink($image);
        }

        $background->delete();

        return redirect()->route('background.index');
    }
}
