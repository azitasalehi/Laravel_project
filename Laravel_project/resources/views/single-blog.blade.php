@php use Morilog\Jalali\Jalalian; @endphp
@php use Illuminate\Support\Str; @endphp
@extends('_Master.main')

@section('extra_link')
    <link href="{{asset('assets/css/nouislider.min.css')}}" rel="stylesheet"/>
@endsection

@section('main')
    <main class="cart-page default ">
        <div class="container">
            <div class="row">
                <div class="single_blog_content col-12 col-lg-9 mx-auto order-1 order-sm-1 ">
                    <header class="card-header">
                        <h3 class="card-title"><span>{{$mag['title']}}</span></h3>
                    </header>
                    <div class="single_blog_page">
                        <div class="single_blog_box_content">
                            <form class="form-account">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <img src="{{asset($mag['image'])}}"/>
                                        <div class="data_det">
                                                <span class="publish_date">
                                                    <i class="fa fa-clock"></i>
                                                   {{$date = Jalalian::forge($mag['created_at'])->format(' %d %B %Y')}}
                                                </span>
                                            <span class="author">
                                                    <i class="fa fa-user-alt"></i>
                                                    نویسنده<a href=""> {{$mag->user->name}}</a></span>
                                            <span class="categoey">
                                                    <i class="fa fa-folder"></i>
                                                    <a href="{{route('cat',['id'=>$mag['mag_category_id'],'slug'=>$mag['slug']])}}"
                                                       rel="category tag">{{$mag->mag_category->title}}</a>
                                                </span>
                                            <span class="visitors">
                                                    <i class="fa fa-eye"></i> {{$mag->view}} بازدید
                                                </span>
                                        </div>
                                        <p class="p-5">{{$mag['body']}}</p>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">

                    <div class="sidebar_blog">
                        <div class="widget_blog">
                            <div class="widget_blog_headbox">
                                <h3> دسته بندی ها </h3>
                            </div>
                            <div class="blog_list_widget_blog">
                                <div class="widget_blog_groups">
                                    <ul class="widget_blog_posts">
                                        @foreach($_mag_cats as $mag_cat)
                                            <li><a class="widget_blog_title_link"
                                                   href="{{route('cat',['id'=>$mag_cat['id'],'slug'=>$mag_cat['slug']])}}">{{$mag_cat['title']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div><!-- end blog-list -->
                        </div>
                        <div class="widget_blog marg_top20">
                            <div class="widget_blog_headbox">
                                <h3>آخرین مقالات </h3>
                            </div>
                            <div class="blog_list_widget_blog">
                                <div class="widget_blog_groups">
                                    <ul class="widget_blog_posts">
                                        @foreach($_magazines as $magazine)
                                            <li><a class="widget_blog_title_link"
                                                   href="{{route('single_blog',['slug'=>$magazine['slug']])}}">{{Str::limit($magazine['title'],70)}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div><!-- end blog-list -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
