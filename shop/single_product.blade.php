{{--{{$title==$product->name}}--}}

@extends('layouts.app')
@section('title',$product->name)
@section('content')
    <meta name="csrf-token" content="{{csrf_token()}}">

<div class="page-content-wrapper sp-y">
    <div class="product-details-page-content">
        <div class="container container-wide">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- Start Product Thumbnail Area -->
                        <div class="col-md-5">
                            <div class="product-thumb-area">
                                <div class="product-details-thumbnail">
                                    <div class="product-thumbnail-slider" id="thumb-gallery">
                                        <figure class="pro-thumb-item" data-mfp-src="{{$product->img_big_pish}}">
                                            <img src="{{$product->img_big_pish}}" id="productImage" alt="Product Details" />
                                        </figure>
                                    </div>

                                    <a href="#thumb-gallery" class="btn-large-view btn-gallery-popup">Открыть <i class="fa fa-search-plus"></i></a>
                                </div>

                                <div class="product-details-thumbnail-nav">
                                    <figure class="pro-thumb-item">
                                        <img src="{{$product->img_small}}" alt="Product Details" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Thumbnail Area -->

                        <!-- Start Product Info Area -->
                        <div class="col-md-7">
                            <div class="product-details-info-content-wrap">
                                <div class="prod-details-info-content">
                                    <span hidden id="pr_id">{{$product->id}}</span>
                                    <h2 id="name">{{$product->name}}</h2>
                                    <h5 class="price" ><strong>Цена:</strong> <span class="price-amount" id="price-amount">{{$product->price}}<span>₽</span></span>
                                    </h5>
                                    <div class="product-action">
                                        <div class="action-top d-sm-flex">
                                            <div class="pro-qty mr-3 mb-4 mb-sm-0">
                                                <label for="quantity" class="sr-only">Количество</label>
                                                <input type="text" id="quantity" title="Количество" name="quantity" value="1" />
                                            </div>
                                            <button class="btn btn-bordered" id="addToCart">В корзину</button>
                                        </div>
                                    </div>
                                    <div class="product-config">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th class="config-label">Характеристика</th>
                                                    <th class="config-label">Значение</th>
                                                </tr>
                                                @foreach($attributes as $attribute)
                                                <tr>
                                                    <td class="config-option">
                                                        {{ucfirst(str_replace("_"," ",$attribute))}}
                                                    </td>
                                                    <td class="config-option">
                                                        @if(isset($product->$attribute))
                                                            @if($attribute=="brand")
                                                                <a href="{{$product->brand->id}}">{{$product->brand->name}}</a>
                                                            @else
                                                                {{$product->$attribute}}
                                                            @endif
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>

                                    <div class="product-meta">
                                        <span class="tagged_as">Тэги:
                                            <a href="#">Seller,</a>
                                            <a href="#">Modern,</a>
                                            <a href="#">Parts</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Info Area -->
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js_cart_script')
    <script>
        $(document).ready(function(){
            $("#addToCart").click(function(event){
                event.preventDefault();
                addToCart();
                var totalCount = parseInt($(".cart-total").text());
                totalCount += parseInt($("#quantity").val());
                $(".cart-total").text(totalCount);

            });
            $(".btn-add-to-cart").click(function(event){
                event.preventDefault();
                addToCart();
                var totalCount = parseInt($(".cart-total").text());
                totalCount += parseInt($("#quantity").val());
                $(".cart-total").text(totalCount);

            });

        });


        function addToCart(){
            $.ajax({
                url:"{{route('addToCart')}}",
                type:"POST",
                data:{
                    'id': parseInt($("#pr_id").text()),
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

