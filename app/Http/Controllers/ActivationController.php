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

    public function is_activate()
    {
        $check_activation_code = URL::full();
        $length    = strlen($check_activation_code);
        $find_code = strpos($check_activation_code, '?');
        $check_activation_code   = substr($check_activation_code,$find_code+1);
        echo '<br>';
        echo $check_activation_code;
        echo '<br>';
        echo '<br>';
        echo 'hi';

        $user = users::where('activation_code', $check_activation_code)->first();

        if(!$user)
        {
            $message = 'invalid';
        }
        else
        {
            $user->is_active = 1;
            $user->save();
            $message = 'activated';
        }
        echo '<pre>';
        print_r($user);
        echo '</pre>';
        return redirect('login')->with('message', $message);
        //return response()->view('registration', $msg);

    }//end is_not_registered()


}//end class
