<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role == 'user'){
            return redirect()->route('user.panel');
        }elseif (auth()->user()->role == 'reviewer'){
            return redirect()->route('reviewer.panel');
        }elseif (auth()->user()->role == 'admin'){
            return redirect()->route('admin.panel');
        }elseif (auth()->user()->role == 'super-admin'){
            return redirect()->route('super_admin.panel');
        }elseif (auth()->user()->role == 'waiting'){
            return "Please wait for authorization permission";
        }

        return view('home');
    }
}
