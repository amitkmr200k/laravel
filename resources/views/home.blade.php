@extends('master')

@section('title', 'View Profile')

@section('body')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>{{ $first_name }}'s Profile</b>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="well table table-bordered">
                        <tbody>
                            <tr> 
                                <td class="info" width="50">
                                    <img width="150" height="150" align="left"
                                    src="img/{{ $image }}">
                                </td>
                                <td class="info">
                                    <table class="well table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="info">Name</td>
                                                <td class="info">
                                                    {{ $first_name }}
                                                    {{ $middle_name }}
                                                    {{ $last_name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="info">User Name</td>
                                                <td class="info">
                                                    {{ $user_name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="info">Email ID</td>
                                                <td class="info">
                                                    {{ $email }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <button class="btn btn-primary" id="show_info">
                        See Other Details
                        </button>
                        <button class="btn btn-primary" id="hide_info">
                        Hide Other Details
                        </button>
                    </div>
                    <br/>
                    <!-- Other Details of the user -->
                    <table id ="hide" class="well table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan="2">Other Details</th>
                            </tr>

                            <tr>
                                <td class="info">Gender</td>
                                <td> {{ $gender }}</td>
                            </tr>
                            <tr>
                                <td class="info">Age</td>
                                <td> {{ $age }}</td>
                            </tr>
                            <tr>
                                <td class="info">Date Of Birth</td>
                                <td> {{ $dob }}</td>
                            </tr>
                            <tr>
                                <td class="info">Marital Status</td>
                                <td> {{ $marital_status }}</td>
                            </tr>
                            <tr>
                                <td class="info">Employment</td>
                                <td> {{ $employment }}</td>
                            </tr>
                            <tr>
                                <td class="info">Employer</td>
                                <td> {{ $employer }}</td>
                            </tr>
                            <tr>
                                <td class="info">Residence Address</td>
                                <td> 
                                    <b>Street - </b>{{ $residence_street }}
                                    <br/>
                                    <b>City - </b>{{ $residence_city }}
                                    <br/>
                                    <b>State - </b>{{ $residence_state }}
                                    <br/>
                                    <b>Pin Code - </b>
                                    {{ $residence_pincode }}
                                    <br/>
                                    <b>Contact No. - </b>
                                    {{ $residence_contact_no }}
                                    <br/>
                                    <b>Fax No.- </b>{{ $residence_fax_no }}
                                </td>
                            </tr>
                            <tr>
                                <td class="info">Permanent Address</td>
                                <td> 
                                    <b>Street - </b>{{ $permanent_street }}
                                    <br/>
                                    <b>City - </b>{{ $permanent_city }}
                                    <br/>
                                    <b>State - </b>{{ $permanent_state }}
                                    <br/>
                                    <b>Pin Code - </b>
                                    {{ $permanent_pincode }}
                                    <br/>
                                    <b>Contact No. - </b>
                                    {{ $permanent_contact_no }}
                                    <br/>
                                    <b>Fax No.- </b>{{ $permanent_fax_no }}
                                </td>
                            </tr>
                            <tr>
                                <td class="info">Extra Note</td>
                                <td> {{ $comment }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>      
            </div>
        </div>
    </div>
</div>

@stop

@section('script')

<script type="text/javascript" src="js/home_page.js">
</script>

@stop