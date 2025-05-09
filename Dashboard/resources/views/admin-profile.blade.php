@extends('_Master.admin_main')
@section('extra-style')

@endsection
@section('main_content')
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5>{{$admin['name']}} خوش آمدید</h5>
                    <ul>
                        <li><a href="{{route('main')}}">ادمین</a></li>
                        <li>پروفایل ادمین</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-md-12">
                    <div class="vendor-sticky-bar">
                        <div class="col-xl-12">
                            <div class="cr-card">
                                <div class="cr-card-content">
                                    <div class="cr-vendor-block-img">
                                        <div class="cr-vendor-block-detail">
                                            <div class="profile-img">
                                                <img class="v-img"
                                                     src="{{Str::contains($admin['avatar'],'storage')? asset($admin['avatar']) : asset('assets/'.$admin['avatar'])}}"
                                                     alt="vendor image">
                                                <span class="tag-label online"></span>
                                            </div>
                                            <h5 class="name">{{$admin['name']}}</h5>
                                            <p>( {{$admin['email']}} )</p>
                                            <div class="cr-settings">
                                                <a href="{{route('profile-update')}}" class="cr-btn-primary m-r-10">ویرایش
                                                    پروفایل</a>
                                            </div>
                                        </div>
                                        <div class="cr-vendor-info">
                                            <ul>
                                                <li><span class="label">نام:</span> ؛ {{$admin['name']}}</li>
                                                <li><span class="label">شرکت:</span> شرکت مسای شاپ</li>
                                                <li><span
                                                        class="label">نام کاربری اینترنتی:</span> {{$admin['user_name']}}
                                                </li>
                                                <li><span class="label">محل:</span> {{$admin['address']}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 col-md-12">

                    <div class="cr-card vendor-profile">
                        <div class="cr-card-content vendor-details mb-m-30">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>آدرس ایمیل</h6>
                                        <ul>
                                            <li><strong>ایمیل 1:</strong>support1{{$admin['email']}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>شماره تماس</h6>
                                        <ul>
                                            <li><strong>شماره تلفن 1:</strong>{{$admin['mobile']}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>نشانی</h6>
                                        <ul>
                                            <li>
                                                {{$admin['address']}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>حساب های بانکی</h6>
                                        <ul>
                                            <li><strong>نام کاربری :</strong>{{$admin['name']}}</li>
                                            <li><strong>شماره حساب :</strong>123**********80</li>
                                            <li><strong>کد :</strong>123**********80</li>
                                            <li><strong>نام بانک :</strong>Barky Central Bank</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="cr-vendor-detail">
                                        <h6>رسانه های اجتماعی</h6>
                                        <ul>
                                            <li><strong><i class="ri-instagram-line"> </i></strong><a
                                                    href="{{$admin['instagram']}}">{{$admin['instagram']}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
