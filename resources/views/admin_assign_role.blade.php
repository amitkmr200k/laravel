@extends('master')

@section('title', 'Assign Role')

@section('body')

<div class="well admin_assign_role">
    <h2>assign roles</h2>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <label id="display_message"></label>
    </div>
</div>
<div class="well admin_assign_role">
    <label>Select User</label>
    <select id="user" name="user" class="form-control">
        <option selected="true" value="Select User" disabled>
        Select User</option>
        @foreach ($user_name as $value)
        {{--*/ $id = $value->id /*--}}
        {{--*/ $user = $value->user_name /*--}}
        <option class="privilege_display" id="user_name_{{$id}}"
        name="{{$user}}" value="{{$user}}">{{$user}}</option>
        @endforeach
    </select>
</div>
<div id='user_info'>
<div class="well admin_assign_role">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 admin_assign_role_user_info">
            <label>Name </label>
            <input class="form-control" type="text" id="name_assign_role_page" disabled>
            <br/>
            <label>Email ID </label>
            <input class="form-control" type="text" id="email_assign_role_page" disabled>
            <br/>
            <label>Role </label>
             <select class="form-control" id="role" name="role">
                <option selected="true" value="Select Role" disabled>
                Select role</option>

                @foreach ($role_name as $value)
                    {{--*/ $id = $value->id /*--}}
                    {{--*/ $role = $value->role /*--}}
                    <option class="privilege_display" id="role_{{$id}}"
                    name="{{$role}}" value="{{$role}}">{{$role}}</option>
                @endforeach
            </select>
             <br/>
        <input class="form-control btn btn-primary" id="assign_role" type="button" value="Assign">
        </div>
    </div>
</div>
</div>
<div id ="reload_hidden_user_info">
    <input type="hidden" id="hidden_user_info"
    value="{{$all}}">
</div>
@stop

@section('script')
<script type="text/javascript" src="js/admin_assign_role.js?version=132">
</script>
@stop