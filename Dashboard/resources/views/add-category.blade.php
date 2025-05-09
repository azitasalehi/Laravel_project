@extends('_Master.admin_main')

@section('main_content')
    @if(session('not_active'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'دسته بندی غیرفعال شد',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @elseif(session('active'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'دسته بندی فعال شد',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @elseif(session('success'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'دسته بندی اضافه شد',
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
                    <h5>دسته بندی</h5>
                    <ul>
                        <li><a href="{{route('main')}}">ادمین</a></li>
                        <li>دسته بندی</li>
                    </ul>
                </div>
            </div>
            <div class="row cr-category">
                <div class="col-xl-4 col-lg-12">
                    <div class="team-sticky-bar">
                        <div class="col-md-12">
                            <div class="cr-cat-list cr-card card-default mb-24px">
                                <div class="cr-card-content">
                                    <div class="cr-cat-form">
                                        <h3> افزودن دسته جدید </h3>

                                        <form method="post" action="{{route('add-category')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label>نام</label>
                                                <div class="col-12">
                                                    <input id="text" name="name" class="form-control here slug-title"
                                                           type="text">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 d-flex">
                                                    <button type="submit" class="cr-btn-primary">ثبت</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="cr-cat-list cr-card card-default">
                        <div class="cr-card-content ">
                            <div class="table-responsive tbl-800">
                                <table id="cat_data_table" class="table">
                                    <thead>
                                    <tr>
                                        <th>شناسه</th>
                                        <th>نام دسته بندی</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category['name']}}</td>
                                            <td class="{{$category['status']==0? 'active': 'text-danger'}}">{{$category['status']==0? 'فعال': 'غیرفعال'}}</td>
                                            <td class="col-md-3">
                                                <a href="{{route('active-category',['name'=>$category['name']])}}"
                                                   class="btn btn-success">فعال</a>
                                                <a href="{{route('not-active-category',['name'=>$category['name']])}}"
                                                   class="btn btn-danger">غیرفعال</a>
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

@endsection


