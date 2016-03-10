@extends('master')

@section('title', 'Edit Profile')

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
{{--*/ 
    $gender = is_selected(
                          old('gender'),
                          'male', 'female',
                          'checked'
                         );

    $marital_status = is_selected(
                                  old('marital_status'),
                                  'married',
                                  'unmarried',
                                  'selected'
                                 );
    $employment = is_selected(
                              old('employment'),
                              'yes',
                              'no',
                              'selected'
                             );
 /*--}}
@else
{{--*/ 
    $gender = is_selected(
                          $gender,
                          'male', 'female',
                          'checked'
                         );

    $marital_status = is_selected(
                                  $marital_status,
                                  'married',
                                  'unmarried',
                                  'selected'
                                 );
    $employment = is_selected(
                              $employment,
                              'yes',
                              'no',
                              'selected'
                             );
 /*--}}
@endif

<div class="well registration">
    <div class="row">
        <div><h1> Edit Profile </h1></div>
    </div>
    <div class="row">
    <h4>
        @if(session_value('message'))
        <div class="col-sm-3 alert alert-success" role="alert">
                {{ session_value('message') }}
            <span class="glyphicon glyphicon-saved">
            </span>
        </div>
        @endif
        </h4>
    </div>
</div>
<div class="form well">
    <!-- Form going to insert_data page-->
    <form id="edit_profile_form" action="edit_profile"
    enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-sm-4"><b>First name</b><br/>
                <input class="form-control" id="first_name" type="text"
                value="{{ display_value(old('first_name'), $first_name) }}"
                name="first_name" placeholder="First Name">
            </div>
            <div class="col-sm-4"><b>Middle name</b> <br/>
                <input class="form-control" id="middle_name" type="text"
                value="{{ display_value(old('middle_name'), $middle_name) }}"
                name="middle_name" placeholder="Middle Name">
            </div>
            <div class="col-sm-4"><b>Last name </b><br/>
                <input class="form-control" id="last_name" type="text"
                value="{{ display_value(old('last_name'), $last_name) }}"
                name="last_name" placeholder="Last Name">
            </div>
            <div class="col-xs-4"><p id="fname" class="error"></p></div>
            <div class="col-xs-4"><p id="mname" class="error"></p></div>
            <div class="col-xs-4"><p id="lname" class="error"></p></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><b>
            <span class="glyphicon glyphicon-envelope">
            Email id </span></b><br/>
                <input class="form-control" id="email_id" type="text"
                value="{{ display_value(old('email_id'), $email) }}"
                name="email_id" placeholder="abc@gmail.com">
            </div>
            <div class="col-sm-4"><b>Age </b><br/>
                <input class="form-control" id="age" type="text"
                value="{{ display_value(old('age'), $age) }}"
                name="age" placeholder="age" maxlength=3>
            </div>
            <div class="col-sm-4 "><b>
            <span class="glyphicon glyphicon-calendar">
            Date Of Birth</span></b> <br/>
                <input class="form-control" id="dob" type="date"
                value="{{ display_value(old('dob'), $dob) }}" name="dob">
            </div>
            <div class="col-xs-4"><p id="email" class="error"></p></div>
            <div class="col-xs-4"><p id="age_error" class="error"></p></div>
            <div class="col-xsas-4"><p id="dob_error" class="error"></p></div>
        </div>
        <div class="row">
            <div class="col-sm-4 "><b>Gender</b> <br/> 
                <input type="radio" name="gender" value="male"  
                {{ $gender['male'] }}>Male<br>
                <input type="radio" name="gender" value="female" 
                {{ $gender['female'] }}>Female<br>
            </div>
           <div class="col-sm-4"><b>Marital Status</b> <br/>
                <select name="marital_status" class="btn btn-primary">
                    <option value="married"
                    {{ $marital_status['married'] }}>
                    Married</option>
                    <option value="unmarried"
                    {{ $marital_status['unmarried'] }}>
                    Unmarried </option>
                </select>
            </div>
            <div class="col-sm-4"><b>Employed</b> <br/>
                <select id ="employment" name="employment"
                class="btn btn-primary btn-sm">
                    <option value="yes" {{ $employment['yes'] }}>yes</option>
                    <option value="no" {{ $employment['no'] }}>no</option>
                </select>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"><b>Employer</b> <br/>
                <input class="form-control" id="employer" type="text"
                value="{{ display_value(old('employer'), $employer) }}"
                name="employer">
            </div>
            <div class="col-xs-4"></div>
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <p id="employer_error" class="error"></p>
            </div>
        </div>
        <!--Residence Address -->
        <div>
            <div class="row">
                <div class="col-sm-4">
                    <h4><strong><span class="glyphicon glyphicon-home"> 
                    Residence address</span></strong></h4>
                </div>
                <br/><br/><br/>
                <div class="col-sm-4"><b>Street</b> <br/>
                    <input class="form-control" id="residence_street"
                    type="text"
                    value="{{ display_value(
                    old('residence_street'), $residence_street) }}"
                    name="residence_street">
                </div>
                <div class="col-sm-4"><b>City</b> <br/>
                    <input class="form-control" id="residence_city" type="text"
                    value="{{ display_value(
                    old('residence_city'), $residence_city) }}"
                    name="residence_city">
                </div>
                <div class="col-sm-4"><b>State</b> <br/>
                    <input class="form-control" id="residence_state"
                    type="text"
                    value="{{ display_value(
                    old('residence_state'), $residence_state) }}"
                    name="residence_state">
                </div>
                <div class="col-xs-4">
                    <p id="resi_street" class="error"></p>
                </div>
                <div class="col-xs-4">
                    <p id="resi_city" class="error"></p>
                </div>
                <div class="col-xs-4">
                    <p id="resi_state" class="error"></p>
                </div>
            </div>
            <div class="row">   
                <div class="col-sm-4"><b>Pin Code</b><br/>
                    <input class="form-control" id="residence_pincode"
                    type="text" value="{{ display_value(
                    old('residence_pincode'), $residence_pincode) }}"
                    name="residence_pincode" maxlength=6>
                    </div>
                <div class="col-sm-4"><b>Contact No.</b><br/>
                    <input class="form-control" id="residence_contact_no"
                    type="text" value="{{ display_value(
                    old('residence_contact_no'), $residence_contact_no) }}"
                    name="residence_contact_no" maxlength=10>
                </div>
                <div class="col-sm-4"><b>Fax</b> <br/>
                    <input class="form-control" id="residence_fax_no"
                    type="text" value="{{ display_value(
                    old('residence_fax_no'), $residence_fax_no) }}"
                    name="residence_fax_no" maxlength=10>
                </div>
                <div class="col-xs-4">
                    <p id="resi_pincode" class="error"></p>
                </div>
                <div class="col-xs-4">
                    <p id="resi_contact" class="error"></p>
                </div>
                <div class="col-xs-4">
                    <p id="resi_fax" class="error"></p>
                </div>
            </div>
        </div>      
        <!-- Permanent Address-->
        <div>               
            <div class="row">           
                <div class="col-sm-4"><h4><strong>Permanent address</strong>
                <span><input type="checkbox" id ="copy_residence"></span></h4>
                </div>
                <br/><br/><br/>
                <div class="col-sm-4"><b>Street</b> <br/>
                    <input class="form-control" id="permanent_street" 
                    type="text" value="{{ display_value(
                    old('permanent_street'), $permanent_street) }}"
                    name="permanent_street">
                </div>
                <div class="col-sm-4"><b>City</b> <br/>
                    <input class="form-control" id="permanent_city" 
                    type="text" value="{{ display_value(
                    old('permanent_city'), $permanent_city) }}"
                    name="permanent_city">
                </div>
                <div class="col-sm-4"><b>State</b> <br/>
                    <input class="form-control" id="permanent_state" 
                    type="text" value="{{ display_value(
                    old('permanent_state'), $permanent_state) }}"
                    name="permanent_state">
                </div>
                <div class="col-xs-4">
                    <p id="perm_street" class="error"></p>
                </div>
                <div class="col-xs-4">
                    <p id="perm_city" class="error"></p>
                </div>
                <div class="col-xs-4">
                    <p id="perm_state" class="error"></p>
                </div>
            </div>
            <div class="row">   
                <div class="col-sm-4"><b>Pin Code</b> <br/>
                    <input class="form-control" id="permanent_pincode"
                    type="text" value="{{ display_value(
                    old('permanent_pincode'), $permanent_pincode) }}"
                    name="permanent_pincode"  maxlength=6>
                    </div>
                <div class="col-sm-4"><b>Contact No.</b> <br/>
                    <input class="form-control" id="permanent_contact_no"
                    type="text" value="{{ display_value(
                    old('permanent_contact_no'), $permanent_contact_no) }}"
                    name="permanent_contact_no" maxlength=10>
                    </div>
                <div class="col-sm-4"><b>Fax</b> <br/>
                    <input class="form-control" id="permanent_fax_no"
                    type="text" value="{{ display_value(
                    old('permanent_fax_no'), $permanent_fax_no) }}"
                    name="permanent_fax_no" maxlength=10>
                    </div>
                <div class="col-xs-4">
                    <p id="perm_pincode" class="error"></p>
                </div>
                <div class="col-xs-4">
                    <p id="perm_contact" class="error"></p>
                </div>
                <div class="col-xs-4">
                    <p id="perm_fax" class="error"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4"><b>Write something(140 words)</b><br/>
                <textarea class="form-control" name="comment"
                placeholder="Comment here in 140 words" rows="4"
                cols="30">{{ display_value(
                old('comment'), $comment) }}</textarea>
            </div>
            <div class="col-sm-4">
                <input class="btn btn-primary" id="edit"  type="submit" 
                value="Update Profile" name="submit">
            </div>
            <div class="col-sm-4">
                <input id="image_input" type="file" value="image" name="image"
                accept="image/x-png, image/gif, image/jpeg">
                <img id="image" src="img/{{ $image }}" alt="image preview here"
                height="150" width="150" />
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </div>
        </div>
    </form>
</div>
@stop

@section('script')
<script type="text/javascript" src="js/edit_profile_validation.js?version=126">
</script>
@stop