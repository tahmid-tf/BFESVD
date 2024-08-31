<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserCreationController extends Controller
{
    public function allUser(){
        $users = User::orderBy('id','desc')->get();
        return view('super_admin.user_creation.index',compact('users'));
    }

    public function rolePermission($role,$id){

        $user = User::findOrFail($id);
        $user_email = $user->email;
        $user_name = $user->name;

        User::where('id','=',$id)->update([
            'role' => $role
        ]);

        $data = [
            'user' => $user_name,
            'role' => $role
        ];

        Mail::send('mail.registration', $data, function ($message) use ($user_email,$user_name) {
            $message->to($user_email, $user_name)->subject("Thank you for registering for the Bangladesh Forest ESV Database");
        });



        return redirect()->back();
    }
}
