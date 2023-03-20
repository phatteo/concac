@extends('front.layout.master')
@section('title','Home')
@section('body')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="./Front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Black Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale<span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="./Front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Black Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale<span>50%</span></h2>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="./Front/img/banner-1.jpg" alt="">
                    </div>
                    <div class="inner-text">
                        <h4>Men's</h4>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="./Front/img/banner-2.jpg" alt="">
                    </div>
                    <div class="inner-text">
                        <h4>Women's</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="./Front/img/banner-3.jpg" alt="">
                    </div>
                    <div class="inner-text">
                        <h4>Kid's</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="./Front/img/products/women-large.jpg"></div>
                    <h2>Women's</h2>
                    <a href="#">Discover More</a>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tags=".Clothing" data-category="women">All</li>
                            <li class="item" data-tag=".Clothing" data-category="women">CLothing</li>
                            <li class="item" data-tag=".HandBag" data-category="women">HandBag</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Shoes</li>
                            <li class="item" data-tag=".Accessories" data-category="women">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">

                        @foreach($featuredProducts['women'] as $product)
                            @include('Front.components.product-item')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Deal of the week section begin -->
    <div class="deal-of-week set-bg spad" data-setbg="./Front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit</p>
                    <div class="product-price">
                        $35.00
                        <span>/ HandBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </div>
    <!-- MAn Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="./Front/img/products/man-large.jpg"></div>
                    <h2>Men's</h2>
                    <a href="#">Discover More</a>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tags=".Clothing" data-category="men">All</li>
                            <li class="item" data-tag=".Clothing" data-category="men">CLothing</li>
                            <li class="item" data-tag=".HandBag" data-category="men">HandBag</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Shoes</li>
                            <li class="item" data-tag=".Accessories" data-category="men">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach($featuredProducts['men'] as $womenproduct)
                            @include('Front.components.product-item')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Partner Logo Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="./Front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5>Collection</h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="./Front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5>Collection</h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="./Front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5>Collection</h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="./Front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5>Collection</h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="./Front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5>Collection</h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="./Front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5>Collection</h5>
            </div>
        </div>
    </div>
    <section class="lastest-blog spad">
        <div class="container">
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="./Front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="./Front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="./Front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>DELIVERY ON</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
