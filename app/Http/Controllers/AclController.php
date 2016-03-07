<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AclController extends Controller
{
    public function view_page($request='')
    {
    	if($request)
        return view('acl_test')->with('action_allowed', $request);

    	return redirect('acl');
    	
    }

  
}
