@extends('master')

@section('title', 'Assign Privilege')

@section('body')

<div class="well registration">
<h1>Assign Privileges</h1>
</div>
<div class="well registration">
<form class="form_admin_privilege">
    <label class="privilege_display">Role&nbsp;&nbsp;</label>
 <select id="role" name="role">
            <option selected="true" value="Select Role" disabled>Select role</option>
            @foreach ($roles_table as $role)
            {{--*/ $id = $role->id /*--}}
            {{--*/ $role_name = $role->role /*--}}
            <option class="privilege_display" id="role{{$id}}" name="{{$role_name}}"
            value="{{$role_name}}">{{$role_name}}</option>
            @endforeach
        </select>
        <label id="display_message"></label>
    <table class="table-responsive">
        @foreach ($resources_table as $value)
            {{--*/ $val = $value['resource'] /*--}}
            {{--*/ $id  = $value['id'] /*--}}
            <tr><td class="privilege_display">
            <label id="resource{{ $id }}" name="{{ $val }}">{{ $val }}</label>&nbsp;</td>
        
        @foreach ($actions_table as $value_action)
            {{--*/$val_action = $value_action['operation'] /*--}}
            {{--*/$id_action  = $value_action['id'] /*--}}
            <td class="privilege_display">
            <input id="resource{{ $id }}action{{$id_action}}" type="checkbox" name="{{ $val_action }}" value="{{ $val_action }}">&nbsp;{{ $val_action }}&nbsp;</td>
        @endforeach
        <br/> </tr>
        @endforeach
        </tr>
        <div id="reload">
        <input id="privilege_data_hidden" type="hidden" value="{{ $manage_privileges_table }}">
    </div>
    </table>
    <br/><input id="set_privilege" class="btn btn-primary" type="button" value="Update">
    <label id="assigned"></label>
</form>
</div>
@stop
@section('script')
<script src="js/admin_privilege.js?version=132"></script>
@stop