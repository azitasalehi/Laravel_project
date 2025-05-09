@extends('layouts.app')
@section('extra-links')
    <link href="assets/fonts/font-awesome/css/fontawesome.min.css" rel="stylesheet" />
    <link href="assets/fonts/font-awesome/css/solid.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/main_ui.css" rel="stylesheet" />
    <link href="assets/css/icon.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/nouislider.min.css" rel="stylesheet" /><link href="assets/css/main.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container">
    <div class="main-content login_content col-12 col-md-7 col-lg-5 mx-auto">
        <header class="card-header">
            <h3 class="card-title"><span>ایجاد حساب کاربری</span></h3>
        </header>
        <div class="login_box">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-account-title"><span>*</span> نام و نام خانوادگی</div>
                                <div class="form-account-row">
                                <input id="name" type="text" class="input_second input_all  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="col-md-12 col-sm-12">
                            <div class="form-account-title"><span>*</span> ایمیل</div>
                            <div class="form-account-row">
                                <input id="email" type="email" class="input_second input_all @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                            <div class="col-md-12 col-sm-12">
                                <div class="form-account-title"><span>*</span> کلمه عبور</div>

                                <div class="form-account-row">
                                <input id="password" type="password" class="input_second input_all @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-account-title"><span>*</span> تکرار کلمه عبور</div>

                            <div class="form-account-row">
                                <input id="password-confirm" type="password" class="input_second input_all" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-12 text--center">
                                <button type="submit" class="btn big_btn btn-main-masai">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
      </div>
    </div>
</div>
@endsection
