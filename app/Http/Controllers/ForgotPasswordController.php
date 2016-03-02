<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\Model\users;
use DB;

class ForgotPasswordController extends Controller
{
    public function view_page()
    {
        return view('forgot_password');
    }
    public function send_reset_link(Request $request)
    {
    	$this->validate($request, [
        'email' => 'required|email|exists:users,email'
        ]);

    	//$user = DB::table('users')->where('email', $request->email)->first();


    	 Mail::send('test_email',['name' =>'John'],function($message){
                $message->to('amitkmr200k@gmail.com','adada')->from('mfsi.amitkumar@gmail.com')->subject('a');
            });
        return back()->with('message', 'Password reset link has been sent, check your inbox');
    }
}
