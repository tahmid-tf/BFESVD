<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontPageController extends Controller
{
    public function index()
    {

        return view('front_page.front_v2');
    }

    //    ----------------------- about page ------------------------

    public function about()
    {
        return view('front_page.about');
    }

    //    ----------------------- about page ------------------------

    //    ----------------------- contact page ------------------------

    public function contact()
    {
        return view('front_page.contact');
    }

    //    ----------------------- contact page ------------------------

    //    ----------------------- teeb page ------------------------

    public function teeb()
    {
        return view('front_page.teeb');
    }

    //    ----------------------- teeb page ------------------------

    //    ----------------------- fao page ------------------------

    public function fao()
    {
        return view('front_page.fao');
    }

    //    ----------------------- fao page ------------------------

    //    ----------------------- teeb_sub_es ------------------------

    public function teeb_sub_es()
    {
        return view('front_page.teeb_sub_es');
    }

    //    ----------------------- teeb_sub_es ------------------------

    //    ----------------------- iucn des ----------------------------

    public function iucn_des()
    {
        return view('front_page.iucn_des');

    }

    //    ----------------------- iucn des -----------------------------


    // ------------------------- contact us ----------------------------

    public function sendMail()
    {

        $name = request('name');
        $email = request('email');
        $question = request('question');


        $data = [
            'name' => $name,
            'email' => $email,
            'question' => $question
        ];

        Mail::send('mail.contact', $data, function ($message) {
            $message->to("dcf-rims@bforest.gov.bd ", "ESVD Query")->subject("Query message for the Bangladesh Forest ESV Database");
        });

        session()->flash('mail-contact', 'Mail Sent Successfully');


        return redirect()->back();
    }

    // ------------------------- contact us ----------------------------

    // ------------------------- currency ------------------------------

    public function currency(){
        return view('front_page.currency');
    }

    // ------------------------- currency ------------------------------


    // ------------------------- currency ------------------------------

    public function valuation(){
        return view('front_page.valuation');
    }

    // ------------------------- currency ------------------------------

}
