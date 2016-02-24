<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActivationController extends Controller
{
    public function is_not_registered()
    {
    	$not_registered = 1;
        return response()->view('registration',$not_registered);
    }

}
