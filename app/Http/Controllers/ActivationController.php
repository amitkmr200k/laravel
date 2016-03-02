<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActivationController extends Controller
{


    public function is_not_registered()
    {
        $msg['not_registered'] = 1;
        return response()->view('registration', $msg);

    }//end is_not_registered()


}//end class
