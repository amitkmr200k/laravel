@extends('master')

@section('title', 'Assignment')

@section('body')

<div class="well registration">
<center>
<h1>This is Assignment page </h1>
</center>
</div>
<div class="well registration">

<center><h2>under construction</h2></center>
</div>
<div class="well action">
@foreach($action_allowed as $value)
<a href="#">{{$value}}</a>&nbsp;&nbsp;
@endforeach
</div>
@stop
