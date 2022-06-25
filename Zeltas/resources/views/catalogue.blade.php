@extends('layouts.layout')

@section('title-block')
    Catalogue
@endsection

@section('content')

    <div class="body-class">
        <section class="Collections-slider">
            <div class="container-fluid">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="item-1 product-box product-bg-fade">
                            <a href="{{route('category.show', $category->slug)}}">
                                <h2 class="product-title">{{$category->name}}</h2>
                                <img class="product-item" src="{{ asset('images/category/'.$category->image) }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="all-collection-title">
                <a href="{{route('all_collections')}}"><h1>ALL COLLECTIONS</h1></a>
            </div>
            @include('includes.style-catalogue')
        </section>
    </div>
@endsection

