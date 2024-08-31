<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('cms.admin_content.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.admin_content.about.create');
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

        About::create($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('cms.admin_content.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        } else {
            $inputs['image'] = $about->image;
        }

        $about->update($inputs);
        return redirect()->route("about.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        if (Storage::disk('public')->exists($about->image)) {
            $image = 'storage/' . $about->image;
            unlink($image);
        }

        $about->delete();

        return redirect()->route('about.index');
    }
}
