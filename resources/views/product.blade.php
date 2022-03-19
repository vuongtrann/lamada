@extends('layouts.frontend')
@section('styles')
@endsection
@section('contents')
<!-- HRADER AREA END -->
<!-- Slider area -->
<div class="slider-area">
    <div class="container">
        <div class="row">
            <div class="slider-hidden col-lg-3">

            </div>
            <div class="slider col-xl-9">

                <!-- slider-area start -->
                <div class="slider-area-inner">
                    <!-- slider start -->
                    <div class="slider-inner">
                        <div id="mainSlider" class="nivoSlider nevo-slider">
                            <img src="assets/images/slider/1.jpg" alt="main slider" title="#htmlcaption1">
                            <img src="assets/images/slider/2.jpg" alt="main slider" title="#htmlcaption2">
                        </div>
                        <div id="htmlcaption1" class="nivo-html-caption slider-caption">
                            <div class="slider-progress"></div>
                            <div class="col-md-9">
                                <div class="slider-content slider-content-1 slider-animated-1">
                                    <h1 class="hone">INNOVATIVE</h1>
                                    <h1 class="htwo">SMARTER</h1>
                                    <h1 class="hthree">BRIGHTER</h1>
                                    <h3>40” SkyHi Smart Package</h3>
                                    <div class="button-1 hover-btn-2">
                                        <a href="shop.html">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                            <div class="slider-progress"></div>
                            <div class="col-md-9">
                                <div class="slider-content slider-content-2 slider-animated-2">
                                    <h1 class="hone">DRONE DIY</h1>
                                    <h1 class="htwo">WORKSHOP</h1>
                                    <h3 class="h3one">Build & Fly</h3>
                                    <h3 class="h3two">Your Own drone!</h3>
                                    <div class="button-1 hover-btn-1">
                                        <a href="shop.html">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider end -->
                </div>
                <!-- slider-area end -->
            </div>
            <div class="slider-banner-area col-sm-12">
                <div class="slider-banner">
                    <div class="slider-single-banner">
                        <a href="shop.html">
                            <img src="assets/images/banner/banner1.jpg" alt="Banner">
                        </a>
                    </div>
                </div>
                <div class="slider-banner">
                    <div class="slider-single-banner">
                        <a href="shop.html">
                            <img src="assets/images/banner/banner2.jpg" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider area end -->
<!-- Policy area -->
<div class="policy-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="policy-area-inner">
                    <div class="single-policy-area">
                        <div class="single-policy">
                            <div class="icon"><i class="icon ion-android-sync"></i></div>
                            <h3>Free Return</h3>
                            <p>30 days money back guarantee!</p>
                        </div>
                    </div>
                    <div class="single-policy-area">
                        <div class="single-policy">
                            <div class="icon"><i class="icon ion-paper-airplane"></i></div>
                            <h3>Free Shipping</h3>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                    <div class="single-policy-area">
                        <div class="single-policy">
                            <div class="icon"><i class="icon ion-help-buoy"></i></div>
                            <h3>Support 24/7</h3>
                            <p>We support online 24 hrs a day</p>
                        </div>
                    </div>
                    <div class="single-policy-area">
                        <div class="single-policy">
                            <div class="icon"><i class="icon ion-card"></i></div>
                            <h3>Receive Gift Card</h3>
                            <p>Recieve gift all over oder $50</p>
                        </div>
                    </div>
                    <div class="single-policy-area">
                        <div class="single-policy">
                            <div class="icon"><i class="icon ion-ios-locked"></i></div>
                            <h3>Secure Payment</h3>
                            <p>We Value Your Security</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Policy area end -->
<!-- Deals Of The Day -->
<div class="deals-of-the-day-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h3>Deals Of The Day</h3>
                </div>
            </div>
        </div>
        <div class="big-product-area">
            <div class="row">
                <div class="product-carousel-active owl-carousel">
                    <!--Start foreach-->
                    @if(isset($products))
                    @foreach($products as $product)
                    <div class="col-sm-12">
                        <!-- single product -->
                        <div class="single-product-area">
                            <div class="product-wrapper listview">
                                <div class="list-col4">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="{{$product->image_name}}" alt="" height="5px" width="auto">
                                        </a>
                                        <div class="quickviewbtn">
                                            <a href="#" data-toggle="modal" data-target="#product_modal" data-original-title="Quick View"><i class="ion-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-col8">
                                    <div class="product-info">
                                        <h2><a href="single-product.html">{{$product->name}}</a></h2>
                                        <span class="price">
                                            <del>$ {{$product->price}}</del> $ {{$product->sale_price}}
                                        </span>

                                        <div class="product-desc">
                                            <p>{{$product->description}}</p>
                                        </div>
                                        <div class="deal-counter">
                                            <div data-countdown="2021/08/02"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deals Of The Day -->
<!-- Home fullwidth banner -->
<div class="home-fullwidth-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="#">
                    <img src="assets/images/banner/home1-banner2.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Home fullwidth banner end -->
<!-- Best sellers -->
<div class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h3>Best Sellers</h3>
                </div>
            </div>
        </div>
        <div class="product-area-inner">
            <div class="row">
                <div class="product-carousel-active-2 owl-carousel">
                    @if(isset($products))
                    @foreach($products as $product)
                    <div class="col-sm-12">
                        <!-- single product -->
                        <div class="single-product-area">
                            <div class="product-wrapper gridview">
                                <div class="list-col4">
                                    <div class="product-image">
                                        <a href="#">
                                            <img src="{{$product->image_name}}" alt="">
                                        </a>
                                        <div class="quickviewbtn">
                                            <a href="#" data-toggle="modal" data-target="#product_modal" data-original-title="Quick View"><i class="ion-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-col8">
                                    <div class="product-info">
                                        <h2><a href="single-product.html">{{$product->name}}</a></h2>
                                        <span class="price">
                                        <del>$ {{$product->price}}</del> $ {{$product->sale_price}}
                                        </span>
                                    </div>
                                    <!--Button từ addtocart.vue-->
                                    <add-to-cart-button product-id="{{$product->id}}"
                                        user-id="{{auth()->user()->id ?? 0}}"
                                    />

                                        
                                    
                                </div>
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Best sellers end -->
<!-- Home fullwidth banner -->
<div class="home-fullwidth-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="#">
                    <img src="assets/images/banner/home1-banner3.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Home fullwidth banner end -->
<!-- New Arrivals -->
<div class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h3>New Arrivals</h3>
                </div>
            </div>
        </div>
        <div class="product-area-inner">
            <div class="row">
                <div class="product-carousel-active-3 owl-carousel">
                    @if(isset($products))
                    @foreach($products as $product)
                    <div class="col-sm-12">
                        <!-- single product -->
                        <div class="single-product-area">
                            <div class="product-wrapper gridview">
                                <div class="list-col4">
                                    <div class="product-image">
                                        <a href="">
                                            <img src="{{$product->image_name}}" alt="">
                                        </a>
                                        <div class="quickviewbtn">
                                            <a href="#" data-toggle="modal" data-target="#product_modal" data-original-title="Quick View"><i class="ion-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-col8">
                                    <div class="product-info">
                                        <h2><a href="single-product.html">{{$product->name}}</a></h2>
                                        <span class="price">
                                            <del>$ {{$product->price}}</del> $ {{$product->sale_price}}
                                        </span>
                                    </div>
                                    <!--Button từ addtocart.vue-->
                                    <add-to-cart-button product-id="{{$product->id}}"
                                        user-id="{{auth()->user()->id ?? 0}}"/>

                                </div>
                            </div>
                        </div>
                        <!-- single product end -->
                        <!-- single product -->
                        <div class="single-product-area">
                            <div class="product-wrapper gridview">
                                <div class="list-col4">
                                    <div class="product-image">
                                        <a href="">
                                            <img src="{{$product->image_name}}" alt="">
                                        </a>
                                        <div class="quickviewbtn">
                                            <a href="#" data-toggle="modal" data-target="#product_modal" data-original-title="Quick View"><i class="ion-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-col8">
                                    <div class="product-info">
                                        <h2><a href="single-product.html">{{$product->name}}</a></h2>
                                        <span class="price">
                                        <del>$ {{$product->price}}</del> $ {{$product->sale_price}}
                                        </span>
                                    </div>
                                   <!--Button từ addtocart.vue-->
                                    <add-to-cart-button product-id="{{$product->id}}"
                                        user-id="{{auth()->user()->id ?? 0}}"/>

                                </div>
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Arrivals end -->
<!-- home banner four -->
<div class="home-banner-four">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 banner-four-one">
                <a href="shop.html"><img src="assets/images/banner/ehome1-banner4-1.jpg" alt=""></a>
            </div>
            <div class="col-sm-7 banner-four-two">
                <div class="top-banner">
                    <a href="shop.html"><img src="assets/images/banner/home1-banner4-2.jpg" alt=""></a>
                </div>
                <div class="bottom-banner">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="shop.html"><img src="assets/images/banner/home1-banner4-3.jpg" alt=""></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="shop.html"><img src="assets/images/banner/home1-banner4-4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home banner four end -->
<!-- product carosel area -->

<!-- product carosel area end -->
<!-- Brand zone area -->
<!-- <div class="brand-zone-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xl-9 hometab">
                        <div class="section-title">
                            <h3>Brand Zone</h3>
                        </div>
                        <div class="brand-zone-tab-area">
                            <div class="brand-tab-menu">
                                <div class="nav">
                                    <ul>
                                        <li><a class="active" data-toggle="tab" href="#brand_zone_1"><span>Gamepad</span></a></li>
                                        <li><a data-toggle="tab" href="#brand_zone_2"><span>TVS</span></a></li>
                                        <li><a data-toggle="tab" href="#brand_zone_3"><span>Cell Phones</span></a></li>
                                        <li><a data-toggle="tab" href="#brand_zone_4"><span>Cameras</span></a></li>
                                        <li><a data-toggle="tab" href="#brand_zone_5"><span>Printers</span></a></li>
                                        <li><a data-toggle="tab" href="#brand_zone_6"><span>Audio & video</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="brand-tab-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="brand_zone_1">
                                        <a href="#"><img src="assets/images/banner/home1-tab-img.jpg" alt=""></a>
                                    </div>
                                    <div class="tab-pane fade" id="brand_zone_2">
                                        <a href="#"><img src="assets/images/banner/home1-tab-img.jpg" alt=""></a>
                                    </div>
                                    <div class="tab-pane fade" id="brand_zone_3">
                                        <a href="#"><img src="assets/images/banner/home1-tab-img.jpg" alt=""></a>
                                    </div>
                                    <div class="tab-pane fade" id="brand_zone_4">
                                        <a href="#"><img src="assets/images/banner/home1-tab-img.jpg" alt=""></a>
                                    </div>
                                    <div class="tab-pane fade" id="brand_zone_5">
                                        <a href="#"><img src="assets/images/banner/home1-tab-img.jpg" alt=""></a>
                                    </div>
                                    <div class="tab-pane fade" id="brand_zone_6">
                                        <a href="#"><img src="assets/images/banner/home1-tab-img.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-xl-3 hometestimonial">
                        <div class="section-title">
                            <h3>Testimonials</h3>
                        </div>
                        <div class="testimonial-sidebar carosel-next-prive owl-carousel"> -->
<!-- Testimonial area -->
<!-- <div class="testimonial-area">
                                <img src="assets/images/testimonials/testimonial3-120x120.jpg" alt="testimonial">
                                <blockquote class="testimonials-text">
                                    <p>RoadThemes support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                </blockquote>
                                <span>Katherine Sullivan</span>
                            </div> -->
<!-- Testimonial area end -->
<!-- Testimonial area -->
<!-- <div class="testimonial-area">
                                <img src="assets/images/testimonials/testimonial5-120x120.jpg" alt="testimonial">
                                <blockquote class="testimonials-text">
                                    <p>RoadThemes support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                </blockquote>
                                <span>Jenifer Brown</span>
                            </div> -->
<!-- Testimonial area end -->
<!-- Testimonial area -->
<!-- <div class="testimonial-area">
                                <img src="assets/images/testimonials/testimonial6-120x120.jpg" alt="testimonial">
                                <blockquote class="testimonials-text">
                                    <p>RoadThemes support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                </blockquote>
                                <span>Kathy Young</span>
                            </div> -->
<!-- Testimonial area end -->
<!-- </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Brand zone area end -->
<!-- Brand logo area -->
<div class="brand-logo-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="brand-carousel-active owl-carousel">
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand1.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand2.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand3.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand4.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand5.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand6.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand7.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand8.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand9.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                    <!-- single brand logo -->
                    <div class="brand-logo">
                        <a href="#"><img src="assets/images/brand/brand1.jpg" alt="Brand logo"></a>
                    </div>
                    <!-- single brand logo end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand logo area end -->
<footer class="footer-area">
    <!-- newsletter area -->
    <div class="newsletter-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-9">
                    <div class="newsletter-text">
                        <div class="icon"><i class="icon ion-email"></i></div>
                        <h3>Sign Up To Newsletter</h3>
                        <h4>..and Receive $29 Coupon For First Shopping</h4>
                    </div>
                    <div class="newsletter">
                        <div class="newsletter-box">
                            <form action="#">
                                <input class="subscribe" placeholder="your email address" name="email" id="subscribe" type="email">
                                <button type="submit" class="submit">subscribe!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-3">
                    <div class="footer-social">
                        <ul class="social-icons">
                            <li><a class="facebook social-icon" href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter social-icon" href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="instagram social-icon" href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="linkedin social-icon" href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="rss social-icon" href="#" title="Rss" target="_blank"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter area end -->
    <!-- footer policy area -->
    <div class="footer-policy-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12 foo-pol">
                    <div class="footer-policy-box">
                        <p><i class="icon ion-reply-all"></i></p>
                        <h3>Free Returns</h3>
                        <p>Currently over 50 countries qualify for express international shipping.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12 foo-pol">
                    <div class="footer-policy-box">
                        <p><i class="icon ion-ribbon-b"></i></p>
                        <h3>Customer Support</h3>
                        <p>We really care about you and your website as much as you do.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12 foo-pol">
                    <div class="footer-policy-box">
                        <p><i class="icon ion-android-plane"></i></p>
                        <h3>International Shipping</h3>
                        <p>Currently over 50 countries qualify for express international shipping.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12 foo-pol">
                    <div class="footer-policy-box">
                        <p><i class="icon ion-android-star"></i></p>
                        <h3>Dedicated Service</h3>
                        <p>Consult our specialists for help with an order, customization, or design advice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer policy area end -->

    <!-- footer copyright area -->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <p>Copyright © 2018 Bege . All Rights Reserved.</p>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6 pull-right">
                    <img src="assets/images/icons/payment-icon.png" alt="payment icon">
                </div>
            </div>
        </div>
    </div>
    <!-- footer copyright area end -->
</footer>
<!-- QUICKVIEW PRODUCT START -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="product_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-btn">
                    <button class="close" data-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Single product area -->
                    <div class="single-product-area">
                        <div class="container-fullwidth">
                            <div class="single-product-wrapper">
                                <div class="row">
                                    <div class="col-xs-12 col-md-7 col-lg-7">
                                        <div class="product-details-img-content">
                                            <div class="product-details-tab mr-40">
                                                <div class="product-details-large tab-content">
                                                    <div class="tab-pane active" id="pro-details1">
                                                        <div class="product-pop">
                                                            <a href="#">
                                                                <img src="assets/images/product/single/product4.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="pro-details2">
                                                        <div class="product-pop">
                                                            <a href="#">
                                                                <img src="assets/images/product/single/product5.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="pro-details3">
                                                        <div class="product-pop">
                                                            <a href="#">
                                                                <img src="assets/images/product/single/product6.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="pro-details4">
                                                        <div class="product-pop">
                                                            <a href="#">
                                                                <img src="assets/images/product/single/product7.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="pro-details5">
                                                        <div class="product-pop">
                                                            <a href="#">
                                                                <img src="assets/images/product/single/product8.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-details-small nav product-dec-slider-qui owl-carousel">
                                                    <a class="active" href="#pro-details1">
                                                        <img src="assets/images/product/thumbnails/product4.jpg" alt="">
                                                    </a>
                                                    <a href="#pro-details2">
                                                        <img src="assets/images/product/thumbnails/product5.jpg" alt="">
                                                    </a>
                                                    <a href="#pro-details3">
                                                        <img src="assets/images/product/thumbnails/product6.jpg" alt="">
                                                    </a>
                                                    <a href="#pro-details4">
                                                        <img src="assets/images/product/thumbnails/product7.jpg" alt="">
                                                    </a>
                                                    <a href="#pro-details5">
                                                        <img src="assets/images/product/thumbnails/product8.jpg" alt="">
                                                    </a>
                                                    <a class="active" href="#pro-details1">
                                                        <img src="assets/images/product/thumbnails/product4.jpg" alt="">
                                                    </a>
                                                    <a href="#pro-details2">
                                                        <img src="assets/images/product/thumbnails/product5.jpg" alt="">
                                                    </a>
                                                    <a href="#pro-details3">
                                                        <img src="assets/images/product/thumbnails/product6.jpg" alt="">
                                                    </a>
                                                    <a href="#pro-details4">
                                                        <img src="assets/images/product/thumbnails/product7.jpg" alt="">
                                                    </a>
                                                    <a href="#pro-details5">
                                                        <img src="assets/images/product/thumbnails/product8.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-5 col-lg-5">
                                        <div class="single-product-info">
                                            <h1>Sit voluptatem</h1>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <span class="price">
                                                <del>$ 77.00</del> $ 66.00
                                            </span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            <div class="box-quantity d-flex">
                                                <form action="#">
                                                    <input class="quantity mr-40" min="1" value="1" type="number">
                                                </form>
                                                <a class="add-cart" href="cart.html">add to cart</a>
                                            </div>
                                            <div class="wishlist-compear-area">
                                                <a href="wishlist.html"><i class="ion-ios-heart-outline"></i> Add to Wishlist</a>
                                                <a href="#"><i class="ion-ios-loop-strong"></i> Compare</a>
                                            </div>
                                            <div class="product_meta">
                                                <span class="posted_in">Categories: <a href="#" rel="tag">Accessories</a>, <a href="#" rel="tag">Clothings</a></span>
                                            </div>
                                            <div class="single-product-sharing">
                                                <div class="widget widget_socialsharing_widget">
                                                    <h3 class="widget-title">Share this product</h3>
                                                    <ul class="social-icons">
                                                        <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                        <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single product area end -->
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- END Modal -->
</div>
<!-- QUICKVIEW PRODUCT END -->
<!-- </div> -->
<!-- Body main wrapper end -->
@endsection

@section('scripts')

@endsection