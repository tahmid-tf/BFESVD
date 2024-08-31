<?php

namespace App\Http\Controllers;

use App\Application;
use App\Bibilographic;
use App\Data;
use App\Ecosystem;
use App\Es;
use App\Study;
use App\Valuation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
//    ----------------------------- Admin Panel -----------------------------------

    public function adminPanel()
    {
        return view('admin.admin');
    }

//    ----------------------------- Admin Panel -----------------------------------

//    ------------------------ admin view data button from front page -----------------------------

    public function viewAdminTable()
    {

//       ----------------------------- view table paginate ------------------------------

        $applications = Application::where('status', 'a')->paginate(10);


        // ----------------------------- admin table paginate -----------------------------


        return view('user.view_data.index', compact('applications'));
    }

//    ------------------------ admin view data button from front page -----------------------------


//    ------------------------ admin table -----------------------------

    public function adminSurvey()
    {

        $applications = Application::where('status', '=', 'pa')->orWhere('status', '=', 'a')->orWhere('status', '=', 'd')->orderBy('id', 'desc')->get();
        return view('admin.admin_survey', compact('applications'));
    }

//    ------------------------ admin table -----------------------------


// ---------------- review button from edit survey page ( admin decision ) -----------------

    public function reviewerDecision($track, $decision)
    {

        $application = Application::where('es_value_id', '=', $track)->orderBy('id', 'desc')->first();
        $application->update([
            'status' => $decision
        ]);

        return redirect()->route('admin.survey');

    }

    // ---------------- review button from edit survey page ( admin decision ) -----------------


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

        return redirect()->route('ecosystem.index');

    }

    // ---------------- review button from edit survey page -----------------

    // ---------------- review button from edit survey page ( admin decision ) -----------------

    public function adminDecision($track, $decision)
    {

        $application = Application::where('es_value_id', '=', $track)->orderBy('id', 'desc')->first();
        $application->update([
            'status' => $decision
        ]);

        // -------------------------- mail to user ----------------------------------

        $submitted_by = $application->user_id;
        $user = User::findOrFail($submitted_by);

        if ($decision == 'a') {
            $user_email = $user->email;
            $user_name = $user->name;

            $data = [
                'user' => $user,
                'tracking_number' => $application->es_value_id,
                'approve' => 'approved'
            ];

            Mail::send('mail.decision', $data, function ($message) use ($user_email, $user_name) {
                $message->to($user_email, $user_name)->subject("Acceptance information for the Bangladesh Forest ESV Database");
            });
        } else if ($decision == 'd') {
            $user_email = $user->email;
            $user_name = $user->name;

            $data = [
                'user' => $user,
                'tracking_number' => $application->es_value_id,
                'approve' => 'disapproved'
            ];

            Mail::send('mail.decision', $data, function ($message) use ($user_email, $user_name) {
                $message->to($user_email, $user_name)->subject("Acceptance information for the Bangladesh Forest ESV Database");
            });
        }


        // -------------------------- mail to user ----------------------------------

        return redirect()->route('admin.survey');

    }

    // ---------------- review button from edit survey page ( admin decision ) -----------------

//    --------------------------------------- delete report ---------------------------------------

    public function deleteReport($track)
    {
        Application::where('es_value_id', '=', $track)->delete();
        Bibilographic::where('es_value_id', '=', $track)->delete();
        Ecosystem::where('es_value_id', '=', $track)->delete();
        Data::where('es_value_id', '=', $track)->delete();
        Es::where('es_value_id', '=', $track)->delete();
        Study::where('es_value_id', '=', $track)->delete();
        Valuation::where('es_value_id', '=', $track)->delete();

        session()->flash('deleted-data', 'Data Deleted');
        return back();
    }


//    --------------------------------------- delete report ---------------------------------------
}
