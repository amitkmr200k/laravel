<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class IsguestController extends Controller
{
      public function is_guest()
    {
        if (Auth::guest())
        {
        return view('auth.login');
        }
        else
        {

        $user = Auth::user();
        return response()->view('home', $user);    
        }        
    }
}
