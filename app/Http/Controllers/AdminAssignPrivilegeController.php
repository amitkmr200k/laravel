<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Role;
use App\Model\Resource;
use App\Model\Action;
use App\Model\ManagePrivilege;
use DB;

class AdminAssignPrivilegeController extends Controller
{


    public function view_page()
    {
        $role             = Role::all();
        $resource         = Resource::all();
        $action           = Action::all();
        $manage_privilege = ManagePrivilege::all();

        return view('admin_assign_privilege', ['roles_table' => $role, 'resources_table' => $resource, 'actions_table' => $action, 'manage_privileges_table' => $manage_privilege]);

    }//end view_page()


    public function assign_privilege(Request $request)
    {
        $role_id   = $request->input('role_id');
        $id        = $request->input('id');
        $length    = strlen($role_id);
        $find_role = strpos($role_id, 'role');
        $role_id   = (int) substr($role_id, ($find_role + 4), ($length - $find_role - 4));

        DB::table('manage_privileges')->where('role_id', $role_id)->delete();

        if (!empty($id))
        {
            foreach ($id as $value)
            {
                $resource_action['ids'] = $value;
                $length                 = strlen($resource_action['ids']);
                $find_action            = strpos($resource_action['ids'], 'action');
                // substr(string,starting position,length of substing to be extracted)
                $resource_id = (int) substr($resource_action['ids'], 8, ($find_action - 8));
                $action_id   = (int) substr($resource_action['ids'], ($find_action + 6), ($length - $find_action - 6));

                DB::table('manage_privileges')->insert(['role_id' => $role_id, 'resource_id' => $resource_id, 'action_id' => $action_id ]);
            }
        }

        $message = ['success' => 'true'];
        return response()->json($message);

    }//end assign_privilege()


}//end class
