<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
	 public function validate(Request $request)
    {
      
    	$this->validate($request, [
        'first_name' => 'required|alpha',
        'middle_name' => 'regex:/^[a-zA-Z. ]*$/',
        'last_name' => 'regex:/^[a-zA-Z. ]*$/',
        'user_name' => 'required|alpha_dash|unique:users,user_name',
        'password' => 'required|between:6,25|confirmed',
        'password_confirmation' => 'required|between:6,25',
        'email_id' => 'required|email|unique:users,email',
        'age' =>'required',
        'dob' =>'required|before:01/01/2016',
        'employer' =>'required_if:employment,yes|regex:/^[a-zA-Z0-9. ]*$/',
        'residence_street' =>'required|regex:/^[a-zA-Z .]*$/',
        'residence_city' =>'required|regex:/^[a-zA-Z .]*$/',
        'residence_state' =>'required|regex:/^[a-zA-Z .]*$/',
        'residence_pincode' =>'required|digits:6',
        'residence_contact_no' =>'required|digits:10',
        'residence_fax_no' =>'digits:10',
        'permanent_street' =>'required|regex:/^[a-zA-Z .]*$/',
        'permanent_city' =>'required|regex:/^[a-zA-Z .]*$/',
        'permanent_state' =>'required|regex:/^[a-zA-Z .]*$/',
        'permanent_pincode' =>'required|digits:6',
        'permanent_contact_no' =>'required|digits:10',
        'permanent_fax_no' =>'digits:10',
        'image' => 'image',
        ]);
	
	return redirect()->action('RegistrationController@save_registration');
	}
}
