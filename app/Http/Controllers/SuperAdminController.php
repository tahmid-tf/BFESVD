<?php

namespace App\Http\Controllers;

use App\Application;
use App\Bibilographic;
use App\Data;
use App\Ecosystem;
use App\Es;
use App\Study;
use App\Valuation;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
//    ----------------------------- Super Admin Panel -----------------------------------

    public function adminPanel()
    {
        return view('super_admin.super_admin');
    }

//    ----------------------------- Super Admin Panel -----------------------------------

//    ------------------------ super admin view data button from front page -----------------------------

    public function viewAdminTable()
    {

//       ----------------------------- view table paginate ------------------------------

//        $sql = "SELECT * FROM applications where status = 'p' or status = 'pa' or status = 'ur' or status = 'er' or status = 'a' or status = 'd'";
        $applications = Application::where('status', 'a')->paginate(10);


//        it will only show the accepted data

//        $page = 1;
//        $size = 5;
//        $data = DB::select($sql);
//        $collect = collect($data);
//
//        $applications = new LengthAwarePaginator(
//            $collect->forPage($page, $size),
//            $collect->count(),
//            $size,
//            $page
//        );

        // ----------------------------- admin table paginate -----------------------------


        return view('user.view_data.index', compact('applications'));
    }

//    ------------------------ super admin view data button from front page -----------------------------


//    ------------------------ admin table -----------------------------

    public function adminSurvey()
    {

        $applications = Application::where('status', '=', 'pa')->orWhere('status', '=', 'a')->orWhere('status', '=', 'p')->orWhere('status', '=', 'er')->orWhere('status', '=', 'd')->orWhere('status', '=', 'ur')->orderBy('id', 'desc')->get();
        return view('super_admin.super_admin_survey', compact('applications'));
    }

//    ------------------------ admin table -----------------------------

    // ---------------- review data in pdf format page  ----------------------

    public function reviewSingleData($data)
    {
        return view('user.view_data.view_single_data', compact('data'));
    }

    // ---------------- review data in pdf format page ----------------------

    // ---------------- review button from edit survey page -----------------

    public function editReviewSurvey($track)
    {
        session()->put('tracker', $track);

        if (auth()->user()->role == "super-admin") {
            Application::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->update([
                'reviewed_by' => auth()->user()->name,
                'reviewer_id' => auth()->user()->id,
                'review_track' => null,
                'status' => 'ur'
            ]);
            return redirect()->route('ecosystem.index');
        }

    }

    // ---------------- review button from edit survey page -----------------

    // ---------------- review button from edit survey page ( reviewer decision ) -----------------

    public function adminDecision($track,$decision){
//        return $track . ' ' .$decision;

        $application = Application::where('es_value_id', '=', $track)->orderBy('id', 'desc')->first();
        $application->update([
            'status' => $decision
        ]);

        return redirect()->route('super_admin.survey');

    }

    // ---------------- review button from edit survey page ( reviewer decision ) -----------------

    //    --------------------------------------- delete report ---------------------------------------

    public function deleteReport($track){
        Application::where('es_value_id', '=', $track)->delete();
        Bibilographic::where('es_value_id', '=', $track)->delete();
        Ecosystem::where('es_value_id', '=', $track)->delete();
        Data::where('es_value_id', '=', $track)->delete();
        Es::where('es_value_id', '=', $track)->delete();
        Study::where('es_value_id', '=', $track)->delete();
        Valuation::where('es_value_id', '=', $track)->delete();

        session()->flash('deleted-data','Data Deleted');
        return back();
    }


//    --------------------------------------- delete report ---------------------------------------

// ----------------------------------------- CMS --------------------------------------------------

public function dashboard(){
        return view('cms.admin_content.dashboard.index');
}

// ----------------------------------------- CMS --------------------------------------------------

}
