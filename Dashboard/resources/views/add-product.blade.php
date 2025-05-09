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
                title: 'محصول با موفقیت اضافه شد',
                showConfirmButton: false,
                timer: 2000
            });
            location.replace('/')
        </script>
    @endif
    <!-- main content -->
    <div class="cr-main-content">
        <div class="container-fluid">
            <!-- Page title & breadcrumb -->
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5>افزودن محصول</h5>
                    <ul>
                        <li><a href="{{route('main')}}">ادمین</a></li>
                        <li>افزودن محصول</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cr-card card-default">
                        <div class="cr-card-content">
                            <div class="row cr-product-uploads">
                                <div class="col-lg-8">
                                    <div class="cr-vendor-upload-detail">
                                        <form action="{{route('add-product-form')}}" method="post" class="row g-3"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-lg-4 mb-991">
                                                <div class="cr-vendor-img-upload">
                                                    <div class="cr-vendor-main-img">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input name="image" type='file' class="cr-image-upload"
                                                                       accept=".png, .jpg, .jpeg, .webp">
                                                                <label><i class="ri-pencil-line"></i></label>
                                                            </div>
                                                            <div class="avatar-preview cr-preview">
                                                                <div class="imagePreview cr-div-preview">
                                                                    <img class="cr-image-preview"
                                                                         src="assets/img/product/preview.jpg"
                                                                         alt="edit">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="thumb-upload-set colo-md-12">
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input name="mini_image" type='file'
                                                                           class="cr-image-upload"
                                                                           accept=".png, .jpg, .jpeg, .webp">
                                                                    <label><i class="ri-pencil-line"></i></label>
                                                                </div>
                                                                <div class="thumb-preview cr-preview">
                                                                    <div class="image-thumb-preview"><img
                                                                            class="image-thumb-preview cr-image-preview"
                                                                            src="assets/img/product/preview-2.jpg"
                                                                            alt="edit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">نام محصول</label>
                                                <input type="text" class="form-control slug-title" name="name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label"> دسته بندی ها را انتخاب کنید</label>
                                                <select class="form-control form-select" name="category">
                                                    @foreach($product_cats as $category)
                                                        <option
                                                            value="{{$category['id']}}">{{$category['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="slug" class="col-12 col-form-label">اسلاگ</label>
                                                <div class="col-12">
                                                    <input name="slug" class="form-control here set-slug" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">توضیح</label>
                                                <textarea name="description" class="form-control" rows="2"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">قیمت <span>( تومان
															)</span></label>
                                                <input name="price" type="number" class="form-control" id="price1">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">تعداد</label>
                                                <input name="count" type="number" class="form-control" id="quantity1">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">برچسب محصول<span>(نوع و
کاما را برای جدا کردن برچسب ها بسازید)</span></label>
                                                <input type="text" class="form-control" id="group_tag"
                                                       name="hr_tag" value="" placeholder=""
                                                       data-role="tagsinput">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn cr-btn-primary">ثبت</button>
                                            </div>
                                        </form>
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
