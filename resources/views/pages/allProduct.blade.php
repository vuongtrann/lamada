@extends('layouts.frontend')
@section('styles')
@endsection
@section('contents')
<
<!-- Policy area end -->
<!-- Deals Of The Day -->

<!-- Deals Of The Day -->
<!-- Home fullwidth banner -->

<!-- Home fullwidth banner end -->
<!-- Best sellers -->
<div class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h3>New Product</h3>
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
                    <h3>All Product</h3>
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