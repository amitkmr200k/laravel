<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ManagePrivilege;
use App\Model\Action;
use Auth;

class AssignmentController extends Controller
{


    public function view_page()
    {
        $role_id = Auth::user()->role_id;

        $where_condition = [
                            'role_id'     => $role_id,
                            'resource_id' => 1,
                           ];

        $allowed_action_id = ManagePrivilege::where($where_condition)->get();

        foreach ($allowed_action_id as $value)
        {
            $allowed_action_name[] =
                            Action::where('id', $value->action_id)->get();
        }

        foreach ($allowed_action_name as $value)
        {
            foreach ($value as $action)
            {
                $action_allowed[$action->operation] = $action->operation;
            }
        }

        return view('assignment')->with('action_allowed', $action_allowed);

    }//end view_page()


}//end class
