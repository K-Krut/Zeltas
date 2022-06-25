@extends('layouts.layout-collection')

@section('title-block')
    Search
@endsection

@section('title')
    Search
@endsection

@section('collection-block')
    <div class="container-fluid">
        <div class="px-lg-5">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                        <a href="{{route('product.show', $product->slug)}}">
                            @if ($product->images->count() > 0)
                                <div class="item-fade-bg">
                                    <h2 class="product-title" style="top: 25px">{{$product->name}}</h2>
                                    <img
                                        src="{{asset('images/jewelry/'.$product->images->where('main', '=', 1)->firstOrFail()->image)}}"
                                        class="img-fluid card-img-top item-image">
                                </div>
                            @else
                                <div class="item-gallery-empty">
                                    <h2 class="product-title" style="z-index: 1">{{$product->name}}</h2>
                                </div>
                            @endif
                            <h2 class="price">${{$product->price}}</h2>
                        </a>
                    </div>
                @empty
                    <h1 style="color: #A08A7E; font-size: 55px">No Products found</h1>
                @endforelse
            </div>
        </div>
    </div>
    <style>
        .Product-Gallery {
            padding-bottom: 300px;

        }
    </style>
@endsection
