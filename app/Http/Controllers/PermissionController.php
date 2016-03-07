<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Gate;
use Route;
use App\Model\ManagePrivilege;
use App\Model\Action;

class PermissionController extends Controller
{
    public function access_assignemnt()
    {
        $route = Route::getCurrentRoute()->getPath();

        $allowed_action_name = action_name($route);
        // echo '<pre>';
        // print_r($allowed_action_name);
        // echo '</pre>';

        $length        = strlen($route);
        $find_action   = strpos($route, '/');
        
        if($find_action)
        {
            $check_action_name   = substr($route, $find_action+1);
            //echo $check_action_name;
            foreach ($allowed_action_name as $value) 
            {
                if($check_action_name == $value)
                {
                    
                    return view('acl_test')->with('action_allowed',$allowed_action_name);
                    //break;
                }
            }
            return view('page_not_found');
        }
        else
        {
            foreach ($allowed_action_name as $value) 
            {
                if('view' == $value)
                {
                    
                    return view('acl_test')->with('action_allowed',$allowed_action_name);
                    //break;
                }
            }
            return view('page_not_found');
        }
  
    }
}
