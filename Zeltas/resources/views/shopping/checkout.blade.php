@extends('layouts.layout')

@section('title-block')
    Shopping Cart
@endsection

@section('content')
    <div class="body-class">
        <section class="Product-Gallery">
            <div class="collection-title">
                <h1 class="title-page">Checkout</h1>
            </div>
        </section>
        <div class="product-gallery-box">
            <div class="container-fluid">
                <div class="row">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                </div>
                <div class="login-html">
                    <div class="sign-in-htm">
                        <form action="{{ route('checkout.place.order') }}" method="POST" role="form" class="login-form">
                            @csrf
                            <div class="main-form-area w-50">
                                <header class="card-header">
                                    <h1 style="color: #A08A7E;; font-size: 50px">Billing Details</h1>
                                </header>
                                <div class="group">
                                    <label class="label">First name</label>
                                    <input
                                        style="opacity: .2; @error('first_name') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        type="text" class="form-control" id="first_name" name="first_name">
                                </div>
                                <div class="group">
                                    <label class="label">Last name</label>
                                    <input
                                        style="opacity: .2; @error('last_name') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        type="text" class="form-control" id="last_name" name="last_name">
                                </div>
                                <div class="group">
                                    <label class="label">Address</label>
                                    <input
                                        style="opacity: .2; @error('address') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="group">
                                    <label class="label">City</label>
                                    <input
                                        style="opacity: .2; @error('city') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        type="text" class="form-control" id="city" name="city">
                                </div>
                                <div class="group">
                                    <label class="label">Country</label>
                                    <input
                                        style="opacity: .2; @error('country') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        type="text" class="form-control" id="country" name="country">
                                </div>
                                <div class="group">
                                    <label class="label">Post Code</label>
                                    <input
                                        style="opacity: .2; @error('post_code') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        type="text" class="form-control" id="post_code" name="post_code">
                                </div>
                                <div class="group">
                                    <label class="label">Phone Number</label>
                                    <input
                                        style="opacity: .2; @error('phone_number') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        type="text" class="form-control" id="phone_number" name="phone_number">
                                </div>
                                <div class="group">
                                    <label class="label">Email Address</label>
                                    <input
                                        style="opacity: .2; @error('email') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        type="email" class="form-control" id="email" name="email"
                                        value="{{ auth()->user()->email }}" disabled>
                                </div>
                                <div class="group">
                                    <label class="label">Order Notes</label>
                                    <textarea
                                        style="opacity: .2; @error('notes') border:darkred; background-color:darkred; color: #c1b2a0; @enderror"
                                        class="form-control" id="notes" name="notes" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="navigation-collections" style="margin: 30px auto">
                                <div class="text-section">
                                    <h2 class="clear-cart"
                                        style="font-family: Giovanna, sans-serif; color: #A08A7E; font-size: 50px">
                                        Clear Cart</h2>
                                    <div class="text-block" style="margin: 35px 20% 35px 20%; text-align: right">
                                        <h1 style="text-align: left; font-size: 25px; color: #A08A7E;">Total
                                            cost: ${{ \Cart::getSubTotal() }} </h1>
                                    </div>
                                    <div class="text-block" style="margin: 35px 20% 35px 20%;">
                                        <button type="submit" style="position: relative; margin-right: 50%;">
                                            Place Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .Product-Gallery {
                padding-top: -25px;
            }

            .product-gallery-box {
                min-height: 1100px;
                position: relative;
            }

            @media (max-width: 1440px) {
                body {
                    width: 1440px;
                }

                .product-gallery-box {
                    max-width: 1440px;
                }
            }

            .login-html {
                width: 90%;
                height: 100%;
                position: absolute;
                min-height: 1000px;
                padding: 90px 70px 50px 70px;
            }

            .login-form .group .label,
            .login-form .group button {
                text-transform: uppercase;
            }

            .login-form {
                min-height: 345px;
                position: relative;
                perspective: 1000px;
                transform-style: preserve-3d;
                display: flex;
            }

            .login-form .group {
                margin-bottom: 15px;
            }

            .login-form .group .label,
            .login-form .group input,
            .login-form .group button {
                width: 100%;
                color: #d7cebf;
                display: block;
            }

            .login-form .group button {
                border: none;
                padding: 15px 20px;
                border-radius: 25px;
                background-color: #634f4b;
                opacity: .4;
            }

            .login-form textarea {
                border: none;
                padding: 15px 20px;
                border-radius: 25px;
                background-color: #634f4b;
                opacity: .4;
                width: 100%;
                color: #d7cebf;
                display: block;
            }

            .login-form .group input {
                border: none;
                padding: 15px 20px;
                border-radius: 25px;
                background-color: #634f4b;
                opacity: .4;
            }

            .login-form .group input[data-type="password"] {
                -webkit-text-security: circle;
            }

            .login-form .group .label {
                color: #c1b2a0;
                z-index: 100;
                font-size: 12px;
            }

            .login-form .group label .icon {
                width: 15px;
                height: 15px;
                border-radius: 2px;
                position: relative;
                display: inline-block;
            }

            .login-form .group label .icon:before,
            .login-form .group label .icon:after {
                content: '';
                width: 10px;
                height: 2px;
                background: #c1b2a0;
                position: absolute;
            }

            .collection-title {
                position: relative;
                align-items: center;
                text-align: center;
                padding-bottom: 0;
            }

            .all-collection-title h1 {
                top: 15%;
                position: relative;
                font-family: GiovannaBold, sans-serif;
                font-style: normal;
                font-weight: 700;
                font-size: 35px;
                color: #A08A7E;
            }

            .navigation-collections {
                height: 100%;
            }

            .w-50 {
                width: 50%;
            }


            button {
                background-color: #A08A7E;
                position: relative;
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                font-size: 16px;
                margin: 4px 2px;
                opacity: 0.6;
                transition: 0.3s;
                border-radius: 999px;
                display: inline-block;
                text-decoration: none;
                cursor: pointer;
                width: 100%;
            }

            .center-el {
                margin-right: auto;
                margin-left: auto;
            }
        </style>
    </div>
@endsection
