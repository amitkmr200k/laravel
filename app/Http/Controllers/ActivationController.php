<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Route;
use URL;
use HTML;

class ActivationController extends Controller
{

    public function is_activate()
    {
    	$a= URL::full();
		echo $a;
        $length    = strlen($a);
        $find_code = strpos($a, '?');
        $a   = substr($a,$find_code+1);
        echo '<br>';
        echo $a;
      
        $msg['not_registered'] = 1;
        //return response()->view('registration', $msg);

    }//end is_not_registered()


}//end class
