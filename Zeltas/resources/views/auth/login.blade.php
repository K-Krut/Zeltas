@extends('layouts.layout')

@section('title-block')Login
@endsection

@section('content')
    <div class="body-class">
        <div class="login-wrap">
            <div class="login-html">
                <label class="tab">Sign In</label>
                <a href="{{route('register')}}"><label class="tab">Register</label></a>
                <form method="post" action="{{route('login_process')}}" class="login-form">
                    @csrf
                    <div class="sign-in-htm">
                        <div class="group">
                            <label class="label">Email</label>
                            <input style="opacity: .2; @error('username') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                   id="email" name="email" type="text" class="input">
                        </div>
                        <div class="group">
                            <label class="label">Password</label>
                            <input style="opacity: .2; @error('password') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                   id="password" type="password" name="password" class="input" data-type="password">
                        </div>
                        <div>
                            <a href="{{route('forgot')}}" style="color: #c1b2a0; font-size: 12px; text-align: right;">
                                <p>Forgot password?</p>
                            </a>
                        </div>
                        <div class="group" style="margin-top: 30px">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
