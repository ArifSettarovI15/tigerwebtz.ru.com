@extends("layouts.app")
@section("content")
<body>


<!--== Start Page Header Area ==-->
<div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>КАТАЛОГ ТОВАРОВ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-content-wrapper sp-y">
    <div class="container container-wide">
        <div class="row">
            <div class="col-lg-3 order-1 order-lg-0">
                <div class="sidebar-area">
                    <form class="multi-range-field my-5 pb-5" method="GET" action="{{route('shop.catalog.index')}}">
                    <!--Фильтр по категории -->
                    <div class="sidebar-item">
                        <h4 class="sidebar-title">Категории</h4>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                @foreach($categories as $category)

                                    <li><input type="checkbox" name="{{$category->name}}" id="" @if(app('request')->input($category->name)) checked @endif>
                                        <label for="{{$category->name}}">   {{$category->name}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--Фильтр по цене -->
                    <div class="sidebar-item" style="height: 100px !important;">
                        <h4 class="sidebar-title">Цена</h4>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <li class="">
                                        <label for="priceUp">От</label>
                                        <input type="text" name="priceUp" style="width: 100px;" value="{{app('request')->input('priceUp')}}" />
                                        <label for="priceTo">    До</label>
                                        <input type="text" name="priceTo" style="width: 100px;" value="{{app('request')->input('priceTo')}}"/>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Фильтр по тэгу -->
                    <div class="sidebar-item">
                        <h4 class="sidebar-title">Метки</h4>
                        <div class="sidebar-body">
                            <ul class="tags">
                                @foreach($tags as $tag)
                                    <li><input type="checkbox" class="chk-btn btn-outline-danger" name="{{$tag->name}}" id="{{$tag->name}}" @if(app('request')->input($tag->name)) checked @endif>
                                        <label class="btn-outline-warning" for="{{$tag->name}}">{{$tag->name}}</label>
                                    </li>
                                @endforeach

                            </ul>

                        </div>
                    </div>
                    <button class="btn btn-brand waves-effect waves-light">Применить</button>
                        <a class="dark-grey-text ml-2" href="{{route('shop.catalog.index')}}">Сбросить</a>
                    </form>
                </div>

            </div>

            <div class="col-lg-9 order-0 order-lg-1">
                <div class="action-bar-inner mb-30">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="shop-layout-switcher mb-15 mb-sm-0">
                                <ul class="layout-switcher nav">
                                    <li data-layout="grid" class="active"><i class="fa fa-th"></i></li>
                                    <li data-layout="list"><i class="fa fa-th-list"></i></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="product-wrapper product-layout layout-grid">
                    <div class="row mtn-30">
                        <!-- Start Product Item -->
                        @foreach($catalog as $item)
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="{{route('shop.catalog.show', $item->id)}}">
                                        <img class="thumb-primary" src="{{$item->img_big_pish}}" style="width: 350px; height: 300px;" alt="Product" />
                                        <img class="thumb-secondary" src="{{$item->img_big_pish}}" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="{{route('shop.catalog.show', $item->id)}}">{{$item->name}}</a></h4>
                                        <span class="price"><strong>Цена:</strong> {{$item->price}}₽</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart" id="{{$item->id}}"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>

                                        <a href="{{route('shop.catalog.show', $item->id)}}" class="btn-add-to-cart" ><i class="ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->
                        @endforeach


                    </div>
                </div>

                <div class="action-bar-inner mt-30">
                    <div class="align-items-center">
                        <div class="row">
                            <div class="col-md-12">
                                {{$catalog->links('layouts.pagination_links')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->

</body>

@endsection
@section('js_cart_script')
    <script>
        $(document).ready(function(){
            sortCatalog();
            $(document).on('click','.btn-add-to-cart',function(event){
                event.preventDefault();
                var ItemId = parseInt($(this).attr("id"));
                addToCart(ItemId);
                var totalCount = parseInt($(".cart-total").text());
                totalCount += 1;
                $(".cart-total").text(totalCount);
            });
            $("#sort").change(function () {
                sortCatalog();
            });
        });
        function sortCatalog(){
            $.ajax({
                url:"{{route('shop.catalog.sort')}}",
                type:"POST",
                data:{
                    '_token':"{{csrf_token()}}",
                    'sortType': $("#sort").val(),
                },
                headers:{
                    "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content'),
                },
                success:(data)=>{
                    console.log(data)
                }
            });
        }

        function addToCart(ItemId){
            $.ajax({
                url:"{{route('addToCart')}}",
                type:"POST",
                data:{
                    '_token':"{{csrf_token()}}",
                    'id': ItemId,
                    'count': 1,

                },
                headers:{
                    "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content'),
                },
                success:(data)=>{
                    console.log(data)
                }
            });
        }
    </script>
@endsection
