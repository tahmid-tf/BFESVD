<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePassword extends Controller
{
    public function changePassword(Request $request){

        $pass = auth()->user()->password;

        $current_password = request('current_password');
        $new_password = request('new_password');
        $confirm_password = request('verify_password');

        if(\Illuminate\Support\Facades\Hash::check($current_password,$pass) && $new_password === $confirm_password){
            auth()->user()->update([
                'password' => bcrypt($new_password)
            ]);
            session()->flash('password_change', 'Password updated successfully');
            return back();
        }else{
            session()->flash('password_change', 'Password Change failed');
            return back();
        }
    }
}
