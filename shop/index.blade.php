@extends("layouts.app")
@section("content")
<body>

<div class="site-wrapper boxed-layout">

    <!--== Start Slider Area Wrapper ==-->
    <div class="slider-area-wrapper">
        <div class="slider-content-active">
            <div class="slider-slide-item bg-img" data-bg="{{asset("assets/img/slider/slider-1.jpg")}}">
                <div class="container container-wide h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="slide-content">
                                <div class="slide-content-inner">
                                    <h3>СОЗДАННЫЕ ПО НОВОЙ ТЕХНОЛОГИИ</h3>
                                    <h2>ДИСКИ И ШИНЫ</h2>
                                    <a class="btn btn-white" href="{{route('shop.catalog.index')}}">ПОДРОБНЕЕ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-slide-item bg-img" data-bg="{{asset("assets/img/slider/slider-2.jpg")}}">
                <div class="container container-wide h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-12">
                            <div class="slide-content">
                                <div class="slide-content-inner">
                                    <h3>СОЗДАННЫЕ ПО НОВОЙ ТЕХНОЛОГИИ</h3>
                                    <h2>КОЛЛЕКЦИИ<br> ДИСКОВ И ШИН</h2>
                                    <a class="btn btn-white" href="{{route('shop.catalog.index')}}">ПОДРОБНЕЕ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Slider Area Wrapper ==-->

    <!--== Start Banner Area Wrapper ==-->
    <div class="banner-area-wrapper banner-mt mt-2">
        <div class="container container-wide">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="assets/img/banner/banner-1.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="assets/img/banner/banner-2.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="assets/img/banner/banner-3.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Banner Area Wrapper ==-->

    <!--== Start Call to Action Area ==-->
    <div class="call-to-action-area sm-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item mt-0">
                        <div class="call-to-action-item__icon">
                            <img src="assets/img/icons/icon-1.png" alt="fast delivery">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>ДОСТАВКА НА ДОМ</h3>
                            <p>Бесплатная доставка на дом
                                на весь товар свыше 100 $</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item">
                        <div class="call-to-action-item__icon">
                            <img src="assets/img/icons/icon-2.png" alt="quality">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Гарантия качества</h3>
                            <p>Лучшее качество во всей Европе</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item">
                        <div class="call-to-action-item__icon">
                            <img src="assets/img/icons/icon-3.png" alt="return">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Онлайн поддержка</h3>
                            <p>Наши специалисты всегда готовы ответить на ваши вопросы</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Call to Action Area ==-->

    <!--== Start Best Seller Products Area ==-->
    <div class="best-seller-products-area sm-top">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <div class="section-title">
                        <h2 class="h3">ЛИДЕРЫ ПРОДАЖ</h2>
                        <p>БЕСТСЕЛЛЕРЫ ПРОДУКЦИИ СОБРАНЫ ДЛЯ ВАС В ОДНОМ МЕСТЕ</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product-wrapper">
                        <div class="product-carousel">
                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-1.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-2.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-3.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-4.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Leather Steering Wheel</a></h4>
                                    <span class="price"><strong>Price:</strong> $615.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-4.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-5.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Hanging 4K Camera</a></h4>
                                    <span class="price"><strong>Price:</strong> $65.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">35%</span>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-2.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-1.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">17 inch Rims 8 Lug</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="assets/img/product/product-5.png" alt="Product" />
                                        <img class="thumb-secondary" src="assets/img/product/product-4.png" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="single-product.html">Locking Hub Diagram</a></h4>
                                    <span class="price"><strong>Price:</strong> $165.00</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">21%</span>
                                </div>
                            </div>
                            <!-- End Product Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Best Seller Products Area ==-->

    <!--== Start Call to action Wrapper ==-->
    <div class="call-to-action-area">
        <div class="call-to-action-content-area bg-img" data-bg="assets/img/bg/bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="call-to-action-txt">
                            <h2>ЛЮБЫЕ ТОВАРЫ МОЖНО НАЙТИ <br> ИМЕННО У НАС</h2>
                            <a href="{{route('shop.catalog.index')}}" class="btn btn-brand">КАТАЛОГ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action-image-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="assets/img/bg/bg-car.png" alt="Car" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Call to action Wrapper ==-->

    <!--== Start Promotion Code Banner Area ==-->
    <div class="promotion-code-area-wrapper sm-top">
        <div class="container container-wide">
            <div class="row">
                <div class="col-md-6">
                    <div class="promotion-code-banner-item mb-sm-30">
                        <img src="assets/img/banner/banner-5.jpg" alt="Banner" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="promotion-code-banner-item">
                        <img src="assets/img/banner/banner-6.jpg" alt="Banner" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Promotion Code Banner Area ==-->


    <!--== Start Newsletter Area ==-->
    <div class="newsletter-area-wrapper mt-1">
        <div class="container container-wide">
            <div class="newsletter-area-inner bg-img" data-bg="assets/img/bg/newsletter-bg.jpg">
                <div class="row">
                    <div class="col-lg-8 col-xl-5 m-auto">
                        <div class="newsletter-content text-center">
                            <h4>СПЕЦИАЛЬНЫЕ <span>ПРЕДЛОЖЕНИЯ</span> ДЛЯ ПАРТНЕРОВ</h4>
                            <h2>СТАНЬТЕ НАШИМ ДРУГОМ</h2>

                            <div class="newsletter-form-wrap">
                                <form action="#" method="post">
                                    <div class="form-content">
                                        <input type="email" placeholder="Введите ваш e-mail..." />
                                        <button class="btn-newsletter">ОТПРАВИТЬ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Newsletter Area ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="brand-logo-area sm-top sm-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-logo-content">
                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-1.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-2.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-3.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-4.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-5.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-3.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="assets/img/brand-logo/brand-1.png" alt="Logo" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Footer Area Wrapper ==-->


</body>
@endsection
