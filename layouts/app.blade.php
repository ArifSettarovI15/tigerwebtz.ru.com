


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title','TIGERWEB_TZ')</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{asset("assets/img/favicon.ico")}}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CPoppins:400,400i,500,600&display=swap" rel="stylesheet">

    <!-- build:css assets/css/app.min.css -->
    <!--== Leaflet Min CSS ==-->
    <link href="{{asset("assets/css/leaflet.min.css")}}" rel="stylesheet" />
    <!--== Nice Select Min CSS ==-->
    <link href="{{asset("assets/css/nice-select.min.css")}}" rel="stylesheet" />
    <!--== Slick Slider Min CSS ==-->
    <link href="{{asset("assets/css/slick.min.css")}}" rel="stylesheet" />
    <!--== Magnific Popup Min CSS ==-->
    <link href="{{asset("assets/css/magnific-popup.min.css")}}" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{asset("assets/css/slicknav.min.css")}}" rel="stylesheet" />
    <!--== Animate Min CSS ==-->
    <link href="{{asset("assets/css/animate.min.css")}}" rel="stylesheet" />
    <!--== Ionicons Min CSS ==-->
    <link href="{{asset("assets/css/ionicons.min.css")}}" rel="stylesheet" />
    <!--== Font-Awesome Min CSS ==-->
    <link href="{{asset("assets/css/font-awesome.min.css")}}" rel="stylesheet" />
    <!--== Bootstrap Min CSS ==-->
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/mdb.lite.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/mdb.css")}}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet" />
    <!--== Helper Min CSS ==-->
    <link href="{{asset("assets/css/helper.min.css")}}" rel="stylesheet" />
    <script src="{{asset("assets/js/jquery-3.3.1.min.js")}}"></script>
    <!-- endbuild -->

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="header-area">

    <div class="container container-wide">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-2">
                <div class="site-logo text-center text-sm-left">
                    <a href="/"><img src="{{asset("assets/img/logo.png")}}" alt="Logo" /></a>
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <div class="site-navigation">
                    <ul class="main-menu nav">
                        <li class="has-submenu"><a href="{{url("/")}}">Главная</a></li>

                        <li class="has-submenu"><a href="{{route('shop.catalog.index')}}">КАТАЛОГ</a></li>
                        <li class="has-submenu"><a href="{{route('shop.blog')}}">БЛОГ</a></li>
                        <li><a href="{{route('shop.contact')}}">КОНТАКТЫ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-8 col-lg-3">
                <div class="site-action d-flex justify-content-center justify-content-sm-end align-items-center">
                    <ul class="login-reg-nav nav">
                        <li><a href="#">ВОЙТИ</a></li>
                        <li><a href="#">РЕГИСТРАЦИЯ</a></li>
                    </ul>

                    <div class="mini-cart-wrap">
                        <a href="{{route('shop.cart.index')}}" class="btn-mini-cart">
                            <i class="ion-bag"></i>

                            <span class="cart-total">@if(isset($_COOKIE["cart_id"])) {{\Cart::session($_COOKIE["cart_id"])->getTotalQuantity()}}
                                                        @else 0 @endif</span>
                        </a>

                        <div class="mini-cart-content">
                            @if(isset($_COOKIE["cart_id"]))
                            @foreach(\Cart::session($_COOKIE['cart_id'])->getContent() as $cartItem)

                            <div class="mini-cart-product">
                                <div class="mini-product">
                                    <div class="mini-product__thumb">
                                        <a href="single-product.html"><img src="{{$cartItem->attributes->img}}" alt="product" /></a>
                                    </div>
                                    <div class="mini-product__info">
                                        <h2 class="title"><a href="{{route('shop.catalog.show', $cartItem->id)}}">{{$cartItem->name}}</a></h2>

                                        <div class="mini-calculation">
                                            <p class="price">{{$cartItem->quantity }}x <span>{{$cartItem->price}}</span></p>
                                            <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                                @endif
                        </div>
                    </div>

                    <div class="responsive-menu d-lg-none">
                        <button class="btn-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')


<footer class="footer-area">
    <div class="footer-widget-area">
        <div class="container container-wide">
            <div class="row mtn-40">
                <div class="col-lg-3">
                    <div class="widget-item">
                        <div class="about-widget">
                            <a href="index.html"><img src="assets/img/logo-light.png" alt="Logo" /></a>
                            <p>Lukas - бесплатный шаблон который я взял для выполнения этого задания!</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="widget-item">
                        <h4 class="widget-title">Навигация</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="{{route('shop.index')}}">Главная</a></li>
                                <li><a href="{{route('shop.catalog.index')}}">Каталог</a></li>
                                <li><a href="{{route('shop.blog')}}">Блог</a></li>
                                <li><a href="{{route('shop.contact')}}">Контакты</a></li>
                                <li><a href="{{route('shop.cart.index')}}">Корзина</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="widget-item">
                        <h4 class="widget-title">Аккаунт</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="#">Вход</a></li>
                                <li><a href="#">Регистрация</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="copyright-content">
                        <p>Copyright © 2020 Arif. Для ознакомления.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--== End Footer Area Wrapper ==-->

<!-- Scroll Top Button -->
<button class="btn-scroll-top"><i class="ion-chevron-up"></i></button>


</div>

<!--== Start Responsive Menu Wrapper ==-->
<aside class="off-canvas-wrapper off-canvas-menu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content">
            <div class="off-canvas-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="close-btn">
                    <button class="btn-close"><i class="ion-android-close"></i></button>
                </div>
            </div>

            <!-- Content Auto Generate Form Main Menu Here -->
            <div class="res-mobile-menu mobile-menu">

            </div>
        </div>
    </div>
</aside>
<!--=======================Javascript============================-->
<!-- build:js assets/js/app.min.js -->
<!--=== Modernizr Min Js ===-->
<script src="{{asset("assets/js/modernizr-3.6.0.min.js")}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{asset("assets/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("assets/js/mdb.min.js")}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{asset("assets/js/jquery-migrate-1.2.1.min.js")}}"></script>
<!--=== Popper Min Js ===-->
<script src="{{asset("assets/js/popper.min.js")}}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<!--=== Slicknav Min Js ===-->
<script src="{{asset("assets/js/jquery.slicknav.min.js")}}"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="{{asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
<!--=== Slick Slider Min Js ===-->
<script src="{{asset("assets/js/slick.min.js")}}"></script>
<!--=== Nice Select Min Js ===-->
<script src="{{asset("assets/js/jquery.nice-select.min.js")}}"></script>
<!--=== Leaflet Min Js ===-->
<script src="{{asset("assets/js/leaflet.min.js")}}"></script>
<!--=== Countdown Js ===-->
<script src="{{asset("assets/js/countdown.js")}}"></script>

<!--=== Active Js ===-->
<script src="{{asset("assets/js/active.js")}}"></script>
<script src="{{asset("assets/js/mdb.min.js")}}"></script>

@yield('js_cart_script')
@yield('dataImportScript')
</body>
</html>
