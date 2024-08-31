<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded = [];

// ------------------ about us image -------------------------

    public static function aboutUsImage()
    {
        $about = About::first();
        return $about;
    }

// ------------------ about us image -------------------------

// ----------------- about us content loop ------------------

    public static function aboutUsContent()
    {
        $abouts = About::all();
        return $abouts;
    }

// ----------------- about us content loop ------------------
}
