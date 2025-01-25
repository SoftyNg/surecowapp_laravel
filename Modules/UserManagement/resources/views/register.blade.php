@extends('usermanagement::layouts.master')

@section('content')

<div class="login-form">
    <div class="info-container">
        <h3 class="text-center font-weight-bold">Sign up!</h3>
      

        <h6 class="text-center"><span class="space-1">&#8213;&#8213;</span>
            <span class="space-2">&#8213;&#8213;&#8213;</span> &nbsp;&nbsp; <span class="hr-text">
                Sign up here
            </span> &nbsp;&nbsp; <span class="space-1">&#8213;&#8213;</span>
            <span class="space-2">&#8213;&#8213;&#8213;</span>
        </h6>
    
    
    <form action="{{ url('users/create')}}" method="POST">
       @csrf
        <div class="form-group">
            <label for="email">First name</label>
            @error('first_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="first_name" class="form-control" 
            value="{{old('first_name')}}" placeholder="Enter your first name here">
        </div>

        <div class="form-group">
            @error('last_name')
            <div class="text-danger">{{ $message }}</div>
          @enderror
            <label for="email">Last name</label>
            <input type="text" name="last_name" class="form-control" 
            value="{{ old('last_name')}}" placeholder="Enter last name here">
        </div>

        <div class="form-group">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" 
            value="{{ old('email')}}" placeholder="Enter your Email">
        </div>

        <div class="form-group">
            @error('password')
            <div class="text-danger">{{ $message }}</div>
           @enderror
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Insert your password">
        </div>

        <div class="form-group split-group">
            <span><input type="checkbox" name="remember_me" 
                class="form-input"> Keep me logged in</span> 
                <span><a href="reset_password" class="change-text-color">Forgot password?</a></span>
        </div>

        <div class="form-group">
            <input type="submit" name="Submit" class="btn btn-block btn-login" value="Create account">
        </div>

        <div class="form-group">
            Dont have an account? <a href="signup" class="change-text-color">Register</a>
        </div>
    </div>
</form>
</div>

    <p>Module: {!! config('usermanagement.name') !!}</p>
@endsection
