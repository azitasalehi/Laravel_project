@php use Morilog\Jalali\Jalalian; @endphp
@extends('_Master.main')

@section('extra_link')
    <link href="{{asset('assets/css/plugins/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/main.css?1')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
@endsection
@section('style')
    <style>
        .invalid-feedback {
            display: block;
        !important;
        }
    </style>
@endsection

@section('main')
    <!-- main -->
    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </li>
                            <li>
                                <a href="category-search.html"><span>موبایل</span></a>
                            </li>
                            <li>
                                <a href="category-search.html"><span>برند ترین ها</span></a>
                            </li>
                            <li>
                                <a href="category-search.html"><span>اپل</span></a>
                            </li>
                            <li>
                                <span>{{$product['title']}} </span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <article class="product">
                        <div class="row product_main_details">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="product-gallery default">
                                    <img class="main_img_gallery" src="{{asset($product['image'])}}"/>
                                    <section class="testimonial py-3" id="testimonial">
                                        <div class="container">
                                            <div class="row gallery">
                                                <div class="col-4 col-md-3 pd"><a
                                                        href="{{asset($product['mini_image'])}}"
                                                        rel="prettyPhoto[gallery1]"><img
                                                            src="{{asset($product['mini_image'])}}" class="img-thumb"
                                                            alt="نمایشگر همیشه روشن"/></a></div>

                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <ul class="gallery-options">
                                    <li>
                                        <button class="add-favorites favorites2 favorites_heart"><i
                                                class="fa fa-heart"></i></button>
                                    </li>
                                    <li>
                                        <button class="favorites2" data-toggle="modal" data-target="#myModal"><i
                                                class="fa fa-share-alt"></i></button>
                                    </li>
                                </ul>
                                <!-- Modal Core -->
                                <div class="modal-share modal fade" id="myModal" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">به اشتراک گذاشتن</h4>
                                            </div>

                                            <div class="modal-footer">
                                                <form class="default">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>
                                                                برای کپی آدرس در کادر زیر دابل کلیک کنید
                                                            </p>
                                                            <p class="right-side-header shareurlvalue"
                                                               title="کپی بعد دوبار کلیک" id="text" onclick="copyElementText(this.id)">
                                                                http://www.mysite.com/single-product.html</p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Core -->
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 ">

                                <h2 class="product-title ">
                                    <a href="#"> {{$product['title']}} </a>
                                </h2>
                                <hr class="hr-text" data-content="{{$product['hr_tag']}}">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="list-group space-15">
                                            @php
                                                $items=explode(',',$product['list_group_item'])
                                            @endphp

                                            @foreach($items as $item)
                                                <li class="list-group-item">{{$item}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 product_main_pr">
                                        <div class="time_pr">
                                            <div class="row">
                                                <div class="col-12 upda">
                                                    <b>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>

                                                        زمان ارسال محصول :
                                                    </b>
                                                    از انبار مَسای کالا طی 2 روز کاری
                                                </div>

                                                <div class="col-12 col-lg-6 col-md-6">

                                                    <p>زمان باقی مانده </p>
                                                    <div class="countdown-timer" countdown=""
                                                         data-date="06 12 2023 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days="" class="number_countdown">35</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours="" class="number_countdown">8</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes="" class="number_countdown">1</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds="" class="number_countdown">35</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 border_left">
                                                    <div class="price space-15"><del><span>{{$product['old_price']}}<span>تومان</span></span></del><ins><span>{{$product['new_price']}}<span>تومان</span></span>
                                                        </ins>
                                                    </div>
                                                    <div class="col-12 timer-title text--center">

                                                        <a href="{{route('add_to_cart',['slug'=>$product['slug']])}}"
                                                           class="btn btn-main-masai big_btn">افزودن به سبد</a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="txt_note">
                                            <i class="fa fa-info" aria-hidden="true"></i>
                                            برای کالاهای گروه موبایل، امکان برگشت کالا به دلیل انصراف از خرید تنها در
                                            صورتی مورد قبول است که کالا بدون هیچگونه استفاده و با تمامی قطعات، متعلقات و
                                            بسته‌بندی‌های اولیه خود بازگردانده شود. لازم به ذکر است که برای هر کالای
                                            موبایل، ضمانت رجیستری صادر می‌شود. در صورت بروز اشکال در ضمانت رجیستری، پس
                                            از انقضای مدت ۳۰ روزه، کالا می‌تواند بازگردانده شود.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 default no-padding bg_single_product">
                        <div class="product-tabs default">
                            <div class="box-tabs default">
                                <ul class="nav" role="tablist">
                                    <li class="box-tabs-tab">
                                        <a class="active " data-toggle="tab" href="#desc" role="tab"
                                           aria-expanded="true">
                                            توضیحات تکمیلی
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#params" role="tab" aria-expanded="false">
                                            مشخصات محصول
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#comments" role="tab" aria-expanded="false">
                                            دیدگاه خریداران
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#comments_questions" role="tab"
                                           aria-expanded="false">
                                            پرسش و نظر
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-body default">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="desc" role="tabpanel" aria-expanded="true">

                                            <header class="card-header">
                                                <h3 class="card-title"><span>{{$product['desc_title']}}</span>
                                                </h3>
                                            </header>
                                            <div class="parent-expert default">
                                                <div class="content-expert"><p>{{$product["description"]}}</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="tab-pane params" id="params" role="tabpanel" aria-expanded="false">
                                            <header class="card-header">
                                                <h3 class="card-title"><span>{{$product['desc_title']}}</span>
                                                </h3>
                                            </header>

                                            <div class="col-12">
                                                <ul class="list-group space-15">
                                                    @php
                                                        $items=explode(',',$product['list_group_item'])
                                                    @endphp

                                                    @foreach($items as $item)
                                                        <li class="list-group-item">{{$item}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="comments" role="tabpanel" aria-expanded="false">
                                            <header class="card-header">
                                                <h3 class="card-title"><span>دیدگاه های کاربران({{count($product->comments) ?? 0}})</span>
                                                </h3>
                                            </header>
                                            <div class="comments_form default">
                                                <ol class="comment-list">
                                                    <!-- #comment-## -->
                                                    @if(isset($product->comments[0]))
                                                        @foreach($product->comments as $comment)
                                                            <li>
                                                                <div class="comment-body">
                                                                    <div class="comment-author">
                                                                        <img alt="" src="{{asset($comment['avatar'])}}"
                                                                             class="avatar"><span
                                                                            class="star4">4.3</span>
                                                                        <div class="text-h5">{{$comment['name']}}</div>
                                                                    </div>
                                                                    <p>{{$comment['text']}}</p>
                                                                    <ul class="commentul">
                                                                        <li>
                                                                            {{$date =Jalalian::forge($comment['created_at'])->format(' %d %B %Y')}}
                                                                        </li>
                                                                        <li>
                                                                            {{$comment->user->name ?? "Guest"}}
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ol>
                                            </div>
                                        </div>
                                        <div class="tab-pane form-comment" id="comments_questions" role="tabpanel"
                                             aria-expanded="false">
                                            <header class="card-header">
                                                <h3 class="card-title"><span>ارسال نظر و پرسش  </span></h3>
                                            </header>
                                            @if(session()->has('status'))
                                                <h3 class="card-title alert alert-success col-4">{{session()->get('status')}}</h3>
                                            @endif
                                            @guest
                                                <form method="POST"
                                                      action="{{ route('insert_comment',['slug'=>$product['slug']]) }}">
                                                    @csrf
                                                    <div class="row col-5 d-flex flex-column">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="form-account-title"><span>*</span> ایمیل</div>
                                                            <div class="form-account-row">
                                                                <input id="email" type="email"
                                                                       class="input_second input_all @error('email') is-invalid @enderror"
                                                                       name="email" value="{{ old('email') }}"
                                                                       autocomplete="email">
                                                            </div>
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>


                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="form-account-title"><span>*</span> کلمه عبور
                                                            </div>

                                                            <div class="form-account-row">
                                                                <input id="password" type="password"
                                                                       class="input_second input_all @error('password') is-invalid @enderror"
                                                                       name="password" autocomplete="new-password">
                                                            </div>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="form-account-title"><span>*</span> تکرار کلمه
                                                                عبور
                                                            </div>

                                                            <div class="form-account-row">
                                                                <input id="password-confirm" type="password"
                                                                       class="input_second input_all"
                                                                       name="password_confirmation"
                                                                       autocomplete="new-password">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-0">
                                                            <textarea name="comment" class="form-control"
                                                                      placeholder="متن نظر و پرسش"
                                                                      rows="3">{{old('comment')}}</textarea>
                                                            <button type="submit" class="btn btn-main-masai">ارسال برای
                                                                تایید
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                        </div>
                                        @else
                                            <form method="POST"
                                                  action="{{ route('insert_comment',['slug'=>$product['slug']]) }}">
                                                @csrf
                                                <textarea name="comment" class="form-control"
                                                          placeholder="متن نظر و پرسش"
                                                          rows="4">{{old('comment')}}</textarea>
                                                <button type="submit" class="btn btn-main-masai">ارسال برای تایید
                                                </button>
                                            </form>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-- main -->
@endsection

@section('extra_js')
    <!-- custom Js -->
    <script src="assets/js/main.js" type="text/javascript"></script>
    <!-- only single  -->
    <script src="assets/css/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script>
        function copyElementText(id) {
            var text = document.getElementById(id).innerText;
            var elem = document.createElement("textarea");
            document.body.appendChild(elem);
            elem.value = text;
            elem.select();
            document.execCommand("copy");
            document.body.removeChild(elem);
        }
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $("area[rel^='prettyPhoto']").prettyPhoto();

            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'normal',
                theme: 'light_square',
                slideshow: 3000,
                autoplay_slideshow: false
            });
            $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'fast',
                slideshow: 10000,
                hideflash: true
            });

        });
    </script>
@endsection
