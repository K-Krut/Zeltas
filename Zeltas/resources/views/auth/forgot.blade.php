@extends('layouts.layout')

@section('title-block')
    Login
@endsection

@section('content')
    <div class="body-class">
        <div class="login-wrap">
            <div class="login-html">
                <label class="tab">Password Reset</label>
                <form method="post" action="{{route('forgot_process')}}" class="login-form">
                    @csrf
                    <div class="sign-in-htm">
                        <div class="group">
                            <label class="label">Email</label>
                            <input
                                style="opacity: .2; @error('username') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                id="email" name="email" type="text" class="input">
                        </div>
                        <div>
                            <a href="{{route('login')}}" style="color: #c1b2a0; font-size: 12px;">
                                <p>Remembered password</p>
                            </a>
                        </div>
                        <div class="group" style="margin-top: 30px">
                            <input type="submit" class="button" value="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
