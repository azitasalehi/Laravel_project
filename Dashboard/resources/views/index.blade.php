@extends('_Master.admin_main')
@section('main_content')
    @if($errors->any())
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'محصول حذف نشد!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @elseif(session('success'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'محصول با موفقیت حذف شد',
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
                            <h4 class="cr-card-title">لیست محصولات</h4>
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
                                            <th>محصول</th>
                                            <th>تعداد</th>
                                            <th>مبلغ</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td class="token">{{$loop->iteration}}</td>
                                                <td><img class="cat-thumb"
                                                         src="{{Str::contains($product['mini_image'],'storage')? asset($product['mini_image']) : asset('assets/'.$product['mini_image'])}}"
                                                         alt="clients Image"><span
                                                        class="name">{{$product['slug']}}</span></td>
                                                <td>{{$product['count']}}</td>
                                                <td>{{$product['new_price']}}</td>

                                                <td><a href="{{route('edit-product',['slug'=>$product['slug']])}}"><i
                                                            class="text-dark fa-solid fa-pen-to-square"></i></a></td>
                                                <td>
                                                    <span><a
                                                            href="{{route('delete-product-form',['slug'=>$product['slug']])}}"><i
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
