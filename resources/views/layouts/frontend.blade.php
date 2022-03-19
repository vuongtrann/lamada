<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lamada || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--load app.css here-->
    <script src="{{ asset('css/app.css') }}" defer></script>
    <!-- Favicon -->
    @yield('styles')
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icons/icon_logo.png">
    <!-- Place favicon.ico in the root directory -->
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/css-plugins-call.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    
</head>

<body>


    <!--CONTENT HERE-->
    <div id="app">
        <!-- [if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif] -->

        <!-- Add your site or application content here -->

        <!-- Body main wrapper start -->
        <div class="wrapper home-one">
            <!-- HEADER AREA START -->
            <!-- <header class="header-area"> -->
            <!-- Header top area start -->
            <!-- <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="top-bar-left"> -->
            <!-- welcome -->
            <!-- <div class="welcome">
                                        <p>England's Fastest Online Shopping Destination</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="topbar-nav">
                                    <div class="wpb_wrapper"> -->
            <!-- my account -->
            <!-- <div class="menu-my-account-container">
                                            <a href="#">My Account <i class="ion-ios-arrow-down"></i></a>
                                            <ul>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </div>
                                        <div class="switcher"> -->
            <!-- language-menu -->
            <!-- <div class="language">
                                                <a href="#">
                                                    <img src="assets/images/icons/en.png" alt="language-selector">English
                                                    <i class="ion-ios-arrow-down"></i>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/icons/fr.png" alt="French">
                                                            <span>French</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> -->
            <!-- currency-menu -->
            <!-- <div class="currency">
                                                <a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                                <ul>
                                                    <li><a href="#">€ EUR</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- Top bar area end -->
            <!-- Header middle area start -->
            <div class="header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-md-12">
                            <!-- site-logo -->
                            <div class="site-logo">
                                <a href='/'><img src="assets/images/logo/logo.png" alt="Nikado" style="height:70px; width:150px; margin-left:30px;"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <!-- header-search -->
                            <div class="header-search clearfix">
                                <div class="category-select pull-right">
                                    <select class="nice-select-menu">
                                        <option data-display="All Categories">All Categories</option>
                                        <option value="1">Decor & Furniture</option>
                                        <option value="2">Electronics</option>
                                        <option value="3">Fashion & clothings</option>
                                        <option value="4" disabled="">Sport & Outdoors</option>
                                        <option value="5">Toy, Kids & Baby</option>
                                    </select>
                                </div>
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Search product...">
                                        <input type="submit" name="submit" value="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <!-- shop-cart-menu -->
                            <div class="shop-cart-menu pull-right" style="color: white; font-size: 15;">



                                @if (Route::has('login'))

                                @auth
                               <cart />
                              
                                @else
                                <span>
                                    <a href="{{ route('login') }}" class="" style="color: white;font-size :medium;">Log in</a>
                                </span>
                                <br>
                                @if (Route::has('register'))
                                <span>
                                    <a href="{{ route('register') }}" style="color: white;font-size :medium;">Register</a>
                                </span>
                                @endif
                                
                                @endauth

                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header middle area end -->
            <!-- Header bottom area start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 hidden-md hidden-sm pull-left category-wrapper">
                            <div class="categori-menu">
                                <!-- <span class="categorie-title">Categories</span>
                                <nav>
                                    <ul class="categori-menu-list menu-hidden">
                                        <li><a href="shop.html"><span><img src="assets/images/icons/1.png" alt="menu-icon"></span>Electronics<i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                                            <!-- categori Mega-Menu Start -->
                                            <!-- <ul class="ht-dropdown megamenu first-megamenu"> -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Cameras</li>
                                                        <li><a href="shop.html">Cords and Cables</a></li>
                                                        <li><a href="shop.html">gps accessories</a></li>
                                                        <li><a href="shop.html">Microphones</a></li>
                                                        <li><a href="shop.html">Wireless Transmitters</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Digital Cameras</li>
                                                        <li><a href="shop.html">Camera one</a></li>
                                                        <li><a href="shop.html">Camera two</a></li>
                                                        <li><a href="shop.html">Camera three</a></li>
                                                        <li><a href="shop.html">Camera four</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Digital Cameras</li>
                                                        <li><a href="shop.html">Camera one</a></li>
                                                        <li><a href="shop.html">Camera two</a></li>
                                                        <li><a href="shop.html">Camera three</a></li>
                                                        <li><a href="shop.html">Camera four</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                            <!-- </ul> -->
                                            <!-- categori Mega-Menu End -->
                                        <!-- </li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/2.png" alt="menu-icon"></span>Fashion<i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                                            <!-- categori Mega-Menu Start -->
                                            <!-- <ul class="ht-dropdown megamenu megamenu-two"> -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Men’s Fashion</li>
                                                        <li><a href="shop.html">Blazers</a></li>
                                                        <li><a href="shop.html">Boots</a></li>
                                                        <li><a href="shop.html">pants</a></li>
                                                        <li><a href="shop.html">Tops & Tees</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Women’s Fashion</li>
                                                        <li><a href="shop.html">Bags</a></li>
                                                        <li><a href="shop.html">Bottoms</a></li>
                                                        <li><a href="shop.html">Shirts</a></li>
                                                        <li><a href="shop.html">Tailored</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                            <!-- </ul> -->
                                            <!-- categori Mega-Menu End -->
                                        <!-- </li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/3.png" alt="menu-icon"></span>Home & Kitchen<i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                                            <!-- categori Mega-Menu Start -->
                                            <!-- <ul class="ht-dropdown megamenu megamenu-two"> -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Large Appliances</li>
                                                        <li><a href="shop.html">Armchairs</a></li>
                                                        <li><a href="shop.html">Bunk Bed</a></li>
                                                        <li><a href="shop.html">Mattress</a></li>
                                                        <li><a href="shop.html">Sideboard</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Small Appliances</li>
                                                        <li><a href="shop.html">Bootees Bags</a></li>
                                                        <li><a href="shop.html">Jackets</a></li>
                                                        <li><a href="shop.html">Shelf</a></li>
                                                        <li><a href="shop.html">Shoes</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                            <!-- </ul> -->
                                            <!-- categori Mega-Menu End -->
                                        <!-- </li> -->
                                        <!-- <li><a href="shop.html"><span><img src="assets/images/icons/4.png" alt="menu-icon"></span>Phones & Tablets<i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a> -->
                                            <!-- categori Mega-Menu Start -->
                                            <!-- <ul class="ht-dropdown megamenu megamenu-two"> -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Tablet</li>
                                                        <li><a href="shop.html">tablet one</a></li>
                                                        <li><a href="shop.html">tablet two</a></li>
                                                        <li><a href="shop.html">tablet three</a></li>
                                                        <li><a href="shop.html">tablet four</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Smartphone</li>
                                                        <li><a href="shop.html">phone one</a></li>
                                                        <li><a href="shop.html">phone two</a></li>
                                                        <li><a href="shop.html">phone three</a></li>
                                                        <li><a href="shop.html">phone four</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                            <!-- </ul> -->
                                            <!-- categori Mega-Menu End -->
                                        <!-- </li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/5.png" alt="menu-icon"></span>TV & Video<i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                                            <!-- categori Mega-Menu Start -->
                                            <!-- <ul class="ht-dropdown megamenu megamenu-two"> -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Gaming Desktops</li>
                                                        <li><a href="shop.html">Alpha Desktop</a></li>
                                                        <li><a href="shop.html">rober Desktop</a></li>
                                                        <li><a href="shop.html">Ultra Desktop </a></li>
                                                        <li><a href="shop.html">beta desktop</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                                <!-- Single Column Start -->
                                                <!-- <li class="single-megamenu">
                                                    <ul>
                                                        <li class="menu-tile">Women’s Fashion</li>
                                                        <li><a href="shop.html">3D-Capable</a></li>
                                                        <li><a href="shop.html">Clearance</a></li>
                                                        <li><a href="shop.html">Free Shipping Eligible</a></li>
                                                        <li><a href="shop.html">On Sale</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- Single Column End -->
                                            <!-- </ul> -->
                                            <!-- categori Mega-Menu End -->
                                        <!-- </li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/6.png" alt="menu-icon"></span>Beauty</a>
                                        </li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/7.png" alt="menu-icon"></span>Sport & tourism</a>
                                        </li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/8.png" alt="menu-icon"></span>Fruits & Veggies</a></li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/9.png" alt="menu-icon"></span>Computer & Laptop</a></li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/10.png" alt="menu-icon"></span>Meat & Seafood</a></li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/12.png" alt="menu-icon"></span>Samsung</a></li>
                                        <li><a href="shop.html"><span><img src="assets/images/icons/11.png" alt="menu-icon"></span>Sanyo</a></li>
                                    </ul>
                                </nav> -->
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <!-- main-menu -->
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="current"><a href='/'>Home</a>
                                            <!-- <ul class="submenu">
                                                <li><a href="index.html">Home Shop 1</a></li>
                                                <li><a href="index-2.html">Home Shop 2</a></li>
                                                <li><a href="index-3.html">Home Shop 3</a></li>
                                                <li><a href="index-4.html">Home Shop 4</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="/allProduct">PRODUCT</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                        <li><a href="#">Features <i class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu-3-column">
                                                <li><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="service.html">Services</a></li>
                                                        <li><a href="portfolio.html">Portfolio</a></li>
                                                        <li><a href="faq.html">Frequently Questins</a></li>
                                                        <li><a href="404.html">Error 404</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Blog</a>
                                                    <ul>
                                                        <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                                        <li><a href="blog.html">Sidebar right</a></li>
                                                        <li><a href="single-blog.html">Image Format</a></li>
                                                        <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                                        <li><a href="single-blog-audio.html">Audio Format</a></li>
                                                        <li><a href="single-blog-video.html">Video Format</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-list.html">Shop List View</a></li>
                                                        <li><a href="shop-right.html">Shop Right</a></li>
                                                        <li><a href="single-product.html">Shop Single</a></li>
                                                        <li><a href="cart.html">Shoping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu-area">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="#">HOME</a>
                                                <!-- <ul>
                                                    <li><a href="index.html">Home Shop 1</a></li>
                                                    <li><a href="index-2.html">Home Shop 2</a></li>
                                                    <li><a href="index-3.html">Home Shop 3</a></li>
                                                    <li><a href="index-4.html">Home Shop 4</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href='layout.allproduct'>PRODUCT</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                            <li><a href="#">Features</a>
                                                <ul>
                                                    <li><a href="#">Pages</a>
                                                        <ul>
                                                            <li><a href="about-us.html">About Us</a></li>
                                                            <li><a href="service.html">Services</a></li>
                                                            <li><a href="service-2.html">Services Two</a></li>
                                                            <li><a href="portfolio.html">Portfolio</a></li>
                                                            <li><a href="faq.html">Frequently Questins</a></li>
                                                            <li><a href="404.html">Error 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Blog</a>
                                                        <ul>
                                                            <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                                            <li><a href="blog.html">Sidebar right</a></li>
                                                            <li><a href="single-blog.html">Image Format</a></li>
                                                            <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                                            <li><a href="single-blog-audio.html">Audio Format</a></li>
                                                            <li><a href="single-blog-video.html">Video Format</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="shop-list.html">Shop List View</a></li>
                                                            <li><a href="shop-right.html">Shop Right</a></li>
                                                            <li><a href="single-product.html">Shop Single</a></li>
                                                            <li><a href="cart.html">Shoping Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header bottom area end -->
            <!-- </header> -->
            @yield('contents')
    </div>
    </div>

        <!--END CONTENT HERE-->

        <!--Load js here-->
        <script src="{{ asset('js/app.js') }}"></script>


        <!-- jQuery CDN -->

        <script src="assets/js/jquery-1.12.4.min.js"></script>

        <!-- jQuery Local -->


        <!-- Popper min js -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap min js  -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- nivo slider pack js  -->
        <script src="assets/js/jquery.nivo.slider.pack.js"></script>
        <!-- All plugins here -->
        <script src="assets/js/plugins.js"></script>
        <!-- Main js  -->
        <script src="assets/js/main.js"></script>



        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview')
        </script>
        <script src="../../analytics.js" async="" defer=""></script>
        @yield('scripts')
        <script>
            window.onbeforeunload =function(){
                window.scrollTo(0,0); 
            }
        </script>
</body>

</html>