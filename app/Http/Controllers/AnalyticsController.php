<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    public function analytics($cul){
        $analytics = DB::select("select status, full_reference, district,zone, site_area, division, es_class from applications inner join bibilographics on applications.es_value_id = bibilographics.es_value_id inner join studies on studies.es_value_id = applications.es_value_id inner join ecosystems on ecosystems.es_value_id = applications.es_value_id inner join es on applications.es_value_id = es.es_value_id where es.es_class = '${cul}' and applications.status = 'a'");

        return response()->json([
            'data' => $analytics
        ]);
    }
}
