<?php use Illuminate\Support\Str; ?>
<?php use Morilog\Jalali\Jalalian; ?>

<?php $__env->startSection('main'); ?>
    <?php if(session('cart_added')): ?>
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'محصول به سبد خرید اضافه شد!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php elseif(session('delete-cart')): ?>
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'محصول از سبد خرید حذف شد!',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php endif; ?>
    <main class="main default space-top-10">
        <div class="container-fluid">
            <div class="slider_main owl-carousel owl-theme">
                <div class="item">
                    <a href="category-search.html">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg_Masai" width="231" height="75"
                             viewBox="0 0 231 75" fill="none"
                             style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                            <path clip-rule="evenodd"
                                  d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z"
                                  fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                        </svg>
                        <img src="assets/img/banner_img/01/16781944460617.jpg" class="img-fluid imgslider" alt="">
                    </a>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg_Masai" width="231" height="75"
                         viewBox="0 0 231 75" fill="none"
                         style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                        <path clip-rule="evenodd"
                              d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z"
                              fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                    </svg>
                    <a href="category-search.html">
                        <img src="assets/img/banner_img/01/16785213091818.jpg" class="img-fluid imgslider" alt="">
                    </a>
                </div>
                <div class="item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg_Masai" width="231" height="75"
                         viewBox="0 0 231 75" fill="none"
                         style="float: right;margin-bottom: -100px;position: relative;z-index: 9;margin-top: 0px;margin-right: 30px;">
                        <path clip-rule="evenodd"
                              d="M0 0C31.5006 0.949537 50.52 17.872 56.1955 26.4544L55.986 25.8011L82.4924 58.631C99.3032 79.4521 131.038 79.4521 147.849 58.6309L174.356 25.8011L174.146 26.4544C179.822 17.872 198.844 0.949537 230.349 0H0Z"
                              fill="#FCFCFC" fill-rule="" style="fill: #fff;"></path>
                    </svg>
                    <a href="category-search.html">
                        <img src="assets/img/banner_img/01/16789575390919.jpg" class="img-fluid imgslider" alt="">
                    </a>
                </div>
            </div>

        </div>
        <div class="container space-top-50 ">
            <div class="row space-bottom-30">
                <div class="col-sm-6">
                    <div class="row">
                        <?php for($m=0;$m<4;$m++): ?>
                            <div class=" col-3  contact-miniicon  text-center">
                                <div class="space-5">
                                    <img src="<?php echo e(asset($mini_icons[$m]['image'])); ?>" class="minilogo_w">
                                    <b class="title-3 light-black"><?php echo e($mini_icons[$m]['title']); ?></b>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <?php for($m=4;$m<8;$m++): ?>
                            <div class=" col-3  contact-miniicon  text-center">
                                <div class="space-5">
                                    <img src="<?php echo e(asset($mini_icons[$m]['image'])); ?>" class="minilogo_w">
                                    <b class="title-3 light-black"><?php echo e($mini_icons[$m]['title']); ?></b>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-9 hidden-xs hidden-md">
                    <section id="offercarousel" class="carousel slide carousel-fade card border_all"
                             data-ride="carousel">
                        <div class="row m-0">

                            <div class="carousel-inner p-0 col-12 col-lg-12">
                                <ol class="carousel-indicators pr-0 d-flex flex-column ">
                                    <li class="active" data-target="#offercarousel" data-slide-to="0">
                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="1" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="2" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="3" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="4" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="5" class="">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="6">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="7">

                                    </li>
                                    <li data-target="#offercarousel" data-slide-to="8">

                                    </li>

                                </ol>
                                <?php $__currentLoopData = $offer_carousels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer_carousel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
                                        <div class="row m-0">
                                            <div class="right-col col-5 d-flex imgboxofer">
                                                <a class="w-100 text-center"
                                                   href="<?php echo e(route('single_product',['slug'=>$offer_carousel['slug']])); ?>">
                                                    <img src="<?php echo e(asset($offer_carousel['image'])); ?>" class="img-fluid"
                                                         alt="">
                                                    <span  class="discount-percent"><?php echo e($offer_carousel['discount']); ?></span>
                                                </a>
                                            </div>
                                            <div class="left-col col-7">
                                                <h2 class="product-title ">
                                                    <a href="<?php echo e(route('single_product',['slug'=>$offer_carousel['slug']])); ?>"> <?php echo e($offer_carousel['title']); ?> </a>
                                                </h2>
                                                <hr class="hr-text" data-content="<?php echo e($offer_carousel['hr_tag']); ?>">

                                                <div class="row">
                                                    <div class="col-5">
                                                        <ul class="list-group space-15">
                                                            <?php                                                                $items=explode(',',$offer_carousel['list_group_item'])
                                                            ?>
                                                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="list-group-item"><?php echo e($item); ?></li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="price space-15">
                                                    <del><span><?php echo e($offer_carousel['old_price']); ?><span>تومان</span></span>
                                                    </del>
                                                    <ins><span><?php echo e($offer_carousel['new_price']); ?><span>تومان</span></span>
                                                    </ins>
                                                </div>
                                                <div class="row space-15">
                                                    <div class="col-5 timer-title">
                                                        <h5>یه ثانیه هم غنیمته</h5>
                                                        <p>زمان باقی مانده </p>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="countdown-timer"
                                                             countdown
                                                             data-date="12 25 2023 20:20:22">
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-3 hidden-xs hidden-md">
                    <div class="widget-bid-s widget card border_all ">
                        <div id="bid-s" class="owl-carousel owl-theme">
                            <?php $__currentLoopData = $offer_carousels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer_carousel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <a href="<?php echo e(route('single_product',['slug'=>$offer_carousel['slug']])); ?>">
                                        <img src="<?php echo e(asset($offer_carousel['image'])); ?>" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="<?php echo e(route('single_product',['slug'=>$offer_carousel['slug']])); ?>"> <?php echo e(Str::limit($offer_carousel['title'],40)); ?> </a>
                                    </h3>
                                    <div class="price">
                                        <span class="amount"><?php echo e($offer_carousel['new_price']); ?><span>تومان</span></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div id="progressBar">
                            <div class="slide-progress"></div>
                        </div>
                    </div>

                </div>
                <div class="col-12">

                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <?php for($j=3;$j<7;$j++): ?>
                                    <div class="col-6 col-lg-3">
                                        <div class="widget-banner card border_all">
                                            <a href="category-search.html" target="_blank">
                                                <img class="img-fluid" src="<?php echo e(asset($banner_ads[$j]['image'])); ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card border_all bglight pad_time_prod" id="shegeft_1">
                                <header class="card-header">
                                    <h3 class="card-title">
                                            <span>
                                                <img src="assets/img/shegeft_1.png"/>
                                            </span>
                                    </h3>
                                    <div class="countdown-timer" countdown data-date="12 25 2023 20:20:22">
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
                                <div class="product-carousel owl-carousel owl-theme">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item">
                                            <a href="<?php echo e(route('single_product',['slug'=>$product['slug']])); ?>">
                                                <img src="<?php echo e(asset($product['image'])); ?>" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="product_title">
                                                <a href="<?php echo e(route('single_product',['slug'=>$product['slug']])); ?>"> <?php echo e(Str::limit($product['title'],25)); ?></a>
                                            </h2>
                                            <div class="price">
                                                <del><span><?php echo e($product['old_price']); ?><span>تومان</span></span></del>
                                                <span class="discount_badge"><?php echo e($product['discount']); ?></span>
                                                <ins><span><?php echo e($product['new_price']); ?><span>تومان</span></span></ins>
                                            </div>
                                            <div class="product-seller-details product-seller-details-item-grid">
                                                <span class="search_prod_btn"><a
                                                            href="<?php echo e(route('add_to_cart',['slug'=>$product['slug']])); ?>"><i
                                                                class="fa fa fa-cart-arrow-down search_icon_cart"
                                                                aria-hidden="true"></i></a>
</span></div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <a href="<?php echo e(route('list_category')); ?>" class="view_more">مشاهده بیشتر</a>

                            </div>
                        </div>
                    </div>
                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                <?php for($i=8; $i>=7 ; $i--): ?>
                                    <div class="col-12 col-lg-6">
                                        <div class="widget-banner card border_all">
                                            <a href="category-search.html" target="_blank">
                                                <img class="img-fluid" src="<?php echo e(asset($banner_ads[$i]['image'])); ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-product card border_all bglight">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <span><img src="assets/img/seller_1.png"/></span>
                                    </h3>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="item">
                                            <a href="<?php echo e(route('single_product',['slug'=>$product['slug']])); ?>">
                                                <img src="<?php echo e(asset($product['image'])); ?>" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="product_title">
                                                <a href="<?php echo e(route('single_product',['slug'=>$product['slug']])); ?>">
                                                    <?php echo e($product['title']); ?></a>
                                            </h2>
                                            <div class="price">
                                                <del><span><?php echo e($product['old_price']); ?><span>تومان</span></span></del>
                                                <span class="discount_badge"><?php echo e($product['discount']); ?></span>
                                                <ins><span><?php echo e($product['new_price']); ?><span>تومان</span></span></ins>
                                            </div>
                                            <div class="product-seller-details product-seller-details-item-grid">

                                                <span class="search_prod_btn"><a
                                                            href="<?php echo e(route('add_to_cart',['slug'=>$product['slug']])); ?>"><i
                                                                class="fa fa fa-cart-arrow-down search_icon_cart"
                                                                aria-hidden="true"></i></a></span>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <a href="<?php echo e(route('list_category')); ?>" class="view_more">مشاهده بیشتر </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-banner card border_all">
                                <a href="category-search.html" target="_blank">
                                    <img class="img-fluid" src="<?php echo e(asset($banner_ads[9]['image'])); ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="brand-slider card border_all bglight">
                        <header class="card-header">
                            <h3 class="card-title"><span>دسته بندی های مَسای</span></h3>
                        </header>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <?php for($i=0;$i<6;$i++): ?>
                                        <div class="col-6 col-md-2 contact-bigicon">
                                            <a href="#" target="_blank">
                                                <img class="img-responsive imgpad"
                                                     src="<?php echo e(asset($product_cats[$i]['image'])); ?>" alt=""/>
                                                <b class="title-3 light-black"><?php echo e($product_cats[$i]['name']); ?></b>
                                            </a>

                                        </div>
                                    <?php endfor; ?>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <?php for($i=6;$i<12;$i++): ?>
                                        <div class="col-6 col-md-2 contact-bigicon">
                                            <a href="#" target="_blank">
                                                <img class="img-responsive imgpad"
                                                     src="<?php echo e(asset($product_cats[$i]['image'])); ?>" alt=""/>
                                                <b class="title-3 light-black"><?php echo e($product_cats[$i]['name']); ?></b>
                                            </a>

                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="brand-slider card border_all bglight">
                        <header class="card-header">
                            <h3 class="card-title"><span>محبوب‌ترین برندها</span></h3>
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
            </div>

        </div>
        <div class="container-fluid bgGray blog-box-footer">
            <div class="container">
                <div class="col-12">
                    <div class=" widget-blog  border_all ">
                        <header class="card-header">
                            <h3 class="card-title"><span>مَسای مگ</span></h3>
                        </header>
                        <div class="Blog-carousel owl-carousel owl-theme">
                            <?php $__currentLoopData = $_magazines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_magazine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <a href="<?php echo e(route('single_blog',['slug'=>$_magazine['slug']])); ?>">
                                        <img src="<?php echo e(asset($_magazine["image"])); ?>" class="img-fluid" alt="">
                                    </a>
                                    <a href="<?php echo e(route('single_blog',['slug'=>$_magazine['slug']])); ?>">
                                        <h2 class="Blog_title">
                                            <?php echo e(Str::limit($_magazine['title'],90)); ?>

                                        </h2>
                                    </a>
                                    <div class="Blog_list">
                                          <span class="Blog_author">
                                              <i class="fa fa-user"></i>
                                              <?php echo e($_magazine->user->name); ?>

                                          </span>
                                        <span class="Blog_Date">
                                              <i class="fa fa-calendar "></i>
                             <?php echo e($date = Jalalian::forge($_magazine['created_at'])->format(' %d %B %Y')); ?>

                                          </span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('_Master.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\index.blade.php ENDPATH**/ ?>