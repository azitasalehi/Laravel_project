@php use Morilog\Jalali\Jalalian; @endphp
@php use Illuminate\Support\Str; @endphp

@extends('_Master.main')

@section('extra_link')
    <link href="{{asset('assets/css/nouislider.min.css')}}" rel="stylesheet"/>
@endsection

@section('main')
    <main class="category-blog default space-top-30">
        <div class="container ">

            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </li>

                            <li>
                                <a href="#"><span>بلاگ</span></a>
                            </li>
                            <li>
                                <a href="category-blog.html"><span>اخبار روز تکنولوژی</span></a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="single_blog_content cat_blog_content col-12 col-lg-9 mx-auto order-1 order-sm-1 ">
                    <div class="row listing-items Blog-category">
                        @foreach($magazines as  $magazine)
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12  ">
                                <div class="blog_tag">
                                    <a href="{{route('single_blog',['slug'=>$magazine['slug']])}}">
                                        <img src="{{asset($magazine['image'])}}" class="img-fluid" alt="">
                                    </a>
                                    <a href="{{route('single_blog',['slug'=>$magazine['slug']])}}">
                                        <h2 class="Blog_title">
                                            {{Str::limit($magazine['title'],80)}}</h2>
                                    </a>
                                    <div class="Blog_list">
                                        <span class="Blog_author">
                                            <i class="fa fa-user"></i>
                                            {{$magazine->user['name']}}
                                        </span>
                                        <span class="Blog_Date">
                                            <i class="fa fa-calendar "></i>
                                        {{$date=Jalalian::forge($magazine['created_at'])->format(' %d %B %Y')}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
                <div class="col-12 col-lg-3 ">

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
                                        @foreach($magazines as $magazine)
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
