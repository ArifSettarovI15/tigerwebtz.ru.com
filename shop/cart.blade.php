@extends('layouts.app')
@section('content')
    <div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content">
                        <div class="page-header-content-inner">
                            <h1>Корзина</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->

    <!--== Start Page Content Wrapper ==-->
    <div class="page-content-wrapper sp-y">
        <div class="cart-page-content-wrap">
            <div class="container container-wide">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="shopping-cart-list-area">
                            <div class="shopping-cart-table table-responsive">
                                <table class="table table-bordered text-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Название</th>
                                        <th>Цена</th>
                                        <th>Количество</th>
                                        <th>Итог</th>
                                    </tr>
                                    </thead>

                                    <tbody class="cartItems">
                                    @if(isset($_COOKIE['cart_id']))
                                        @foreach(\Cart::session($_COOKIE['cart_id'])->getContent() as $cartItem)
                                            <tr id="{{$cartItem->id}}">
                                                <td class="product-list" >
                                                    <div class="cart-product-item d-flex align-items-center">
                                                        <div class="remove-icon">
                                                            <button class="remove_from_cart" id="{{$cartItem->id}}" ><i class="fa fa-trash-o"></i></button>
                                                        </div>
                                                        <a href="{{route('shop.catalog.show',$cartItem->id)}}" class="product-thumb">
                                                            <img src="{{$cartItem->attributes->img}}" alt="Product" />
                                                        </a>
                                                        <a href="{{route('shop.catalog.show',$cartItem->id)}}" class="product-name">{{$cartItem->name}}</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="itemPrice" id="{{$cartItem->id}}Price">{{$cartItem->price}}</span>
                                                </td>
                                                <td>
                                                    <div class="pro-qty" id="{{$cartItem->id}}">
                                                        <input type="text" class="quantity" title="Quantity" id="{{$cartItem->id}}Count" value="{{$cartItem->quantity}}" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="totalPrice" id="{{$cartItem->id}}Total">{{$cartItem->price * $cartItem->quantity}}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="cart-coupon-update-area d-sm-flex justify-content-between align-items-center">
                                <div class="coupon-form-wrap">
                                    <form action="#" method="post">
                                        <label for="coupon" class="sr-only">Купон...</label>
                                        <input type="text" id="coupon" placeholder="Купон..." />
                                        <button class="btn-apply">Отправить</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Cart Calculate Area -->
                        <div class="cart-calculate-area mt-sm-40 mt-md-60">
                            <h5 class="cal-title">Общая стоимость</h5>

                            <div class="cart-cal-table table-responsive">
                                <table class="table table-borderless">
                                    <tr class="cart-sub-total">
                                        <th>Стоимость товаров</th>
                                        <td>$289.89</td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Доставка</th>
                                        <td>
                                            <ul class="shipping-method">
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="flat_shipping" name="shipping_method" class="custom-control-input" checked />
                                                        <label class="custom-control-label" for="flat_shipping">Быстрая доставка :
                                                            $10</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="free_shipping" name="shipping_method" class="custom-control-input" />
                                                        <label class="custom-control-label" for="free_shipping">Бесплатная доставка</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="cod_shipping" name="shipping_method" class="custom-control-input" />
                                                        <label class="custom-control-label" for="cod_shipping">Самовывоз</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Итого</th>
                                        <td><b>$299.93</b></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="proceed-checkout-btn">
                                <a href="checkout.html" class="btn btn-brand d-block">Перейти к оплате</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== End Page Content Wrapper ==-->
@endsection
@section("js_cart_script")
    <script>
        $(document).ready(function () {

            $(document).on('click','.remove_from_cart',function(){
                var ItemId = parseInt($(this).attr("id"));
                deleteFromCart(ItemId);
            });
            $(document).on('click','.pro-qty',function (){
                var Id = parseInt($(this).attr("id"));
                var Count = parseInt($('#'+Id+"Count").val());
                var Price = parseInt($('#'+Id+"Price").text());

                $('#'+Id+"Total").text(Price*Count);
            });
            function deleteFromCart(ItemId) {
                $.ajax(
                    {
                        url: "{{route('deleteFromCart')}}",
                        type:"POST",
                        data:{
                            '_token': "{{csrf_token()}}",
                            'id': ItemId,
                        },
                        headers:{
                            "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content'),
                        },
                        success:(data)=>{
                            console.log(data["id"]);
                            $("#"+data["id"]).remove()
                        }}
                ) ;

            }

        });



    </script>
@endsection
