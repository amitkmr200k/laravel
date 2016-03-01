<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\View\Middleware\ShareErrorsFromSession ;
use App\Model\users;
use Auth;
class EditProfileController extends Controller
{
    public function view_edit_profile()
    {
        
    	$user = Auth::user();
        return response()->view('edit_profile', $user);
    }
    
    public function save_edit_profile(Request $request)
    {
    	 $this->validate($request, [
        'first_name' => 'required|alpha',
        'middle_name' => 'regex:/^[a-zA-Z. ]*$/',
        'last_name' => 'regex:/^[a-zA-Z. ]*$/',
        'email_id' => 'required|email',
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
        
        $save_data = Users::find(Auth::user()->id);

        $save_data->first_name = $request->input('first_name');
        $save_data->middle_name = $request->input('middle_name');
        $save_data->last_name = $request->input('last_name');
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
        
        
       $save_data->save();
       
        $msg = ['updated'=> 1];

      // return response()->view('home',$msg);
        //return redirect('edit_profile');
        return redirect('edit_profile')->with('message', 'Profile Updated !!!');

    }
}
