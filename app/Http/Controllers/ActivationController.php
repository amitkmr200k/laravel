<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Route;
use URL;
use App\Model\users;

class ActivationController extends Controller
{


    public function is_active($check_activation_code)
    {
        $user = users::where('activation_code', $check_activation_code)->first();

        if (!$user)
        {
            $message = 'invalid';
        }
        else
        {
            $user->is_active = 1;
            $user->save();
            $message = 'activated';
        }

        return redirect('login')->with('message', $message);

    }//end is_active()


}//end class
