@extends('_Master.admin_main')
@section('main_content')
    @if($errors->any())
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'نظر منتشر نشد!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @elseif(session('success'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'نظر کاربر با موفقیت ویرایش شد',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if(session('delete'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'نظر کاربر با موفقیت حذف شد',
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
                            <h4 class="cr-card-title">نظرات کاربران</h4>
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
                                            <th>شناسه</th>
                                            <th>ردیف</th>
                                            <th>پروفایل</th>
                                            <th>نام کاربر</th>
                                            <th>ایمیل</th>
                                            <th>نظر</th>
                                            <th> شناسه محصول مربوطه</th>
                                            <th>نشر</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($comments as $comment)
                                            <tr>
                                                <td>{{$comment['user_id']==null ? 'مهمان' : $comment['user_id']}}</td>
                                                <td class="token">{{$loop->iteration}}</td>
                                                <td>
                                                    <img class="img-thumbnail img-fluid"
                                                         src="{{asset($comment['avatar'])}}" alt=""></td>
                                                <td>
                                                    <span class="name">{{$comment['name']}}</span></td>
                                                <td>{{$comment['email']}}</td>
                                                <td>{{$comment['text']}}</td>
                                                <td>{{$comment->product->slug}}</td>
                                                <td class="col-2">
                                                    <form
                                                        action="{{ route('comments-approve',['name'=>$comment['name']]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="publish" value="0">
                                                        <input type="checkbox" name="publish" id="publish"
                                                               value="1" {{ $comment->approve == 1 ? 'checked' : '' }}>

                                                        <button class="btn btn-success" type="submit">ذخیره</button>
                                                    </form>
                                                </td>
                                                <td>
                                                <span>
<a href="{{route('comments-delete',['name'=>$comment['name']])}}">
    <i class="text-danger fa-solid fa-trash"></i></a></span></td>
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
