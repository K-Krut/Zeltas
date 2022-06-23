@extends('layouts.layout-item')

@section('title-block')
    {{$product->name}}
@endsection

@section('content')
    <section class="Intro-product-slider">
        <div class="right-col-item">
            <div class="text-section">
                <div class="item-code">
                    <h1>CODE: {{$product->code}}</h1>
                </div>
                <div class="item-details" style="position: absolute; bottom: 75px">
                    <h1>Size:</h1>
                    <p>{{$product->size}}</p>
                    <h1>Metal:</h1>
                    <p>{{$product->getMetal->name}}</p>
                    <h1>Weight:</h1>
                    <p>{{$product->weight}}</p>
                </div>
            </div>
        </div>
        <div class="item-slider">
            <div class="item-slides">
                {{--                @forelse($product->images->count() === 0)--}}
                {{--                    <div class="item-slide">--}}
                {{--                        <div class="rings">--}}
                {{--                            <div class="big-ring">--}}
                {{--                                <h1 style="z-index: 1;">{{$product->name}}</h1>--}}
                {{--                                <div class="small-ring"></div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                @endforelse--}}
                @foreach($product->images as $image)
                    <div class="item-slide">
                        <div class="rings">
                            <div class="big-ring">
                                <h1 style="z-index: 1;">{{$product->name}}</h1>
                                <div class="small-ring">
                                    <img
                                        src="{{asset('images/jewelry/'.$image->image)}}"
                                        style="position: relative; width: 100%; height: 100%;"
                                        class="img-fluid card-img-top item-image">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="buttons-section">
                <button class="button button-prev" onclick="plusDivs(-1)">
                    <svg width="81" height="12" viewBox="0 0 81 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.11325 6L6 8.88675L8.88675 6L6 3.11325L3.11325 6ZM81 5.5H78.9167V6.5H81V5.5ZM74.75 5.5H70.5833V6.5H74.75V5.5ZM66.4167 5.5L62.25 5.5V6.5L66.4167 6.5V5.5ZM58.0833 5.5H53.9167V6.5H58.0833V5.5ZM49.75 5.5H45.5833V6.5H49.75V5.5ZM41.4167 5.5H37.25V6.5H41.4167V5.5ZM33.0833 5.5H28.9167V6.5H33.0833V5.5ZM24.75 5.5H20.5833V6.5H24.75V5.5ZM16.4167 5.5H12.25V6.5H16.4167V5.5ZM8.08335 5.5H6V6.5H8.08335V5.5ZM0.226492 6L6 11.7735L11.7735 6L6 0.226496L0.226492 6ZM81 5H78.9167V7H81V5ZM74.75 5H70.5833V7H74.75V5ZM66.4167 5H62.25V7H66.4167V5ZM58.0833 5H53.9167V7H58.0833V5ZM49.75 5H45.5833V7H49.75V5ZM41.4167 5H37.25V7H41.4167V5ZM33.0833 5H28.9167V7H33.0833V5ZM24.75 5H20.5833V7H24.75V5ZM16.4167 5H12.25V7H16.4167V5ZM8.08335 5H6V7H8.08335V5Z"
                            fill="#A38D7F"/>
                    </svg>
                </button>
                <button class="button button-next" onclick="plusDivs(1)">
                    <svg width="81" height="12" viewBox="0 0 81 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.11325 6L6 8.88675L8.88675 6L6 3.11325L3.11325 6ZM81 5.5H78.9167V6.5H81V5.5ZM74.75 5.5H70.5833V6.5H74.75V5.5ZM66.4167 5.5L62.25 5.5V6.5L66.4167 6.5V5.5ZM58.0833 5.5H53.9167V6.5H58.0833V5.5ZM49.75 5.5H45.5833V6.5H49.75V5.5ZM41.4167 5.5H37.25V6.5H41.4167V5.5ZM33.0833 5.5H28.9167V6.5H33.0833V5.5ZM24.75 5.5H20.5833V6.5H24.75V5.5ZM16.4167 5.5H12.25V6.5H16.4167V5.5ZM8.08335 5.5H6V6.5H8.08335V5.5ZM0.226492 6L6 11.7735L11.7735 6L6 0.226496L0.226492 6ZM81 5H78.9167V7H81V5ZM74.75 5H70.5833V7H74.75V5ZM66.4167 5H62.25V7H66.4167V5ZM58.0833 5H53.9167V7H58.0833V5ZM49.75 5H45.5833V7H49.75V5ZM41.4167 5H37.25V7H41.4167V5ZM33.0833 5H28.9167V7H33.0833V5ZM24.75 5H20.5833V7H24.75V5ZM16.4167 5H12.25V7H16.4167V5ZM8.08335 5H6V7H8.08335V5Z"
                            fill="#A38D7F"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="left-col-item">
            <div class="text-section">
                <div class="item-details" style="text-align: right;">
                    <h1 style="text-align: right;">Metal:</h1>
                    <p style="text-align: right;">Bronze</p>
                    <p style="text-align: right;">Silver</p>
                    <p style="text-align: right;">Silver Platted Bronze</p>
                </div>
                <div class="buy-item" style="position: absolute; bottom: 75px; right: 50px">
                    <h1 id="productPrice">${{$product->price}}</h1>
                    <form action="{{ route('product.add.cart') }}" method="POST" role="form" id="addToCart">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <dl class="dlist-inline">
                                    <dd>
                                        <input type="hidden" name="qty" value="{{ 1 }}">
                                        <input type="hidden" name="productId" value="{{ $product->id }}">
                                        <input type="hidden" name="price" id="finalPrice" value="{{ $product->price }}">
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <button type="submit"
                                style="width:90px; height:90px; z-index: 100; background-color: Transparent; border: 0;">
                            <svg width="90" height="90" viewBox="0 0 112 112" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.8"
                                      d="M55.5189 109.744L93.2868 93.9848L109.391 55.5355L94.3409 18.5309L55.5189 2"
                                      stroke="#C7AB9B" stroke-width="3" stroke-miterlimit="10"/>
                                <path opacity="0.8"
                                      d="M55.8722 109.744L18.1043 93.9848L2 55.5355L17.0502 18.5309L55.8722 2"
                                      stroke="#C7AB9B" stroke-width="3" stroke-miterlimit="10" stroke-dasharray="6 6"/>
                                <path
                                    d="M38 65.816C39.536 65.816 40.752 65.1973 41.648 63.96C42.544 62.7013 42.992 61.2933 42.992 59.736C42.992 58.1573 42.608 56.8453 41.84 55.8C41.072 54.7547 39.9947 54.232 38.608 54.232C37.5627 54.232 36.368 54.5733 35.024 55.256C35.024 60.3973 35.12 63.736 35.312 65.272C36.2507 65.6347 37.1467 65.816 38 65.816ZM35.024 54.136C36.7947 52.92 38.5013 52.312 40.144 52.312C41.808 52.312 43.1733 53.0373 44.24 54.488C45.3067 55.9173 45.84 57.6453 45.84 59.672C45.84 61.6987 45.1467 63.48 43.76 65.016C42.3733 66.552 40.3467 67.32 37.68 67.32C35.9093 67.32 34.1387 66.9467 32.368 66.2C32.5387 64.3227 32.624 61.4107 32.624 57.464C32.624 51.0427 32.56 47.288 32.432 46.2L32.368 45.656L30.32 45.048L30.256 44.216C31.6213 44.216 33.0293 44.024 34.48 43.64L35.088 43.928C35.0453 46.296 35.024 49.6987 35.024 54.136ZM53.1402 67.288C50.9642 67.288 49.8762 66.1787 49.8762 63.96V59.672C49.8762 56.8133 49.8016 55.032 49.6522 54.328L47.7642 53.72L47.7002 52.888C48.9589 52.888 50.3136 52.696 51.7642 52.312L52.3722 52.6C52.3082 56.4187 52.2762 59.8853 52.2762 63C52.2762 64.4293 53.1402 65.144 54.8682 65.144C55.5936 65.144 56.3722 65.0267 57.2042 64.792C58.0362 64.536 58.6976 64.2587 59.1882 63.96C59.2736 62.808 59.3162 61.4533 59.3162 59.896C59.3162 56.9947 59.2309 55.1387 59.0602 54.328L57.0442 53.72L56.9802 52.888C58.3456 52.888 59.7536 52.696 61.2042 52.312L61.8122 52.6C61.7482 54.2 61.7162 56.8453 61.7162 60.536L61.8122 64.28C61.8122 64.6427 61.9509 64.9307 62.2282 65.144C62.5269 65.336 62.8149 65.464 63.0922 65.528C63.3696 65.5707 63.7536 65.6027 64.2442 65.624L64.1482 66.552C63.3802 66.616 62.2176 66.808 60.6602 67.128C60.0202 66.8507 59.5829 66.2107 59.3482 65.208C57.3002 66.5947 55.2309 67.288 53.1402 67.288ZM71.534 53.336C70.894 53.4 70.414 53.528 70.094 53.72C69.774 53.912 69.614 54.072 69.614 54.2C69.614 54.3067 70.7447 57.848 73.006 64.824C75.3527 58.1253 76.526 54.6053 76.526 54.264C76.526 53.7947 75.9393 53.4853 74.766 53.336L74.67 52.408C75.3953 52.472 76.1633 52.504 76.974 52.504L80.238 52.408L80.334 53.336C79.246 53.4853 78.574 53.88 78.318 54.52C77.4007 57.3787 75.854 61.5387 73.678 67C72.0353 71.16 70.4673 73.7627 68.974 74.808C68.5473 75.1067 68.2167 75.2773 67.982 75.32C67.7687 75.384 67.5553 75.416 67.342 75.416C67.1287 75.416 66.8193 75.16 66.414 74.648C66.03 74.1573 65.774 73.6667 65.646 73.176L66.126 72.568C66.5313 72.76 67.0113 72.856 67.566 72.856C69.102 72.856 70.638 70.904 72.174 67L71.054 66.328C69.4113 61.2507 68.142 57.6987 67.246 55.672L66.766 54.648C66.4887 53.944 65.838 53.5067 64.814 53.336L64.718 52.408C66.19 52.472 67.3207 52.504 68.11 52.504L71.438 52.408L71.534 53.336Z"
                                    fill="#C7AB9B"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="Product-mobile">
        <div class="product-info">
            <div class="title">
                <h1>CODE: {{$product->code}}</h1>
            </div>
            <div class="info">
                <p>Size: {{$product->size}}</p>
                <p>Metal: {{$product->getMetal->name}}</p>
                <p>Weight: {{$product->weight}}</p>
                <p class="price" id="productPrice">Price: {{$product->price}}</p>
            </div>
            <div class="buy-item-mb">
                <div class="buy-button-set">
                    <form action="{{ route('product.add.cart') }}" method="POST" role="form" id="addToCart">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <dl class="dlist-inline">
                                    <dd>
                                        <input type="hidden" name="qty" value="{{ 1 }}">
                                        <input type="hidden" name="productId" value="{{ $product->id }}">
                                        <input type="hidden" name="price" id="finalPrice" value="{{ $product->price }}">
                                        <input type="hidden" value="{{ $product->image }}"  name="image">
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <button type="submit"
                                style="width:90px; height:90px; z-index: 100; background-color: Transparent; border: 0;">
                            <svg width="90" height="90" viewBox="0 0 112 112" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.8"
                                      d="M55.5189 109.744L93.2868 93.9848L109.391 55.5355L94.3409 18.5309L55.5189 2"
                                      stroke="#C7AB9B" stroke-width="3" stroke-miterlimit="10"/>
                                <path opacity="0.8"
                                      d="M55.8722 109.744L18.1043 93.9848L2 55.5355L17.0502 18.5309L55.8722 2"
                                      stroke="#C7AB9B" stroke-width="3" stroke-miterlimit="10" stroke-dasharray="6 6"/>
                                <path
                                    d="M38 65.816C39.536 65.816 40.752 65.1973 41.648 63.96C42.544 62.7013 42.992 61.2933 42.992 59.736C42.992 58.1573 42.608 56.8453 41.84 55.8C41.072 54.7547 39.9947 54.232 38.608 54.232C37.5627 54.232 36.368 54.5733 35.024 55.256C35.024 60.3973 35.12 63.736 35.312 65.272C36.2507 65.6347 37.1467 65.816 38 65.816ZM35.024 54.136C36.7947 52.92 38.5013 52.312 40.144 52.312C41.808 52.312 43.1733 53.0373 44.24 54.488C45.3067 55.9173 45.84 57.6453 45.84 59.672C45.84 61.6987 45.1467 63.48 43.76 65.016C42.3733 66.552 40.3467 67.32 37.68 67.32C35.9093 67.32 34.1387 66.9467 32.368 66.2C32.5387 64.3227 32.624 61.4107 32.624 57.464C32.624 51.0427 32.56 47.288 32.432 46.2L32.368 45.656L30.32 45.048L30.256 44.216C31.6213 44.216 33.0293 44.024 34.48 43.64L35.088 43.928C35.0453 46.296 35.024 49.6987 35.024 54.136ZM53.1402 67.288C50.9642 67.288 49.8762 66.1787 49.8762 63.96V59.672C49.8762 56.8133 49.8016 55.032 49.6522 54.328L47.7642 53.72L47.7002 52.888C48.9589 52.888 50.3136 52.696 51.7642 52.312L52.3722 52.6C52.3082 56.4187 52.2762 59.8853 52.2762 63C52.2762 64.4293 53.1402 65.144 54.8682 65.144C55.5936 65.144 56.3722 65.0267 57.2042 64.792C58.0362 64.536 58.6976 64.2587 59.1882 63.96C59.2736 62.808 59.3162 61.4533 59.3162 59.896C59.3162 56.9947 59.2309 55.1387 59.0602 54.328L57.0442 53.72L56.9802 52.888C58.3456 52.888 59.7536 52.696 61.2042 52.312L61.8122 52.6C61.7482 54.2 61.7162 56.8453 61.7162 60.536L61.8122 64.28C61.8122 64.6427 61.9509 64.9307 62.2282 65.144C62.5269 65.336 62.8149 65.464 63.0922 65.528C63.3696 65.5707 63.7536 65.6027 64.2442 65.624L64.1482 66.552C63.3802 66.616 62.2176 66.808 60.6602 67.128C60.0202 66.8507 59.5829 66.2107 59.3482 65.208C57.3002 66.5947 55.2309 67.288 53.1402 67.288ZM71.534 53.336C70.894 53.4 70.414 53.528 70.094 53.72C69.774 53.912 69.614 54.072 69.614 54.2C69.614 54.3067 70.7447 57.848 73.006 64.824C75.3527 58.1253 76.526 54.6053 76.526 54.264C76.526 53.7947 75.9393 53.4853 74.766 53.336L74.67 52.408C75.3953 52.472 76.1633 52.504 76.974 52.504L80.238 52.408L80.334 53.336C79.246 53.4853 78.574 53.88 78.318 54.52C77.4007 57.3787 75.854 61.5387 73.678 67C72.0353 71.16 70.4673 73.7627 68.974 74.808C68.5473 75.1067 68.2167 75.2773 67.982 75.32C67.7687 75.384 67.5553 75.416 67.342 75.416C67.1287 75.416 66.8193 75.16 66.414 74.648C66.03 74.1573 65.774 73.6667 65.646 73.176L66.126 72.568C66.5313 72.76 67.0113 72.856 67.566 72.856C69.102 72.856 70.638 70.904 72.174 67L71.054 66.328C69.4113 61.2507 68.142 57.6987 67.246 55.672L66.766 54.648C66.4887 53.944 65.838 53.5067 64.814 53.336L64.718 52.408C66.19 52.472 67.3207 52.504 68.11 52.504L71.438 52.408L71.534 53.336Z"
                                    fill="#C7AB9B"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $('#addToCart').submit(function (e) {
                if ($('.option').val() == 0) {
                    e.preventDefault();
                    alert('Please select an option');
                }
            });
            $('.option').change(function () {
                $('#productPrice').html("{{$product->price }}");
                let extraPrice = $(this).find(':selected').data('price');
                let price = parseFloat($('#productPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $('#productPrice').html(finalPrice);
            });
        });
    </script>
@endsection
