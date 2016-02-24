@extends('master')

@section('title', 'Activate Account')

@section('body')

@if (1 === $registered)
    <div class="well registration">
    <p> Congratulations!!! you are now registered</p>
    <p> Activation link has been sent to you, please check your email</p>
    </div>
@endif

@stop