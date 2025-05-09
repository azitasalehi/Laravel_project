@php use Illuminate\Support\Str; @endphp
@php use Morilog\Jalali\Jalalian; @endphp
@extends('_Master.main')

@section('extra_link')
    <link href="{{asset('assets/css/nouislider.min.css')}}" rel="stylesheet"/>
@endsection
@section('style')
    <style>
        .single_blog_content {
            background-color: #ffffff; /* پس‌زمینه مقالات */
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
        }
    </style>
@endsection
@section('main')
    <main class="cart-page default ">
        <div class="container">
            <div class="container">
                <div class="row">
                    <!-- Sidebar - دسته‌بندی‌ها -->
                    <div class="col-12 col-lg-3 order-1 order-lg-1">
                        <div class="sidebar_blog ">
                            <div class="widget_blog">
                                <div class="widget_blog_headbox">
                                    <h3 class="p-2"> دسته بندی ها </h3>
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
                                    <h3 class="p-2">آخرین مقالات </h3>
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

                    <!-- مقالات -->
                    <div class="col-12 col-lg-8 order-2">
                        @foreach($magazines as $magazine)
                            <div class="single_blog_content mb-4">
                                <header class="card-header">
                                    <h3 class="card-title"><span>{{$magazine['title']}}</span></h3>
                                </header>
                                <div class="single_blog_page">
                                    <img src="{{asset($magazine['image'])}}" alt="Image" class="img-fluid"/>
                                    <div class="data_det mt-2">
                        <span class="publish_date">
                            <i class="fa fa-clock"></i>
                            {{ Jalalian::forge($magazine['created_at'])->format(' %d %B %Y') }}
                        </span>
                                        <span class="author">
                            <i class="fa fa-user-alt"></i>
                            نویسنده: {{$magazine->user->name}}
                        </span>
                                        <span class="category">
                            <i class="fa fa-folder"></i>
                            <a href="">{{$magazine->mag_category->title}}</a>
                        </span>
                                        <span class="visitors">
                            <i class="fa fa-eye"></i> {{$magazine['view']}} بازدید
                        </span>
                                    </div>
                                    <p class="p-3">{{$magazine['body']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
