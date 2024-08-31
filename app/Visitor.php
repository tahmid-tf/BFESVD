<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $guarded = [];

//    ---------------- count visitor -------------------------

public static function countViewer(){
    return Visitor::first();
}

//    ---------------- count visitor -------------------------
}
