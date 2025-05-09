<?php $__env->startSection('main'); ?>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: '<?php echo e(route('show-cart')); ?>',
                type: 'get',
                dataType: "json",
                success: function (response) {
                    let subTotal = 0;
                    let price = 0;

                    $.each(response.cart, function (index, product) {
                        price = parseFloat(product.new_price.replaceAll(',', ''))
                        subTotal = product.quantity * price
                        $('#table').append(
                            `<tr class="cart_item">
                                <td>
                                    <img src="<?php echo e(asset('${product.mini_image}')); ?>" alt="">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </td>
                                <td>
                                    <h3 class="cart_title">
                                        <a href="">
                                          ${product.title}
                                        </a>
                                    </h3>
                                </td>
                                <td>
                                    <div class="cart_price">
                                        <ins><span>${product.new_price}<span>تومان</span></span></ins>
                                    </div>
                                </td>
                                <td><input id="qty" type="number" min="0" class="tedad" value="${product.quantity}" data-price="${product.new_price}" onchange="demo()" /></td>
                                <td class="price_alltd">
                                <strong class="subTotal"> ${subTotal}</strong>
                                 <span>تومان </span></td>
                            </tr>
`
                        )
                    })
                    demo()
                    cart_price()


                },
                error: function () {
                    alert('error')
                }
            })

            function cart_price() {
                let totalPrice = 0
                let prices = $('.subTotal').map(function () {
                    return parseFloat($(this).text())
                }).get()

                $(prices).each(function (index, price) {
                    totalPrice += price;
                })
                $('#totalPrice').text(totalPrice)
            }

            function demo() {
                $('.tedad').on('load change keyup', function () {
                    let qty = $(this).val()
                    let price = $(this).attr('data-price').replaceAll(',', '')
                    let new_price = qty * price
                    $(this).closest('tr').find('.subTotal').text(new_price);
                    cart_price()
                })
            }



        })
    </script>
    <main class="cart-page default space-top-30">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="order-steps">
                        <li>
                            <a href="cart.html" class="active">
                                <span>سبدخرید</span>
                            </a>
                        </li>
                        <li>
                            <a href="shopping-payment.html">
                                <span>پرداخت</span>
                            </a>
                        </li>
                        <li>
                            <a href="successful-payment.html">
                                <span>اتمام خرید و ارسال</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="cart_content col-xl-12 col-lg-12 col-md-12">
                    <header class="card-header">
                        <h3 class="card-title"><span>سبد خرید شما</span></h3>
                    </header>
                    <div class="table-responsive default">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">محصول</th>
                                <th scope="col">سبد خرید شما</th>
                                <th scope="col">قیمت واحد</th>
                                <th scope="col">تعداد</th>
                                <th scope="col">قیمت نهایی</th>
                            </tr>
                            </thead>
                            <tbody id="table">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="cart-page-content col-xl-12 col-lg-12 col-md-12">
                    <div class="row cart_details">

                        <div class="cart-page-content col-xl-8 col-lg-7 col-md-7 ">
                            <input type="text" placeholder="کد تخفیف" class="input_second input_all width-200">
                            <a href="#" class="btn btn-main-masai"> اعمال</a>
                            <a href="#" class="btn btn-second-masai">به روز رسانی</a>
                            <div class="text_details">
                                <p>
                                    ارسال رایگان برای سفارش‌های بالای 1 میلیون و 400 هزار تومان
                                </p>
                                <p>
                                    افزودن کالا به سبد خرید به معنی رزرو آن نیست با توجه به محدودیت موجودی سبد خود را
                                    ثبت و خرید را تکمیل کنید.
                                </p>
                            </div>
                        </div>
                        <div class="cart-page-aside col-xl-4 col-lg-5 col-md-5 divider_details">
                            <table class="table table_details">
                                <tbody>
                                <tr>
                                    <td>قیمت کل سفارش:</td>
                                    <td class="totalPrice" id="totalPrice"><span>تومان</span></td>
                                </tr>
                                <tr>
                                    <td>بسته‌بندی و ارسال:</td>
                                    <td>وابسته به نوع ارسال</td>
                                </tr>
                                <tr class="all">
                                    <td>قیمت قابل پرداخت:</td>
                                    <td class="totalPrice"><span>تومان</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><a href="shopping-payment.html" class="btn big_btn btn-main-masai">
                                            گام بعدی</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <script>


    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_js'); ?>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_Master.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\cart.blade.php ENDPATH**/ ?>