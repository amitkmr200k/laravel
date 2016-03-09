@extends('master')

@section('title', 'test')

@section('body')

<div class="well registration">

<input type ="text" id="input" name="name">

<button id ="test_button">Click Me </button>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<p id="print"></p>
<p id="print_1"></p>
</div>
@stop
