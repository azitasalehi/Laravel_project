<?php $__env->startSection('main'); ?>
    <main class="main default space-top-10">

        <div class="container-fluid">
            <div class="slider_main owl-carousel owl-theme">
                <div class="item">
                    <a href="category-search.html">
                        <svg xmlns="http://www.w3.org/2000/svg"  class="svg_Masai" width="231" height="75" viewBox="0 0 231 75" fill="none" style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                            <path clip-rule="evenodd" d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z" fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                        </svg>
                        <img src="assets/img/banner_img/02/01.jpg" class="img-fluid imgslider" alt="">
                    </a>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg_Masai" width="231" height="75" viewBox="0 0 231 75" fill="none" style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                        <path clip-rule="evenodd" d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z" fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                    </svg>
                    <a href="category-search.html">
                        <img src="assets/img/banner_img/02/02.jpg" class="img-fluid imgslider" alt="">
                    </a>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="svg_Masai" width="231" height="75" viewBox="0 0 231 75" fill="none" style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                        <path clip-rule="evenodd" d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z" fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                    </svg>
                    <a href="category-search.html">
                        <img src="assets/img/banner_img/02/03.jpg" class="img-fluid imgslider" alt="">
                    </a>
                </div>
            </div>


        </div>
        <div class="container space-top-50 ">
            <div class="space-bottom-30 brand-slider card border_all ">
                <header class="card-header">
                    <h3 class="card-title"><span>بیشترین فروش</span></h3>
                </header>

                <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-3  contact_category  text-center">
                        <div class="row">
                                <div class="contact_category_left col-12 col-lg-6">
                                    <a href="<?php echo e(route('list_category-single-product',['slug'=>$product['slug']])); ?>">
                                    <img src="<?php echo e(asset($product['image'])); ?>" class="sell_category_img">
                                    <span class="hidden-xs hidden-md" ><?php echo e($product['id']); ?></span>
                                    </a>
                                </div>
                                <div class="contact_category_right hidden-xs hidden-md col-6 col-lg-6">
                                    <a href="<?php echo e(route('list_category-single-product',['slug'=>$product['slug']])); ?>">
                                    <p class="title_cat1 light-black"><?php echo e($product['title']); ?></p>
                                    <p class="title_cat2 light-black"><?php echo e($product['hr_tag']); ?></p>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>



            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card border_all  pad_time_prod" id="shegeft_1">
                                <header class="card-header">
                                    <h3 class="card-title">
                                            <span>
                                                <img src="assets/img/shegeft_1.png" />
                                            </span>
                                    </h3>
                                    <div class="countdown-timer" countdown data-date="06 12 2023 20:20:22">
                                        <ul class="text_countdown">
                                            <li data-days class="number_countdown">0</li>
                                            <li>روز</li>
                                        </ul>
                                        <ul class="text_countdown">
                                            <li data-hours class="number_countdown">0</li>
                                            <li>ساعت</li>
                                        </ul>
                                        <ul class="text_countdown">
                                            <li data-minutes class="number_countdown">0</li>
                                            <li>دقیقه</li>
                                        </ul>
                                        <ul class="text_countdown">
                                            <li data-seconds class="number_countdown">0</li>
                                            <li>ثانیه</li>
                                        </ul>
                                    </div>
                                </header>
                                <div class="product-carousel-catgory product-carousel owl-carousel owl-theme">
                                    <?php $__currentLoopData = $off_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item">
                                        <a href="<?php echo e(route('list_category-single-product',['slug'=>$item['slug']])); ?>">
                                            <img src="<?php echo e(asset($item['image'])); ?>" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="product_title">
                                            <a href="<?php echo e(route('list_category-single-product',['slug'=>$item['slug']])); ?>"><?php echo e($item['title']); ?></a>
                                        </h2>
                                        <div class="price"><del><span><?php echo e($item['old_price']); ?><span>تومان</span></span></del>
                                            <span class="discount_badge"><?php echo e($item['discount']); ?></span><ins><span><?php echo e($item['new_price']); ?><span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="product-carousel-catgory product-carousel owl-carousel owl-theme">
                                    <?php $__currentLoopData = $off_products2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item">
                                            <a href="<?php echo e(route('list_category-single-product',['slug'=>$item['slug']])); ?>">
                                                <img src="<?php echo e(asset($item['image'])); ?>" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="product_title">
                                                <a href="<?php echo e(route('list_category-single-product',['slug'=>$item['slug']])); ?>"><?php echo e($item['title']); ?></a>
                                            </h2>
                                            <div class="price"><del><span><?php echo e($item['old_price']); ?><span>تومان</span></span></del>
                                                <span class="discount_badge"><?php echo e($item['discount']); ?></span><ins><span><?php echo e($item['new_price']); ?><span>تومان</span></span></ins>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>







                <div class="col-12">
                    <div class="brand-slider brand-slider-cat card border_all ">
                        <header class="card-header">
                            <h3 class="card-title"><span>بر اساس برند</span></h3>
                        </header>
                        <div class="owl-carousel">
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item borderitem">
                                <a href="#"> <img src="<?php echo e(asset($brand['image'])); ?>" alt=""> </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="brand-slider brand-slider-cat2 card border_all ">
                        <header class="card-header">
                            <h3 class="card-title"><span>بر اساس قیمت</span></h3>
                        </header>
                        <div class="owl-carousel">
                            <div class="item borderitem">
                                <a href="#"> <img src="assets/img/Price/02.jpg" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="assets/img/Price/03.jpg" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="assets/img/Price/04.jpg" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="assets/img/Price/05.jpg" alt=""> </a>
                            </div>
                            <div class="item borderitem">
                                <a href="#"> <img src="assets/img/Price/06.jpg" alt=""> </a>
                            </div>


                        </div>
                    </div>
                </div>



            </div>

            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="widget-banner card border_all">
                                <a href="category-search.html" target="_blank">
                                    <img class="img-fluid" src="assets/img/banner_img/img-7.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="widget-banner card">
                                <a href="category-search.html" target="_top">
                                    <img class="img-fluid" src="assets/img/banner_img/img-8.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="brand-slider card border_all ">
                        <header class="card-header">
                            <h3 class="card-title"><span>دسته بندی ها</span></h3>
                        </header>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_blank">
                                            <img class="img-responsive imgpad" src="assets/img/Masai/bigicon/img-1.png" alt="" />
                                            <b class="title-3 light-black">کالای دیجیتال</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="assets/img/Masai/bigicon/img-2.png" alt="" />
                                            <b class="title-3 light-black">مودم</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_blank">
                                            <img class="img-responsive imgpad" src="assets/img/Masai/bigicon/img-3.png" alt="" />
                                            <b class="title-3 light-black">تبلت</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="assets/img/Masai/bigicon/img-4.png" alt="" />
                                            <b class="title-3 light-black">ماوس</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="assets/img/Masai/bigicon/img-5.png" alt="" />
                                            <b class="title-3 light-black">هندزفری</b>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-2 contact-bigicon">

                                        <a href="#" target="_top">
                                            <img class="img-responsive imgpad" src="assets/img/Masai/bigicon/img-6.png" alt="" />
                                            <b class="title-3 light-black">ساعت هوشمند</b>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_Master.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\list-category.blade.php ENDPATH**/ ?>