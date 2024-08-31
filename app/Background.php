<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $guarded = [];

//  ------------------ Landing page left content cms ------------------------

    public static function leftContent(){
        $background_left = Background::first();
        return $background_left;
    }

//  ------------------ Landing page left content cms ------------------------

//  ------------------ Landing page left content cms ------------------------

    public static function rightContent(){
        $background_right = Background::skip(1)->take(1)->get()->first();
        return $background_right;
    }

//  ------------------ Landing page left content cms ------------------------

// ------------------------------- video link -------------------------------

    public static function videoLink(){
        $tutorial = Tutorial::first();
        return $tutorial;
    }

// ------------------------------- video link -------------------------------

}
