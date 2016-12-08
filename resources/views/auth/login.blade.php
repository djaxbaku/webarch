@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
        <h2>
            Sign in to webarch
        </h2>
        <p>Use Facebook, Twitter or your email to sign in.
        Sign up Now! for a webarch account,It's free and always will be..
        </p>
        <button style="background-color:#1B3148;  border:none;" class="btn btn-block btn-info col-md-8">
            Login with Facebook
        </button>
        <button style="background-color: #0090D9; border: none;" class="btn btn-block btn-success col-md-8">
            Login with Twitter
        </button>
        </div>
            <div class="col-md-5">
                
                    <form class="login-form validate" id="login-form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-10">
                            <label for="email" class="col-md-4 control-label">Username</label><br>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-10">
                            <label for="password" class="col-md-10 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Trouble login in?</a>
                                
                                    <label class="checkbox1">
                                        <input type="checkbox" name="remember"> Keep me reminded
                                    </label>
                                
                                
                            </div>
                        </div>

                        <div class="form-group col-md-10">
                            <div class="col-md-10 pull-right">
                                <button style="background-color: #0AA699; border:none;" type="submit" class="btn btn-primary btn-cons pull-right">
                                     Login
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
</div>
@endsection
