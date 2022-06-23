@extends('layouts.layout')

@yield('title-block')

@section('content')
    <div class="body-class">
        <section class="Product-Gallery">
            <div class="collection-title">
                <h1>@yield('title')</h1>
            </div>
            <div class="product-gallery-box">
                <div class="navigation-collections">
                    <div class="text-section">
                        <div class="text-block">
                            <a href="{{route('catalogue')}}"><h1>Catalogue</h1></a>
                            @foreach($categories as $category)
                                <a href="{{route('category.show', $category->slug)}}"><p>{{$category->name}}</p></a>
                            @endforeach
                        </div>
                        <div class="text-block">
                            <a href="{{route('all_collections')}}"><h1>Collections</h1></a>
                            @foreach($collections as $collection)
                                <a href="{{route('collection.show', $collection->slug)}}"><p>{{$collection->name}}</p></a>
                            @endforeach
                        </div>
                        <div class="text-block">
                            <a href="#"><h1>Metals</h1></a>
                            @foreach($metals as $metal)
                                <a href="{{route('metal.show', $metal->slug)}}"><p>{{$metal->name}}</p></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @yield('collection-block')
            </div>
            @include('includes.style-catalogue')
        </section>
    </div>
@endsection
