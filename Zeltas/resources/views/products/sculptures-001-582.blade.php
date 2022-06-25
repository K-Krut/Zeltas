extends('layouts.layout-item')

@section('titale-block')
    Owl Bronze
@endsection

@section('content')
    <section class="Intro-product-slider">
        <div class="right-col-item">
            <div class="text-section">
                <div class="item-code">
                    <h1>CODE: 001-582</h1>
                </div>
                <div class="item-details" style="position: absolute; bottom: 75px">
                    <h1>Size:</h1>
                    <p>3,1 x 5,2 x 1,3 cm</p>
                    <h1>Metal:</h1>
                    <p>Italian Bronze</p>
                    <h1>Weight:</h1>
                    <p>34g</p>
                </div>
            </div>
        </div>
        <div class="item-slider">
            <div class="item-slides">
                <div class="item-slide">
                    <div class="rings">
                        <div class="big-ring">
                            <h1>OWL</h1>
                            <div class="small-ring">
                                <img style="width: 90%; height: auto;" src="public/images/jewelry/sculpture_owl.png">
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="item-slide">--}}
{{--                    <div class="rings">--}}
{{--                        <div class="big-ring">--}}
{{--                            <div class="small-ring">--}}
{{--                                <img style="width: 90%; height: auto;" src="public/images/jewelry/owl-4.png"--}}
{{--                                     alt="Wolf">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item-slide">--}}
{{--                    <div class="rings">--}}
{{--                        <div class="big-ring">--}}
{{--                            <div class="small-ring">--}}
{{--                                <img style="width: 90%; height: auto;" src="public/images/jewelry/owl-2.png"--}}
{{--                                     alt="Wolf">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item-slide">--}}
{{--                    <div class="rings">--}}
{{--                        <div class="big-ring">--}}
{{--                            <div class="small-ring">--}}
{{--                                <img style="width: 90%; height: auto;" src="public/images/jewelry/owl-6.png"--}}
{{--                                     alt="Wolf">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item-slide">--}}
{{--                    <div class="rings">--}}
{{--                        <div class="big-ring">--}}
{{--                            <div class="small-ring">--}}
{{--                                <img style="width: 90%; height: auto;" src="public/images/jewelry/owl-4.png"--}}
{{--                                     alt="Wolf">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item-slide">--}}
{{--                    <div class="rings">--}}
{{--                        <div class="big-ring">--}}
{{--                            <div class="small-ring">--}}
{{--                                <img style="width: 90%; height: auto;" src="public/images/jewelry/owl-5.png"--}}
{{--                                     alt="Wolf">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="buttons-section">
                <button class="button button-prev" onclick="plusDivs(-1)"></button>
                <button class="button button-next" onclick="plusDivs(1)"></button>
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
                    <h1>$45.00</h1>
                    <div class="buy-button"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="Product-mobile">
        <div class="intro-product-mb">
            <img src="../assets/images/photos/owl-photo.jpg">
        </div>
        <div class="product-info">
            <div class="title">
                <h1>CODE: 001-582</h1>
            </div>
            <div class="info">
                <p>Size: 3,1 х 5,2 х 1,3 cm</p>
                <p>Metal: Italian Bronzaf</p>
                <p>Weight: 34g</p>
            </div>
            <div class="buy-item-mb">
                <div class="buy-button-set">
                    <div class="price">
                        <h1>$45.00</h1>
                    </div>
                    <div class="buy-button"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
