@extends('master')

@section('title', 'test')

@section('body')

<div class="well registration">

@foreach($action_allowed as $value)
<a href="#">{{$value}}</a>&nbsp;&nbsp;
@endforeach
</div>

@stop
