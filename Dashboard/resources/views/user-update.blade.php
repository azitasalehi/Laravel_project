@extends('_Master.admin_main')
@section('main_content')
    @if(session('errors'))
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
                title: 'کاربر  با موفقیت ویرایش شد',
                showConfirmButton: false,
                timer: 2000

            });
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
            <form class="cr-profile-add" method="post" action="{{route('edit-user-form',['name'=>$user['name']])}}"
                  enctype="multipart/form-data">
                @csrf
                <input name="user_token" value="{{$user['name']}}" type="hidden">
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
                                                             src="{{asset($user['avatar'])}}"
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
                                                    <a href="#" class="cr-btn-primary m-r-10">نمایه را اضافه کنید</a>
                                                </div>
                                            </div>
                                            <div class="cr-vendor-info">
                                                <ul>
                                                    <li>
                                                        <label>نام کاربر :</label>
                                                        <div class="form-group p-b-15">
                                                            <input name="name" type="text" class="form-control"
                                                                   placeholder="نام را وارد کنید"
                                                                   value="{{$user['name']}}">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>ایمیل :</label>
                                                        <div class="form-group p-b-15">
                                                            <input type="email" class="form-control"
                                                                   placeholder="ایمیل را وارد کنید..."
                                                                   name="email" value="{{$user['email']}}">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button class="cr-btn-primary m-r-10" type="submit">ویرایش
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
