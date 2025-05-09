@extends('_Master.main')
@section('main')
    <main class="main default space-top-10">
        <div class="container-fluid">
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 mx-auto">
                <div class="listing default">
                    <div class="listing-header default marg_all0">
                        <ul class="Search_list nav nav-tabs " role="tablist">
                            <li>
                                <a href="{{route('most_visited')}}">پربازدیدترین</a>
                            </li>
                            <li>
                                <a href="{{route('newest')}}">جدیدترین</a>
                            </li>
                            <li>
                                <a href="{{route('price')}}">‌براساس قیمت</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content default text-center">
                        <div class="tab-pane active" id="suggestion" role="tabpanel" aria-expanded="true">
                            <div class="row listing-items">
                                @foreach($products as $product)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 list_search_p ">
                                        <div class="product-box">
                                            <div class="product-seller-details product-seller-details-item-grid">
                                            <span class="search_prod_btn">
                                                           <a
                                                               href="{{route('add_to_cart',['slug'=>$product['slug']])}}"><i
                                                                   class="fa fa fa-cart-arrow-down search_icon_cart"
                                                                   aria-hidden="true"></i></a>
                                                        </span>
                                            </div>
                                            <a class="product-box-img"
                                               href="{{route('single_product',['slug'=>$product['slug']])}}">
                                                <img src="{{asset($product['image'])}}" alt="">
                                            </a>
                                            <div class="product-box-content">
                                                <div class="product-box-content-row">
                                                    <div class="product_title">
                                                        <a href="#">{{$product['title']}}
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-box-row product_price_search">
                                                    <div class="price">
                                                        <del><span>{{$product['old_price']}}<span>تومان</span></span>
                                                        </del>
                                                        <span class="discount_badge">{{$product['discount']}}</span>
                                                        <ins><span>{{$product['new_price']}}<span>تومان</span></span>
                                                        </ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="tab-pane" id="most-visited" role="tabpanel" aria-expanded="false">
                            <div class="row listing-items">
                                @foreach($products as $product)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 list_search_p ">
                                        <div class="product-box">
                                            <div class="product-seller-details product-seller-details-item-grid">
                                                        <span class="search_prod_icon">
                                                            <i class="fa fa-search search_icon_search"
                                                               aria-hidden="true"></i>
                                                            <i class="fa fa-heart search_icon_like"
                                                               aria-hidden="true"></i>
                                                        </span>


                                                <span class="search_prod_btn">
                                                            <i class="fa fa fa-cart-arrow-down search_icon_cart"
                                                               aria-hidden="true"></i>
                                                        </span>
                                            </div>
                                            <a class="product-box-img"
                                               href="{{route('single_product',['slug'=>$product['slug']])}}">
                                                <img src="{{asset($product['image'])}}" alt="">
                                                <ul>
                                                    <li class="color_pro"
                                                        style="background-color: #2fabd3;top: 7px;"></li>
                                                    <li class="color_pro"
                                                        style="background-color: #4e1dac;top: 20px;"></li>
                                                    <li class="color_pro"
                                                        style="background-color: #ff0075;top: 33px;"></li>
                                                </ul>
                                            </a>
                                            <div class="product-box-content">
                                                <div class="product-box-content-row">
                                                    <div class="product_title">
                                                        <a href="#">{{$product['title']}}
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-box-row product_price_search">
                                                    <div class="price">
                                                        <del><span>{{$product['old_price']}}<span>تومان</span></span>
                                                        </del>
                                                        <span class="discount_badge">{{$product['discount']}}</span>
                                                        <ins><span>{{$product['new_price']}}<span>تومان</span></span>
                                                        </ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="delivery" role="tabpanel" aria-expanded="false">
                            <div class="row listing-items">
                                @foreach($products as $product)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 list_search_p ">
                                        <div class="product-box">
                                            <div class="product-seller-details product-seller-details-item-grid">
                                                        <span class="search_prod_icon">
                                                            <i class="fa fa-search search_icon_search"
                                                               aria-hidden="true"></i>
                                                            <i class="fa fa-heart search_icon_like"
                                                               aria-hidden="true"></i>
                                                        </span>


                                                <span class="search_prod_btn">
                                                            <i class="fa fa fa-cart-arrow-down search_icon_cart"
                                                               aria-hidden="true"></i>
                                                        </span>
                                            </div>
                                            <a class="product-box-img"
                                               href="{{route('single_product',['slug'=>$product['slug']])}}">
                                                <img src="{{asset($product['image'])}}" alt="">
                                                <ul>
                                                    <li class="color_pro"
                                                        style="background-color: #2fabd3;top: 7px;"></li>
                                                    <li class="color_pro"
                                                        style="background-color: #4e1dac;top: 20px;"></li>
                                                    <li class="color_pro"
                                                        style="background-color: #ff0075;top: 33px;"></li>
                                                </ul>
                                            </a>
                                            <div class="product-box-content">
                                                <div class="product-box-content-row">
                                                    <div class="product_title">
                                                        <a href="#">{{$product['title']}}
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-box-row product_price_search">
                                                    <div class="price">
                                                        <del><span>{{$product['old_price']}}<span>تومان</span></span>
                                                        </del>
                                                        <span class="discount_badge">{{$product['discount']}}</span>
                                                        <ins><span>{{$product['new_price']}}<span>تومان</span></span>
                                                        </ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="most-seller" role="tabpanel" aria-expanded="false">
                            <div class="row listing-items">
                                @foreach($products as $product)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 list_search_p ">
                                        <div class="product-box">
                                            <div class="product-seller-details product-seller-details-item-grid">
                                                        <span class="search_prod_icon">
                                                            <i class="fa fa-search search_icon_search"
                                                               aria-hidden="true"></i>
                                                            <i class="fa fa-heart search_icon_like"
                                                               aria-hidden="true"></i>
                                                        </span>


                                                <span class="search_prod_btn">
                                                            <i class="fa fa fa-cart-arrow-down search_icon_cart"
                                                               aria-hidden="true"></i>
                                                        </span>
                                            </div>
                                            <a class="product-box-img"
                                               href="{{route('single_product',['slug'=>$product['slug']])}}">
                                                <img src="{{asset($product['image'])}}" alt="">
                                                <ul>
                                                    <li class="color_pro"
                                                        style="background-color: #2fabd3;top: 7px;"></li>
                                                    <li class="color_pro"
                                                        style="background-color: #4e1dac;top: 20px;"></li>
                                                    <li class="color_pro"
                                                        style="background-color: #ff0075;top: 33px;"></li>
                                                </ul>
                                            </a>
                                            <div class="product-box-content">
                                                <div class="product-box-content-row">
                                                    <div class="product_title">
                                                        <a href="#">{{$product['title']}}
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-box-row product_price_search">
                                                    <div class="price">
                                                        <del><span>{{$product['old_price']}}<span>تومان</span></span>
                                                        </del>
                                                        <span class="discount_badge">{{$product['discount']}}</span>
                                                        <ins><span>{{$product['new_price']}}<span>تومان</span></span>
                                                        </ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="price" role="tabpanel" aria-expanded="false">
                            <div class="row listing-items">
                                @foreach($products as $product)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 list_search_p ">
                                        <div class="product-box">
                                            <div class="product-seller-details product-seller-details-item-grid">
                                                        <span class="search_prod_icon">
                                                            <i class="fa fa-search search_icon_search"
                                                               aria-hidden="true"></i>
                                                            <i class="fa fa-heart search_icon_like"
                                                               aria-hidden="true"></i>
                                                        </span>


                                                <span class="search_prod_btn">
                                                            <i class="fa fa fa-cart-arrow-down search_icon_cart"
                                                               aria-hidden="true"></i>
                                                        </span>
                                            </div>
                                            <a class="product-box-img"
                                               href="{{route('single_product',['slug'=>$product['slug']])}}">
                                                <img src="{{asset($product['image'])}}" alt="">
                                                <ul>
                                                    <li class="color_pro"
                                                        style="background-color: #2fabd3;top: 7px;"></li>
                                                    <li class="color_pro"
                                                        style="background-color: #4e1dac;top: 20px;"></li>
                                                    <li class="color_pro"
                                                        style="background-color: #ff0075;top: 33px;"></li>
                                                </ul>
                                            </a>
                                            <div class="product-box-content">
                                                <div class="product-box-content-row">
                                                    <div class="product_title">
                                                        <a href="#">{{$product['title']}}
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-box-row product_price_search">
                                                    <div class="price">
                                                        <del><span>{{$product['old_price']}}<span>تومان</span></span>
                                                        </del>
                                                        <span class="discount_badge">{{$product['discount']}}</span>
                                                        <ins><span>{{$product['new_price']}}<span>تومان</span></span>
                                                        </ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
