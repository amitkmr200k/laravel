<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\users;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUserInfoController extends Controller
{


    public function view_page()
    {
        return view('admin_all_user_info');

    }//end view_page()


    public function view_user_data(Request $request)
    {
        $search = $request->input('_search');

        if ('true' === $search)
        {
            $search_field     = $request->input('searchField');
            $search_string    = $request->input('searchString');
            $search_operation = $request->input('searchOper');

            switch ($search_operation)
            {
                case 'eq':
                    $condition = '=';
                    break;

                case 'ne':
                    $condition = '!=';
                    break;

                default:
                    $condition = '=';
                    break;
            }

            $query = users::
                     where($search_field, $condition, $search_string)
                     ->get();

            return response()->json($query);
        }
        else
        {
            $users = users::all();
            return response()->json($users);
        }//end if

    }//end view_user_data()


    public function update_user_data(Request $request)
    {

        $id_as_string = $request->input('id');
        $update_type  = $request->input('oper');

        if ('del' === $update_type)
        {
            $id_as_string = explode(',', $id_as_string);
            $i            = 0;

            foreach ($id_as_string as $value)
            {
                $id[$i] = $value;
                $i++;
            }

            $count = 0;

            while ($count < $i)
            {
                $delete_id = users::find($id[$count]);
                $delete_id->delete();
                $count++;
            }
        }
        else if ('edit' === $update_type)
        {
            $save_data = users::find($request->input('id'));

            $save_data->first_name           = $request->input('first_name');
            $save_data->middle_name          = $request->input('middle_name');
            $save_data->last_name            = $request->input('last_name');
            $save_data->user_name            = $request->input('user_name');
            $save_data->age                  = $request->input('age');
            $save_data->dob                  = $request->input('dob');
            $save_data->gender               = $request->input('gender');
            $save_data->marital_status       = $request->input('marital_status');
            $save_data->employment           = $request->input('employment');
            $save_data->employer             = $request->input('employer');
            $save_data->residence_street     = $request->input('residence_street');
            $save_data->residence_city       = $request->input('residence_city');
            $save_data->residence_state      = $request->input('residence_state');
            $save_data->residence_pincode    = $request->input('residence_pincode');
            $save_data->residence_contact_no = $request->input('residence_contact_no');
            $save_data->residence_fax_no     = $request->input('residence_fax_no');

            $save_data->save();
        }//end if

    }//end update_user_data()


}//end class
