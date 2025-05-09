<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="admin, dashboard, ecommerce, panel"/>
    <meta name="description" content="Carrot - Admin.">
    <meta name="author" content="ashishmaraviya">

    <title>پنل - ادمین</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/assets/img/favicon.png')}}">

    <!-- Icon CSS -->
    <link href="{{asset('assets/css/vendor/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/vendor/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/vendor/owl.carousel.min.css')}}" rel="stylesheet">
    {{---<--- Font Css --->--}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/fontawesome/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome/css/all.css')}}">
    <!-- Vendor CSS -->
    <link href='{{asset('assets/css/vendor/datatables.bootstrap5.min.css')}}' rel='stylesheet'>
    <link href='{{asset('assets/css/vendor/responsive.datatables.min.css')}}' rel='stylesheet'>
    <link href='{{asset('assets/css/vendor/daterangepicker.css')}}' rel='stylesheet'>
    <link href="{{asset('assets/css/vendor/simplebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/vendor/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/vendor/apexcharts.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/jquery/dist/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/sweetalert2/dist/sweetalert2.all.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('assets/js/sweetalert2/dist/sweetalert2.css')}}">
    <!-- Main CSS -->
    <link id="main-css" href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
<main class="wrapper sb-default ecom">
    <!-- Header -->
    <header class="cr-header">
        <div class="container-fluid">
            <div class="cr-header-items">
                <div class="left-header">
                    <a href="javascript:void(0)" class="cr-toggle-sidebar">
							<span class="outer-ring">
								<span class="inner-ring"></span>
							</span>
                    </a>
                </div>
                <div class="right-header">
                    <div class="cr-right-tool display-screen">
                        <a class="cr-screen full" href="javascript:void(0)"><i
                                class="ri-fullscreen-line"></i></a>
                        <a class="cr-screen reset" href="javascript:void(0)"><i
                                class="ri-fullscreen-exit-line"></i></a>
                    </div>
                    <div class="cr-right-tool cr-user-drop">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button style="border: none" type="submit"><i class="fa-solid fa-sign-out"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- sidebar -->
    <div class="cr-sidebar-overlay"></div>
    <div class="cr-sidebar" data-mode="light">
        <div class="cr-sb-logo">
            <a href="#" class="sb-full"><img src="{{asset('assets/assets/img/logo.png')}}" alt="logo"></a>
            <a href="#" class="sb-collapse"><img src="{{asset('assets/assets/img/logo.png')}}" alt="logo"></a>
        </div>
        <div class="cr-sb-wrapper">
            <div class="cr-sb-content">
                <ul class="cr-sb-list">
                    <li class="cr-sb-item sb-drop-item">
                        <a href="javascript:void(0)" class="cr-drop-toggle">
                            <i class="ri-dashboard-3-line"></i><span class="condense">داشبرد<i
                                    class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                        <ul class="cr-sb-drop condense">
                            <li><a href="{{route('products')}}" class="cr-page-link drop"><i
                                        class="ri-checkbox-blank-circle-line"></i>لیست محصولات</a></li>

                            <li><a href="{{route('add-product')}}" class="cr-page-link drop"><i
                                        class="ri-checkbox-blank-circle-line"></i>افزودن محصول</a></li>
                            <li><a href="{{route('add-category')}}" class="cr-page-link drop"><i
                                        class="ri-checkbox-blank-circle-line"></i> مدیریت دسته بندی ها</a></li>
                            <li class="cr-sb-item sb-subdrop-item">
                                <a href="javascript:void(0)" class="cr-sub-drop-toggle">
                                    <i class="ri-shield-user-line"></i><span class="condense">ادمین<i
                                            class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                                <ul class="cr-sb-subdrop condense">
                                    <li><a href="{{route('profile-admin')}}" class="cr-page-link subdrop"><i
                                                class="ri-checkbox-blank-circle-line"></i>پروفایل</a></li>
                                    <li><a href="{{route('profile-update')}}" class="cr-page-link subdrop"><i
                                                class="ri-checkbox-blank-circle-line"></i>آپدیت ادمین</a></li>
                                </ul>
                            </li>

                            <li class="cr-sb-item sb-subdrop-item">
                                <a href="javascript:void(0)" class="cr-sub-drop-toggle">
                                    <i class="fa-solid fa-user-friends"></i><span class="condense">کاربران<i
                                            class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                                <ul class="cr-sb-subdrop condense">
                                    <li><a href="{{route('users')}}" class="cr-page-link subdrop"><i
                                                class="ri-checkbox-blank-circle-line"></i>لیست کاربران</a></li>
                                    <li><a href="{{route('comments')}}" class="cr-page-link subdrop"><i
                                                class="ri-checkbox-blank-circle-line"></i>نظرات کاربران</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="cr-sb-item-separator"></li>
                    <li class="cr-sb-title condense">صفحات</li>
                    <li class="cr-sb-item sb-drop-item">
                        <a href="javascript:void(0)" class="cr-drop-toggle">
                            <i class="ri-pages-line"></i><span class="condense">احراز هویت<i
                                    class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                        <ul class="cr-sb-drop condense">
                            <li><a href="{{route('login')}}" class="cr-page-link drop"><i
                                        class="ri-checkbox-blank-circle-line"></i></i>ورود</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main content -->
    @yield('main_content')
    <!-- Footer -->
    <footer>
        <div class="container-fluid">
            <div class="copyright">
                <p><span>1403</span> © کرت ، کلیه حقوق محفوظ است. </p>
                <p>ارائه از آفرید تیم</p>
            </div>
        </div>
    </footer>

    <!-- Feature tools -->
</main>

<!-- Vendor Custom -->

<script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
<script src="assets/js/vendor/simplebar.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendor/apexcharts.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/vendor/owl.carousel.min.js"></script>
<!-- Data Tables -->
<script src='assets/js/vendor/jquery.datatables.min.js'></script>
<script src='assets/js/vendor/datatables.bootstrap5.min.js'></script>
<script src='assets/js/vendor/datatables.responsive.min.js'></script>
<!-- Caleddar -->
<script src="assets/js/vendor/jquery.simple-calendar.js"></script>


<!-- Main Custom -->
<script src="assets/js/main.js"></script>
<script src="assets/js/data/ecommerce-chart-data.js"></script>

<!-- Date Range Picker -->
<script src="assets/js/vendor/moment.min.js"></script>
<script src="assets/js/vendor/daterangepicker.js"></script>
<script src="assets/plugins/vendor/bootstrap-datepicker.fa.min.js"></script>
<script src='assets/plugins/vendor/moment.js'></script>
<script src='assets/plugins/vendor/moment-jalaali.js'></script>
<!-- Date Range Picker -->
<script>moment.locale("fa");</script>
<script src="assets/js/vendor/date-range.js"></script>
</body>

</html>
