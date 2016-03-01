<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Role;
use App\Model\users;

class AssignRoleController extends Controller
{
    public function view_page()
    {
        $role = Role::all();
        $user = users::all();
   		return view('admin_assign_role', array('role_name'=>$role,'user_name'=>$user, 'all' =>$user));
    }

    public function update_roles(Request $request)
    {
		
		
		    $user_id   = get_id($request->input('user'), 'user_name_');
		    $role_id   = get_id($request->input('role'), 'role_');
		    $save_data = users::find($user_id);
		   	$save_data->role_id = $role_id;
		    $save_data->save();
		    $message = ['success'=>'true'];
		return response()->json($message);
    }
}
