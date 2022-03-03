@extends('layouts.auth')

@php
    $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
@endphp

@section('content')
<div class="auth-wrapper">
    <div class="container-fluid h-100">
        <div class="row flex-row h-100 bg-white">
            <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                <div class="lavalite-bg" style="background-image: url('{{asset('assets/img/auth/register-bg.jpg')}}')">
                    <div class="lavalite-overlay"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                <div class="authentication-form mx-auto">
                    <h3>Todo App</h3>
                    <p>Join us today! It takes only few steps</p>
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" required="">
                            <i class="ik ik-user"></i>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required="">
                            <i class="ik ik-user"></i>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select class="form-control select2">
                                <option value="" selected="">Select Time Zone</option>
                                @foreach ($tzlist as $tz)
                                    <option value="{{$tz}}">{{$tz}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required="">
                            <i class="ik ik-lock"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" required="">
                            <i class="ik ik-eye-off"></i>
                        </div>
                        <div class="row">
                            <div class="col-12 text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1" required>
                                    <span class="custom-control-label">&nbsp;I Accept <a href="#">Terms and Conditions</a></span>
                                </label>
                            </div>
                        </div>
                        <div class="sign-btn text-center">
                            <button type="submit" class="btn btn-theme">Create Account</button>
                        </div>
                    </form>
                    <div class="register">
                        <p>Already have an account? <a href="{{url('login')}}">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
