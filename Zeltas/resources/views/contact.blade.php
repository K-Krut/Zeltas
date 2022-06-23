@extends('layouts.layout')

@section('titale-block')
    Contact
@endsection

@section('content')
    <div class="body-class">
        <div class="login-wrap">
            <div class="login-html">
                <label class="tab">Contact Us</label>
                <form method="post" action="{{route('contact_form_process')}}" class="login-form">
                    @csrf
                    <div class="sign-in-htm">
                        <div class="group">
                            <label class="label">Email</label>
                            <input
                                style="opacity: .2; @error('email') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                id="email" name="email" value="{{ auth()->user()->email }}" type="text" class="input">
                        </div>
                        <div class="group">
                            <label class="label">Message</label>
                            <textarea
                                style="opacity: .2; @error('text') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                id="text" type="text" name="text" class="input"></textarea>
                        </div>
                        <div class="group" style="margin-top: 30px">
                            <input type="submit" class="button" value="Send">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
