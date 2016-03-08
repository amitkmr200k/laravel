@extends('master')

@section('title', 'Registration')

@section('body')

@if (count($errors) > 0)
<div class="well registration">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
{{--*/ $gender = is_selected(old('gender'), 'male', 'female', 'checked') /*--}}
{{--*/ $marital_status = is_selected(old('marital_status'), 'married', 'unmarried', 'selected') /*--}}
{{--*/ $employment = is_selected(old('employment'), 'yes', 'no', 'selected') /*--}}
@else
{{--*/ $gender['male'] = 'checked' /*--}}
{{--*/ $gender['female'] = '' /*--}}

{{--*/ $marital_status['married'] = '' /*--}}
{{--*/ $marital_status['unmarried'] = 'selected' /*--}}

{{--*/ $employment['no'] = 'selected' /*--}}
{{--*/ $employment['yes'] = '' /*--}}
@endif

<div class="well registration">
    <h1> Registration Form </h1>
</div>

<div class="form well">
    <!-- Form going to insert_data page-->
    <form id="registration_form" action="registration" enctype="multipart/form-data" method="POST" >
        <div class="row">
            <div class="col-sm-4"><b>First name</b> <br/>
                <input class="form-control" id="first_name" type="text" value="{{ old('first_name') }}" name="first_name" placeholder="First Name"> 
            </div>
            <div class="col-sm-4"><b>Middle name</b> <br/>
                <input class="form-control" id="middle_name" type="text" value="{{ old('middle_name') }}" name="middle_name" placeholder="Middle Name"> 
            </div>
            <div class="col-sm-4"><b>Last name </b><br/>
                <input class="form-control" id="last_name" type="text" value="{{ old('last_name') }}" name="last_name" placeholder="Last Name"> 
            </div>
            <div class="col-xs-4"><p id="mname" class="error"></p></div>
            <div class="col-xs-4"><p id="lname" class="error"></p></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><b>User name </b><br/>
                <input class="form-control" id="user_name" type="text" value="{{ old('user_name') }}" name="user_name" placeholder="User Name">
            </div>
            <div class="col-sm-4"><b>Password</b> <br/>
                <input class="form-control" id="password" type="password" value="" name="password" placeholder="password">
            </div>
            <div class="col-sm-4"><b>Confirm Password </b><br/>
                <input class="form-control" id="retype_password" type="password" value="" name="password_confirmation" placeholder="password">
            </div>
            <div class="col-xs-4"><p id="uname" class="error"></div>
            <div class="col-xs-4"><p id="pass" class="error"></p></div>
            <div class="col-xs-4"><p id="retype_pass" class="error"></p></div>  
        </div>
        <div class="row">
            <div class="col-sm-4"><b>email id </b><br/>
                <input class="form-control" id="email_id" type="text" value="{{ old('email') }}" name="email_id" placeholder="abc@gmail.com">
            </div>
            <div class="col-sm-4"><b>Age </b><br/>
                <input class="form-control" id="age" type="text" value="{{ old('age') }}" name="age" placeholder="age" maxlength=3>  </div>
                <div class="col-sm-4 "><b>Date Of Birth</b> <br/>
                    <input class="form-control" id="dob" type="date" value="" name="dob"></div>
                    <div class="col-xs-4"><p id="email" class="error"></p></div>
                    <div class="col-xs-4"><p id="age_error" class="error"></p></div>
                    <div class="col-xsas-4"><p id="dob_error" class="error"></p></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 "><b>Gender</b> <br/> 
                        <input type="radio" name="gender" value="male"  {{ $gender['male'] }}> Male<br>
                        <input type="radio" name="gender" value="female" {{ $gender['female'] }}> Female<br>
                    </div>
                    <div class="col-sm-4"><b>Marital Status</b> <br/>
                        <select name="marital_status" class="btn btn-primary">
                            <option value="married" {{ $marital_status['married'] }}>Married</option>
                            <option value="unmarried" {{ $marital_status['unmarried'] }}>Unmarried </option>
                        </select>
                    </div>
                    <div class="col-sm-4"><b>Employed</b> <br/>
                        <select id ="employment" name="employment" class="btn btn-primary btn-sm">
                            <option value="yes" {{ $employment['yes'] }}>yes</option>
                            <option value="no" {{ $employment['no'] }}>no</option>
                        </select>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"><b>Employer</b> <br/>
                        <input class="form-control" id="employer" type="text" value="{{ old('employer') }}" name="employer"></div>
                        <div class="col-xs-4"></div>
                        <div class="col-xs-4"></div>
                        <div class="col-xs-4"><p id="employer_error" class="error"></p></div>
                    </div>
                    <!--Residence Address -->

                    <div>
                        <div class="row">
                            <div class="col-sm-4"><h4><strong>Residence address</strong></h4></div>
                            <br/><br/><br/>
                            <div class="col-sm-4"><b>Street</b> <br/>
                                <input class="form-control" id="residence_street" type="text" value="{{ old('residence_street') }}" name="residence_street"></div>
                                <div class="col-sm-4"><b>City</b> <br/>
                                    <input class="form-control" id="residence_city" type="text" value="{{ old('residence_city') }}" name="residence_city"></div>
                                    <div class="col-sm-4"><b>State</b> <br/>
                                        <input class="form-control" id="residence_state" type="text" value="{{ old('residence_state') }}" name="residence_state"></div>
                                        <div class="col-xs-4"><p id="resi_street" class="error"></p></div>
                                        <div class="col-xs-4"><p id="resi_city" class="error"></p></div>
                                        <div class="col-xs-4"><p id="resi_state" class="error"></p></div>
                                    </div>
                                    <div class="row">   
                                        <div class="col-sm-4"><b>Pin Code</b> <br/>
                                            <input class="form-control" id="residence_pincode" type="text" value="{{ old('residence_pincode') }}" name="residence_pincode" maxlength=6></div>
                                            <div class="col-sm-4"><b>Contact No.</b> <br/>
                                                <input class="form-control" id="residence_contact_no" type="text" value="{{ old('residence_contact_no') }}" name="residence_contact_no" maxlength=10></div>
                                                <div class="col-sm-4"><b>Fax</b> <br/>
                                                    <input class="form-control" id="residence_fax_no" type="text" value="{{ old('residence_fax_no') }}" name="residence_fax_no" maxlength=10></div>
                                                    <div class="col-xs-4"><p id="resi_pincode" class="error"></p></div>
                                                    <div class="col-xs-4"><p id="resi_contact" class="error"></p></div>
                                                    <div class="col-xs-4"><p id="resi_fax" class="error"></p></div>
                                                </div>
                                            </div>      
                                            <!-- Permanent Address-->
                                            <div>               
                                                <div class="row">           
                                                    <div class="col-sm-4"><h4><strong>Permanent address</strong>
                                                        <span><input type="checkbox" id ="copy_residence"></span></h4>
                                                    </div>
                                                    <div class="col-sm-4">
                    <!-- <button class="btn btn-primary" id ="copy_residence" type="button">Same As Residence
                </button> -->

            </div>
            <br/><br/><br/>
            <div class="col-sm-4"><b>Street</b> <br/>
                <input class="form-control" id="permanent_street" type="text" value="{{ old('permanent_street') }}" name="permanent_street"></div>
                <div class="col-sm-4"><b>City</b> <br/>
                    <input class="form-control" id="permanent_city" type="text" value="{{ old('permanent_city') }}" name="permanent_city"></div>
                    <div class="col-sm-4"><b>State</b> <br/>
                        <input class="form-control" id="permanent_state" type="text" value="{{ old('permanent_state') }}" name="permanent_state"></div>
                        <div class="col-xs-4"><p id="perm_street" class="error"></p></div>
                        <div class="col-xs-4"><p id="perm_city" class="error"></p></div>
                        <div class="col-xs-4"><p id="perm_state" class="error"></p></div>
                    </div>
                    <div class="row">   
                        <div class="col-sm-4"><b>Pin Code</b> <br/>
                            <input class="form-control" id="permanent_pincode" type="text" value="{{ old('permanent_pincode') }}" name="permanent_pincode"  maxlength=6></div>
                            <div class="col-sm-4"><b>Contact No.</b> <br/>
                                <input class="form-control" id="permanent_contact_no" type="text" value="{{ old('permanent_contact_no') }}" name="permanent_contact_no" maxlength=10></div>
                                <div class="col-sm-4"><b>Fax</b> <br/>
                                    <input class="form-control" id="permanent_fax_no" type="text" value="{{ old('permanent_fax_no') }}" name="permanent_fax_no" maxlength=10></div>
                                    <div class="col-xs-4"><p id="perm_pincode" class="error"></p></div>
                                    <div class="col-xs-4"><p id="perm_contact" class="error"></p></div>
                                    <div class="col-xs-4"><p id="perm_fax" class="error"></p></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4"><b>Write something(140 words)</b><br/>
                                    <textarea class="form-control" name="comment" placeholder="Comment here in 140 words" rows="4" cols="30">{{ old('comment') }}</textarea></div>
                                    <div class="col-sm-4">
                                        <input class="btn btn-primary" id="submit"  type="submit" value="Register" name="submit"></div>
                                        <div class="col-sm-4">
                                            <input id="image_input" type="file" value="image" name="image"  accept="image/x-png, image/gif, image/jpeg">
                                            {{ old('image') }}
                                            <img id="image" src="img/dp.png" alt="image preview here" height="150" width="150" />
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                        </div>
                                    </div>
                                </form> 
                            </div>

                            @stop
                            @section('script')
<!-- <script type="text/javascript" src="js/registration_validation_jquery.js"></script>
-->@stop