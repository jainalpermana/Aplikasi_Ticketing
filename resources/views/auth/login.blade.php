{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/iconmaterial.css')}}">

    <script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
    <script src="{{asset('js/materialize.js')}}"></script>
</head>
<body>
    <a href="index.html"><i class="material-icons" style="color: #FFF">close</i></a>
    <div class="container" style="margin-top:50px;">
      <div class="row">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="card-panel" style="background-color: white !important; padding: 10px !important; overflow: hidden !important ;">
                        <form class="login-form" action="log.php?op=in" method="POST">
                            <div class="row">
                                <div class="input-field col s12 center">
                                    <img src="{{asset('img/logo.jpg')}}" alt="" class="circle responsive-img valign profile-image-login">
                                </div>
                            </div>
                            <div class="row ">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">person_pin</i>
                                    <input id="username" type="text" name="userid">
                                    <label for="username" class="">Username</label>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="password" type="password" name="psw">
                                    <label for="password" class="">Password</label>
                                </div>
                            </div>
                            <div class="row">          
                                <div class="input-field col s12 m12 l12  login-text">
                                    <input type="checkbox" id="remember-me">
                                    <label for="remember-me">Remember me</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light col s12">Login</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
                                </div>
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
                                </div>          
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection