<?php

namespace App\Http\Controllers;

use App\Application;
use App\Data;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Data::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->count() == 0) {
            return view('user.forms.data.create');
        } else {
            return redirect()->route('data.edit', session('tracker'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth()->user()->data()->create($request->all());


        Application::where('es_value_id', '=', session('tracker'))->update([
            "status" => "p"
        ]);

        //------------------------ mail after pending a form --------------------------------


        $users = \App\User::all();

        foreach ($users as $user) {

            $user_email = $user->email;
            $user_name = $user->name;

            if ($user->role == "reviewer") {

                $data = [
                    'user' => $user_name,
                    'tracking_number' => session('tracker')
                ];

                Mail::send('mail.review', $data, function ($message) use ($user_email, $user_name) {
                    $message->to($user_email, $user_name)->subject("Invitation to Review for the Bangladesh Forest ESV Database");
                });

            }
        }


        //------------------------ mail after pending a form --------------------------------

        session()->forget('tracker');

        return redirect()->route('user.panel');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (session('tracker') && Data::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->count() > 0) {
//            $tracking = session()->get('tracker');

            $tracking = Data::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->first();

            return view('user.forms.data.edit', compact('tracking'));
        } else {
            return "Unauthorized entry for data Page";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (session('tracker') && Data::where('es_value_id', '=', session('tracker'))->orderBy('id', 'desc')->count() > 0) {
            $inputs = [];

            $inputs['data_entered_by'] = \request('data_entered_by');
            $inputs['reviewer_name'] = \request('reviewer_name');
            $inputs['reviewer_date'] = \request('reviewer_date');
            $inputs['notes'] = \request('notes');


            Data::where('es_value_id', '=', session('tracker'))->update($inputs);


            // ------------------------- Sending mail to reviewer from user ------------------------------------------------


            if (auth()->user()->role == "user") {


                $status = Application::where('es_value_id', '=', session('tracker'))->first()->status;

                if ($status == "er") {
                    $es_value_id = Application::where('es_value_id', '=', session('tracker'))->first()->es_value_id;

                    $rev = Application::where('es_value_id', '=', session('tracker'))->first()->reviewer_id;
                    $user = User::find($rev);

                    $user_email = $user->email;
                    $user_name = $user->name;

                    $data = [
                        'user' =>$user,
                        'tracking_number' => $es_value_id
                    ];

                    Mail::send('mail.userToReviewer', $data, function ($message) use ($user_email, $user_name) {
                        $message->to($user_email, $user_name)->subject("Invitation to Review for the Bangladesh Forest ESV Database");
                    });

                }
            }

            // ------------------------- Sending mail to reviewer from user ------------------------------------------------


            // ------------------------- Status moving er to p ------------------------------------------------


            if (Application::where('es_value_id', '=', session('tracker'))->first()->status == 'er') {
                Application::where('es_value_id', '=', session('tracker'))->update([
                    'status' => 'p'
                ]);
            }

            // ------------------------- Status moving er to p ------------------------------------------------


            if (auth()->user()->role == "user"){
                return redirect()->route('edit.survey');
            }else{
                return back();
            }

        } else {
            return "Unauthorized data update";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Data $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
}
