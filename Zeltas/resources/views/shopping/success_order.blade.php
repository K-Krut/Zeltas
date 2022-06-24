@extends('layouts.layout')

@section('title-block')
    Order
@endsection

@section('content')
    <div class="body-class">
        <div class="title-in-progress">
            <h1>Your order placed successfully. Your order number is:</h1>
            <h1 style="text-align: center">{{ $order->order_number }}</h1>
        </div>
    </div>
@endsection
