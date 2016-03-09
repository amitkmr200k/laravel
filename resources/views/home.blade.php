@extends('master')

@section('title', 'View Profile')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{ $first_name }}'s Profile</b></div>
                <div class="panel-body">
            <div class="table-responsive">
            <table class="well table table-bordered">
                    <tbody>
                    <tr> 
                        <td class="info" width="50">
                        <img width="150" height="150" align="left" src="img/{{ $image }}">
                        </td>
                        <td class="info">
                        <table class="well table table-bordered">
                         <tbody>
                        <tr>
                        <td class="info">Name</td>
                        <td class="info">{{ $first_name }} {{ $middle_name }} {{ $last_name }}</td>
                         </tr>
                           <tr>
                            <td class="info">User Name</td>
                            <td class="info"> {{ $user_name }}</td>
                        </tr>
                        <tr>
                            <td class="info">Email ID</td>
                            <td class="info"> {{ $email }}</td>
                        </tr>
                        </tbody>
                         </table>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                <!-- Details of the user -->            
                <table class="well table table-bordered">
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
                                Street - {{ $residence_street }} <br/>
                                City - {{ $residence_city }} <br/>
                                State - {{ $residence_state }} <br/>
                                Pin Code - {{ $residence_pincode }} <br/>
                                Contact No. - {{ $residence_contact_no }}<br/>
                                Fax No.- {{ $residence_fax_no }}
                            </td>
                        </tr>
                        <td class="info">Permanent Address</td>
                        <td> 
                           Street - {{ $permanent_street }} <br/>
                            City - {{ $permanent_city }} <br/>
                            State - {{ $permanent_state }} <br/>
                            Pin Code - {{ $permanent_pincode }} <br/>
                            Contact No. - {{ $permanent_contact_no }}<br/>
                            Fax No.- {{ $permanent_fax_no }}
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
 
 
</div>





@stop
