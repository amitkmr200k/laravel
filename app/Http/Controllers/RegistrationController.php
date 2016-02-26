<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\users;
use Illuminate\View\Middleware\ShareErrorsFromSession ;

class RegistrationController extends Controller
{
    public function fill_registration_form()
    {
        return view('registration');
    }

    public function validation(Request $request)
    {
       
        // $this->validate($request, [
        // 'first_name' => 'required|alpha',
        // 'middle_name' => 'regex:/^[a-zA-Z. ]*$/',
        // 'last_name' => 'regex:/^[a-zA-Z. ]*$/',
        // 'user_name' => 'required|alpha_dash|unique:users,user_name',
        // 'password' => 'required|between:6,25|confirmed',
        // 'password_confirmation' => 'required|between:6,25',
        // 'email_id' => 'required|email|unique:users,email_id',
        // 'age' =>'required',
        // 'dob' =>'required|before:01/01/2016',
        // 'employer' =>'required_if:employment,yes|regex:/^[a-zA-Z0-9. ]*$/',
        // 'residence_street' =>'required|regex:/^[a-zA-Z .]*$/',
        // 'residence_city' =>'required|regex:/^[a-zA-Z .]*$/',
        // 'residence_state' =>'required|regex:/^[a-zA-Z .]*$/',
        // 'residence_pincode' =>'required|digits:6',
        // 'residence_contact_no' =>'required|digits:10',
        // 'residence_fax_no' =>'digits:10',
        // 'permanent_street' =>'required|regex:/^[a-zA-Z .]*$/',
        // 'permanent_city' =>'required|regex:/^[a-zA-Z .]*$/',
        // 'permanent_state' =>'required|regex:/^[a-zA-Z .]*$/',
        // 'permanent_pincode' =>'required|digits:6',
        // 'permanent_contact_no' =>'required|digits:10',
        // 'permanent_fax_no' =>'digits:10',
        // 'image' => 'image',
        // ]);

        $save_data = new users;

        $save_data->first_name = $request->input('first_name');
        $save_data->middle_name = $request->input('middle_name');
        $save_data->last_name = $request->input('last_name');
        $save_data->user_name = $request->input('user_name');
        $save_data->password = $request->input('password');
        $save_data->email = $request->input('email_id');
        $save_data->age = $request->input('age');
        $save_data->dob = $request->input('dob');
        $save_data->gender = $request->input('gender');
        $save_data->marital_status = $request->input('marital_status');
        $save_data->employment = $request->input('employment');
        $save_data->employer = $request->input('employer');
        // Residence Address details.
        $save_data->residence_street = $request->input('residence_street');
        $save_data->residence_city = $request->input('residence_city');
        $save_data->residence_state = $request->input('residence_state');
        $save_data->residence_pincode = $request->input('residence_pincode');
        $save_data->residence_contact_no= $request->input('residence_contact_no');
        $save_data->residence_fax_no = $request->input('residence_fax_no');
        // Permanent Address details.
        $save_data->permanent_street = $request->input('permanent_street');
        $save_data->permanent_city = $request->input('permanent_city');
        $save_data->permanent_state = $request->input('permanent_state');
        $save_data->permanent_pincode = $request->input('permanent_pincode');
        $save_data->permanent_contact_no= $request->input('permanent_contact_no');
        $save_data->permanent_fax_no = $request->input('permanent_fax_no');
        $save_data->comment = $request->input('comment');
        
        if($request->file('image'))
        {
            $image_temp_name = $request->file('image')->getPathname();
            $image_name = $request->file('image')->getClientOriginalName();
            $path = base_path() . '/public/img/';
            $request->file('image')->move($path , $image_name);
            $save_data->image = $image_name;
        }
        else
        {
            $save_data->image = '';
        }
        
        //$save_data->save();
        $msg = ['registered'=> 1];

       return response()->view('activate',$msg);
    }


}
