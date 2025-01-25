@extends('usermanagement::layouts.master')

@section('content')
<div class="login-form">
    <form  action="{{ url('/show')}}" method="POST">
    @csrf
    <div class="info-container">
        <h3 class="text-center font-weight-bold">Welcome!</h3>
     
        <h6 class="text-center"><span class="space-1">&#8213;&#8213;</span>
            <span class="space-2">&#8213;&#8213;&#8213;</span> &nbsp;&nbsp; 
            <span class="hr-text">Sign in with your Email</span> &nbsp;&nbsp; 
            <span class="space-1">&#8213;&#8213;</span><span class="space-2">&#8213;&#8213;&#8213;</span>
        </h6>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Insert your Email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Insert your password">
        </div>

        <div class="form-group split-group">
            <span><input type="checkbox" name="remember_me" class="form-input"> Keep me logged in</span> <span><a href="reset_password" class="change-text-color">Forgot password?</a></span>
        </div>

        <div class="form-group">
            <input type="submit" name="Submit" class="btn btn-block btn-login" value="Log In">
        </div>
        
        <div class="form-group">
            Dont have an account? <a href="signup" class="change-text-color">Register</a>
        </div>
    </div>
</form>
</div>

    <p>Module: {!! config('usermanagement.name') !!}</p>
@endsection
