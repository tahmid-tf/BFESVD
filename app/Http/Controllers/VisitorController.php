<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{

//   ------------------- visitor count ------------------------------

    public function visitorCount()
    {

        $increment = 0;

        if (Visitor::count() > 0) {
            $visitor = Visitor::first()->visitor;

            $increment = $visitor + 1;

            Visitor::first()->update([
                'visitor' => $increment
            ]);

            return response()->json([
                'data' => $increment
            ]);
        } else {
            Visitor::create([
                'visitor' => 1
            ]);

            return response()->json([
                'data' => $increment
            ]);
        }
    }

//   ------------------- visitor count ------------------------------

// --------------------- pdf download counter -----------------------

    public function downloadCount()
    {

        $increment = 0;

        if (Visitor::count() > 0) {
            $visitor = Visitor::first()->download;

            $increment = $visitor + 1;

            Visitor::first()->update([
                'download' => $increment
            ]);

            return response()->json([
                'data' => $increment
            ]);
        } else {
            Visitor::create([
                'download' => 1
            ]);

            return response()->json([
                'data' => $increment
            ]);
        }
    }


// --------------------- pdf download counter -----------------------


// --------------------- map view and map json format -----------------------------------

    public function mapView()
    {
        return view('visitor.map');
    }

    public function studySite()
    {
        $study_site_json = DB::select("select district, status from studies inner join applications on studies.es_value_id = applications.es_value_id where status = 'a'");
        return $study_site_json;
    }




// --------------------- map view and map json format -----------------------------------

// -------------------------- visitor list view -----------------------------------------

public function listView(){
    $applications = DB::select("SELECT * FROM applications where status = 'a'");
    return view('visitor.listView',compact('applications'));
}

// -------------------------- visitor list view -----------------------------------------

}
