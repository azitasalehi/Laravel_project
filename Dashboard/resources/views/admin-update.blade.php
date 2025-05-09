@extends('_Master.admin_main')
@section('main_content')
    @if($errors->any())
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'لطفا فیلد ها را به طور صحیح وارد کنید!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @elseif(session('success'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'پروفایل  با موفقیت ویرایش شد',
                showConfirmButton: false,
                timer: 2000

            });
            location.replace('/admin/profile')
        </script>
    @endif
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5> به روز رسانی ادمین </h5>
                    <ul>
                        <li><a href="{{route('main')}}">ادمین</a></li>
                        <li> به روز رسانی ادمین</li>
                    </ul>
                </div>
            </div>
            @php $admin=session('admin')->get();
                     $admin=$admin[0];
            @endphp
            <form class="cr-profile-add" method="post" action="{{route('profile-update-form')}}"
                  enctype="multipart/form-data">
                @csrf
                <input name="user_token" value="{{$admin['user_name']}}" type="hidden">
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-md-12">
                        <div class="vendor-sticky-bar">
                            <div class="col-xl-12">
                                <div class="cr-card">
                                    <div class="cr-card-content">
                                        <div class="cr-vendor-block-img">
                                            <div class="cr-vendor-block-detail">
                                                <div class="profile-img">
                                                    <div class="avatar-preview">
                                                        <img class="v-img"
                                                             src="{{asset($admin['avatar'])}}"
                                                             alt="vendor image">
                                                    </div>
                                                    <span class="tag-label online"></span>
                                                    <div class="avatar-edit">
                                                        <input
                                                            name="avatar" type='file' id="imageUpload"
                                                            accept=".png, .jpg, .jpeg">
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                </div>
                                                <div class="cr-settings">
                                                    <a href="#" class="cr-btn-primary m-r-10">پروفایل را اضافه کنید</a>
                                                </div>
                                            </div>
                                            <div class="cr-vendor-info">
                                                <ul>
                                                    <li>
                                                        <label>نام :</label>
                                                        <div class="form-group p-b-15">
                                                            <input name="name" type="text" class="form-control"
                                                                   placeholder="نام را وارد کنید"
                                                                   value="{{$admin['name']}}">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label> نام کاربری :</label>
                                                        <div class="form-group p-b-15">
                                                            <input type="text" class="form-control"
                                                                   name="user_name" placeholder="نام کاربری"
                                                                   value="{{$admin['user_name']}}">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>تلفن :</label>
                                                        <div class="form-group p-b-15">
                                                            <input type="text" class="form-control"
                                                                   placeholder="شماره را وارد کنید"
                                                                   name="phone" value="{{$admin['mobile']}}">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-md-12">
                        <div class="cr-card vendor-overview vendor-profile">
                            <div class="cr-card-content cr-card-vendor vendor-details mb-m-30">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="cr-vendor-detail">
                                            <h6>آدرس ایمیل</h6>
                                            <ul>
                                                <li><strong>ایمیل 1:</strong>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control"
                                                               name="email" placeholder="ایمیل را وارد کنید"
                                                               value="{{$admin['email']}}">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="cr-vendor-detail">
                                            <h6>نشانی</h6>
                                            <ul>
                                                <li>
                                                    <textarea class="form-control" id="profile_address1" rows="2"
                                                              name="address"
                                                              placeholder="آدرس را وارد کنید">{{$admin['address']}} </textarea>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="cr-vendor-detail">
                                            <h6>رسانه های اجتماعی</h6>
                                            <ul>
                                                <li>
                                                    <div class="form-group">
                                                        <input
                                                            name="social_media"
                                                            type="text" class="form-control"
                                                            placeholder="instagram id"
                                                            value="https://www.instagram.com/_.imazita">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="cr-vendor-detail">
                                            <h6>حساب های بانکی</h6>
                                            <ul>
                                                <li><strong>شماره حساب :</strong>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                               placeholder="شماره  را وارد کنید"
                                                               name="bank_number" value="123**********80">
                                                    </div>
                                                </li>
                                                <li><strong>نام بانک :</strong>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                               name="bank" placeholder="نام بانک را وارد کنید"
                                                               value="بانک مرکزی">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <button class="col-8 mx-auto cr-btn-primary m-r-10" type="submit">ویرایش</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
            {{--            @endauth--}}
            <p>please login</p>


        </div>
    </div>
@endsection
