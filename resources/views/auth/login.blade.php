@extends('master')

@section('body')

</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0"
                class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/samp1.jpg" width="100%" alt="samp1">
                    </div>
                    <div class="item">
                        <img src="img/samp1.jpg" width="100%" alt="samp2">
                    </div>

                    <div class="item">
                        <img src="img/samp1.jpg" width="100%" alt="samp3">
                    </div>

                    <div class="item">
                        <img src="img/samp2.jpg" width="100%" alt="samp4">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel"
                role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"
                    aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel"
                role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"
                    aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
        <br/>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        @if(session_value(
                        'message') == 'invalid' || session_value('message') 
                        == 'not activated')
                        <div class="alert alert-danger" type="hidden">
                            <span class="glyphicon glyphicon-exclamation-sign">
                            {{session_value('message')}}</span>
                        </div>
                        @elseif(session_value('message') == 'activated')
                        <div class="alert alert-success
                        glyphicon glyphicon-exclamation-sign" type="hidden">
                        Congratulations, your account is activated.
                       </div>       
                       @endif
                       <form class="form-horizontal" role="form" method="POST"
                       action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group
                        {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">
                            E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control"
                                name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}
                                    </strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group
                        {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password
                            </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control"
                                name="password">

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}
                                    </strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>
                                <a class="btn btn-link"
                                href="{{ url('/password/reset') }}">
                                Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
