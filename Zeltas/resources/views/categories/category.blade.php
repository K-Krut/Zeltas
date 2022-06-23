@extends('layouts.layout-collection')

@section('title')
    {{$category->name}}
@endsection

@section('collection-block')
    <div class="container-fluid">
        <div class="px-lg-5">
            <div class="row">
                @forelse($category->products as $product)
                    <div class="col-xl-6 col-lg-6 col-md-6 mb-4 item-gallery">
                        <a href="{{route('product.show', $product->slug)}}">
                            @if ($product->images->count() > 0)
                                <div class="item-fade-bg">
                                    <h2 class="product-title">{{$product->name}}</h2>
                                    <img
                                        src="{{asset('images/jewelry/'.$product->images->where('main', '=', 1)->firstOrFail()->image)}}"
                                        class="img-fluid card-img-top item-image">
                                </div>
                            @else
                                <h2 class="product-title" style="z-index: 1">{{$product->name}}</h2>
                                <img src="{{asset('images/zeltas-wave.png')}}" class="img-fluid card-img-top"
                                     style="width: 100%; height: 100%; object-fit: fill; top: -25px">
                            @endif
                            <h2 class="price">{{$product->price}}</h2>
                        </a>
                    </div>
                @empty
                    <h1 style="color: #A08A7E; font-size: 55px">No Products found</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection
