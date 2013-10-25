@extends('layouts.default')

@section('title')
Login
@stop

@section('controls')
<p class="lead">Please enter your details:</p>
@stop

@section('content')
<div class="well">
    {{ Form::open(array('url' => URL::route('account.login.post'), 'method' => 'POST', 'class' => 'form-horizontal')) }}

        <div class="form-group{{ ($errors->has('email')) ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label" for="email">Email</label>
            <div class="col-sm-3">
                <input name="email" id="email" value="{{ Request::old('email') }}" type="text" class="form-control" placeholder="Email">
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>
        </div>
    
       <div class="form-group{{ ($errors->has('password')) ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label" for="password">Password</label>
            <div class="col-sm-3">
                <input name="password" id="password" value="" type="password" class="form-control" placeholder="Password">
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="rememberMe" value="1"> Remember Me</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button class="btn btn-primary" type="submit"><i class="fa fa-rocket"></i> Log In</button>
                <label><a href="{{ URL::route('account.reset') }}" class="btn btn-link">Forgot Password?</a></label>
            </div>
        </div>

  {{ Form::close() }}
</div>
@stop
