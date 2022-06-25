<section id="Product-page-products-slider" class="Product-slider">
    <div class="container-products-t">
        <ul id="autoWidth" class="">
            @foreach($featuredProducts as $product)
                <div class="item-1 product-box product-bg-fade">
                    <h2 class="product-title">{{$product->name}}</h2>
                    <a href="{{route('product.show', $product->slug)}}">
                        @if ($product->images->count() > 0)
                            <img class="product-item"
                                 src="{{asset('images/jewelry/'.$product->images->where('main', '=', 1)->firstOrFail()->image)}}">
                        @else
                            <img class="product-item"
                                 src="/images/zeltas-wave-250.png">
                        @endif
                    </a>
                    <div class="details">
                        <div class="left-col-pr">
                            <p>{{$product->categories->name}}</p>
                            <h1>{{$product->categories->name}} {{$product->name}}</h1>
                        </div>
                        <div class="right-col-pr center">
                            <h2 class="price">${{$product->price}}</h2>
                            <div class="product-button"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
    @include('includes.style-product')
</section>
