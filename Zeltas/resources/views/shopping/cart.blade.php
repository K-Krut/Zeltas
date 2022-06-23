@extends('layouts.layout')

@section('title-block')
    Shopping Cart
@endsection

@section('content')
    <section class="Product-Gallery">
        <div class="collection-title">
            <h1>Cart</h1>
        </div>
        <div class="product-gallery-box">
            <div class="container-fluid">
                <div class="row">
                    @if (\Cart::isEmpty())
                        <h1 style="color: #A08A7E; font-size: 35px">Your shopping cart is empty.</h1>
                    @else
                        <div class="card">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead class="text-muted">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right" width="200">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach(\Cart::getContent() as $item)
                                    <tr>
                                        @if($item->attributes->image)
                                            <td>
                                                <img style="height: 100px; width: 100px"
                                                     src="{{asset('images/jewelry/'.$item->attributes->image) }}">
                                            </td>
                                        @else
                                            <td>
                                                <img src="{{asset('images/zeltas-wave.png')}}"
                                                     class="img-fluid card-img-top"
                                                     style="height: 100px; width: 100px">
                                            </td>
                                        @endif
                                        <td>
                                            <h2 class="title text-truncate"
                                                style="text-align: left">{{ Str::words($item->name, 20) }}</h2>
                                        </td>
                                        <td>

                                            <var class="price-item">{{ $item->quantity }}</var>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price-item">${{ $item->price }}</var>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('checkout.cart.remove', $item->id) }}"
                                               class="delete-button">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     width="30pt"
                                                     height="30pt"
                                                     viewBox="0 0 190.129 187.248">
                                                    <defs/>
                                                    <path id="shape0" transform="matrix(1.44 0 0 1.44 19.9584 20.4048)"
                                                          fill="none" stroke="#c7ab9b" stroke-width="3"
                                                          stroke-linecap="butt" stroke-linejoin="miter"
                                                          stroke-miterlimit="10" d="M0 103.66L103.66 0"/>
                                                    <path id="shape0"
                                                          transform="matrix(0 1.43999995144053 -1.43999995144053 0 169.699698542137 22.4937165966093)"
                                                          fill="none" stroke="#c7ab9b" stroke-width="3"
                                                          stroke-linecap="butt" stroke-linejoin="miter"
                                                          stroke-miterlimit="10" d="M0 103.66L103.66 0"/>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
            <div class="navigation-collections">
                <div class="text-section">
                    <a href="{{ route('checkout.cart.clear') }}">
                        <h1 class="clear-cart" style="font-family: Giovanna, sans-serif;">Clear Cart</h1></a>
                    <div class="text-block" style="margin-top: 25px; margin-bottom: 25px">
                        <p>Total: ${{ \Cart::getSubTotal() }}</p>
                    </div>
                    <a href="{{ route('checkout.index') }}" class="button center-el">Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </section>
    <style>
        .Product-Gallery .container-fluid {
            position: relative;
            width: 65%;
        }

        .navigation-collections {
            width: 35%;
            height: 100%;
        }

        .button {
            background-color: #A08A7E;
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
        }

        .center-el {
            margin-right: auto;
            margin-left: auto;
        }

        .button:hover {
            opacity: 1
        }

        .Product-Gallery {
            padding-top: 0;
        }

        .Product-Gallery {
            position: relative;
            /*top: 115px;*/
            height: 900px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            padding-bottom: 100px;
        }

        .clear-cart {
            color: #A08A7E;
            font-size: 25px;
            text-align: center;
            font-family: Giovanna, sans-serif;
        }

        .total {
            color: #A08A7E;
            font-size: 20px;
            text-align: center;
            font-family: Giovanna, sans-serif;
        }

        .row {
            margin-top: 20px;
            justify-content: center;
            align-items: center;
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            /*margin: -15px;*/
        }

        .table th {
            text-align: left;
            font-size: 25px;
            color: #A08A7E;
            font-family: 'AverageRegular', sans-serif;
            font-weight: lighter;
            width: 150px;
            margin: 50px;
            padding: 5px;
            border-bottom: 1px solid rgba(201, 182, 170, 0.35);
        }

        .table td {
            color: #756256;
            border-bottom: 1px solid rgba(201, 182, 170, 0.1);
            padding: 5px;
            font-size: 20px;
        }


        a {
            text-decoration: none;
            color: #A08A7E;
            font-family: Giovanna, sans-serif;
            letter-spacing: 3px;
            font-weight: bold;
        }

        .table {
            margin-left: 10%;
        }

        .delete-button {
            height: 30px;
            width: 30px;
            margin-left: 25%;
            position: relative;
        }

        @media (min-width: 576px) {
            .row-cols-sm-auto > * {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-sm-1 > * {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-sm-2 > * {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-sm-3 > * {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-sm-4 > * {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-sm-5 > * {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-sm-6 > * {
                flex: 0 0 auto;
                width: 16.6666666667%
            }
        }

    </style>
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
    @include('includes.scripts')
@endsection
