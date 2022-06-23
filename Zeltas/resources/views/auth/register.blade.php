@extends('layouts.layout')

@section('titale-block')Registration
@endsection

@section('content')
    {{--    @if ($errors->any())--
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif--}}

    <div class="body-class">
        <div class="login-wrap">
            <div class="login-html">
                <label class="tab">Register</label>
                <a href="{{route('login')}}"><label class="tab">Sign In</label></a>
                <form class="login-form" method="post" action="{{route('register_process')}}">
                    @csrf
                    <div class="sign-up-htm">
                        <div class="group">
                            <label class="label">Username</label>
                            <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .2; z-index: 100; @error('username') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                   type="text" name="username" id="username" value="">
                        </div>
                        <div class="group">
                            <label class="label">Email Address</label>
                            <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .2; z-index: 100; @error('email') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                   type="email" name="email" id="email" value="">
                        </div>
                        <div class="group">
                            <label class="label">Password</label>
                            <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .2; z-index: 100; @error('password') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                   type="password" id="password" name="password">
                        </div>
                        <div class="group">
                            <label class="label">Repeat Password</label>
                            <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .2; z-index: 100; @error('password_confirmation') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                   type="password" id="password_confirmation" name="password_confirmation">
                        </div>
{{--                        <div class="group">
                            <label class="label">Repeat Password</label>
                            <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .2; z-index: 100; @error('password_confirmation') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                   type="password" id="password_confirmation" name="password_confirmation" value='@if(!$errors->first("name")){{old("name")}}@endif' placeholder="{{$errors->has('name') ? $errors->first('name') : 'Name' }}">
                        </div>--}}
                        <div class="group" style="margin-top: 30px">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

