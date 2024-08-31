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

class ReviewerController extends Controller
{
    public function reviewerPanel()
    {
        return view('reviewer.reviewer');
    }

//    ------------------------ review view data button from front page -----------------------------

    public function viewReviewerTable()
    {

//       ----------------------------- view table paginate ------------------------------

//        $sql = "SELECT * FROM applications where status = 'p' or status = 'pa' or status = 'ur' or status = 'er' or status = 'a' or status = 'd'";
        $applications = Application::where('status','a')->paginate(10);

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

        // ----------------------------- view table paginate -----------------------------


        return view('user.view_data.index', compact('applications'));
    }

//    ------------------------ review view data button from front page -----------------------------


//    ------------------------ review table -----------------------------

    public function reviewerSurvey()
    {

        $applications = Application::where('status', '=', 'p')->orWhere('status', '=', 'pa')->orWhere('status', '=', 'ur')->orWhere('status', '=', 'er')->orWhere('status', '=', 'a')->orWhere('status', '=', 'd')->orderBy('id', 'desc')->get();
        return view('reviewer.review_survey', compact('applications'));
    }

//    ------------------------ review table -----------------------------


// ---------------- review button from edit survey page -----------------

    public function editReviewSurvey($track)
    {
        session()->put('tracker', $track);

        // ----------------  reviewer ---------------

        if (auth()->user()->role == "reviewer") {
            Application::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->update([
                'reviewed_by' => auth()->user()->name,
                'reviewer_id' => auth()->user()->id,
                'review_track' => null,
                'status' => 'ur'
            ]);
            return redirect()->route('ecosystem.index');
        }

        // ---------------- reviewer  ---------------

    }

    // ---------------- review button from edit survey page -----------------


    // ---------------- review button from edit survey page ( reviewer decision ) -----------------

    public function reviewerDecision($track,$decision){
//        return $track . ' ' .$decision;

        $application = Application::where('es_value_id', '=', $track)->orderBy('id', 'desc')->first();
        $application->update([
            'status' => $decision
        ]);

        return redirect()->route('reviewer.survey');

    }

    // ---------------- review button from edit survey page ( reviewer decision ) -----------------


    public function reviewSingleData($data)
    {
        return view('user.view_data.view_single_data', compact('data'));
    }

    // ---------------- review data in pdf format page ( reviewer decision ) ----------------------

}
