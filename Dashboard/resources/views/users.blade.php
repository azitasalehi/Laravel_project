@extends('_Master.admin_main')
@section('main_content')
    @if($errors->any())
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'کاربر حذف نشد!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @elseif(session('success'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'کاربر با موفقیت حذف شد',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    <!-- Main content -->
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="row">
                <div class="col-xxl-8 col-xl-12">
                    <div class="cr-card" id="ordertbl">
                        <div class="cr-card-header">
                            <h4 class="cr-card-title">لیست کاربران</h4>
                            <div class="header-tools">
                                <a href="javascript:void(0)" class="m-r-10 cr-full-card" title="تمام صفحه"><i
                                        class="ri-fullscreen-line"></i></a>
                            </div>
                        </div>
                        <div class="cr-card-content card-default">
                            <div class="order-table">
                                <div class="table-responsive">
                                    <table id="recent_order_data_table" class="table text-center">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>پروفایل</th>
                                            <th>نام کاربر</th>
                                            <th>ایمیل</th>
                                            {{--                                            <th>ویرایش</th>--}}
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="token">{{$loop->iteration}}</td>
                                                <td><img class="img-fluid img-thumbnail "
                                                         src="{{asset($user['avatar'])}}" alt=""></td>
                                                <td><span
                                                        class="name">{{$user['name']}}</span></td>


                                                <td>{{$user['email']}}</td>
                                                <td>
    <span><a
            href="{{route('edit-user',['name'=>$user['name']])}}"><i
                class="text-success fa-solid fa-edit"></i></a></span>
                                                    <span><a
                                                            href="{{route('delete-user',['name'=>$user['name']])}}"><i
                                                                class="text-danger fa-solid fa-trash"></i></a></span>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
