@extends('layouts.layout')

@section('title-block')
    Admin Login
@endsection

@section('content')
    <div class="body-class">
        <div class="login-wrap">
            <div class="login-html">
                <label class="tab">Admin Sign In</label>
                <form method="post" action="{{route('admin.login_process')}}" class="login-form">
                    @csrf
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Email</label>
                            <input
                                style="opacity: .2; @error('username') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                id="email" name="email" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input
                                style="opacity: .2; @error('password') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                id="password" type="password" name="password" class="input" data-type="password">
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
