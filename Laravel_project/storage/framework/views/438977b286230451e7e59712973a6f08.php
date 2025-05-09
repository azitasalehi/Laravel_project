<?php use Morilog\Jalali\Jalalian; ?>


<?php $__env->startSection('extra_link'); ?>
    <link href="<?php echo e(asset('assets/css/plugins/prettyphoto/css/prettyPhoto.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/main.css?1')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .invalid-feedback {
            display: block;
        !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <!-- main -->
    <main class="single-product default">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </li>
                            <li>
                                <a href="category-search.html"><span>موبایل</span></a>
                            </li>
                            <li>
                                <a href="category-search.html"><span>برند ترین ها</span></a>
                            </li>
                            <li>
                                <a href="category-search.html"><span>اپل</span></a>
                            </li>
                            <li>
                                <span><?php echo e($product['title']); ?> </span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <article class="product">
                        <div class="row product_main_details">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="product-gallery default">
                                    <img class="main_img_gallery" src="<?php echo e(asset($product['image'])); ?>"/>
                                    <section class="testimonial py-3" id="testimonial">
                                        <div class="container">
                                            <div class="row gallery">
                                                <div class="col-4 col-md-3 pd"><a
                                                        href="<?php echo e(asset($product['mini_image'])); ?>"
                                                        rel="prettyPhoto[gallery1]"><img
                                                            src="<?php echo e(asset($product['mini_image'])); ?>" class="img-thumb"
                                                            alt="نمایشگر همیشه روشن"/></a></div>

                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <ul class="gallery-options">
                                    <li>
                                        <button class="add-favorites favorites2 favorites_heart"><i
                                                class="fa fa-heart"></i></button>
                                    </li>
                                    <li>
                                        <button class="favorites2" data-toggle="modal" data-target="#myModal"><i
                                                class="fa fa-share-alt"></i></button>
                                    </li>
                                </ul>
                                <!-- Modal Core -->
                                <div class="modal-share modal fade" id="myModal" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">به اشتراک گذاشتن</h4>
                                            </div>

                                            <div class="modal-footer">
                                                <form class="default">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p>
                                                                برای کپی آدرس در کادر زیر دابل کلیک کنید
                                                            </p>
                                                            <p class="right-side-header shareurlvalue"
                                                               title="کپی بعد دوبار کلیک" id="text" onclick="copyElementText(this.id)">
                                                                http://www.mysite.com/single-product.html</p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Core -->
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 ">

                                <h2 class="product-title ">
                                    <a href="#"> <?php echo e($product['title']); ?> </a>
                                </h2>
                                <hr class="hr-text" data-content="<?php echo e($product['hr_tag']); ?>">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="list-group space-15">
                                            <?php
                                                $items=explode(',',$product['list_group_item'])
                                            ?>

                                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="list-group-item"><?php echo e($item); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 product_main_pr">
                                        <div class="time_pr">
                                            <div class="row">
                                                <div class="col-12 upda">
                                                    <b>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>

                                                        زمان ارسال محصول :
                                                    </b>
                                                    از انبار مَسای کالا طی 2 روز کاری
                                                </div>

                                                <div class="col-12 col-lg-6 col-md-6">

                                                    <p>زمان باقی مانده </p>
                                                    <div class="countdown-timer" countdown=""
                                                         data-date="06 12 2023 20:20:22">
                                                        <ul class="text_countdown">
                                                            <li data-days="" class="number_countdown">35</li>
                                                            <li>روز</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-hours="" class="number_countdown">8</li>
                                                            <li>ساعت</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-minutes="" class="number_countdown">1</li>
                                                            <li>دقیقه</li>
                                                        </ul>
                                                        <ul class="text_countdown">
                                                            <li data-seconds="" class="number_countdown">35</li>
                                                            <li>ثانیه</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 border_left">
                                                    <div class="price space-15"><del><span><?php echo e($product['old_price']); ?><span>تومان</span></span></del><ins><span><?php echo e($product['new_price']); ?><span>تومان</span></span>
                                                        </ins>
                                                    </div>
                                                    <div class="col-12 timer-title text--center">

                                                        <a href="<?php echo e(route('add_to_cart',['slug'=>$product['slug']])); ?>"
                                                           class="btn btn-main-masai big_btn">افزودن به سبد</a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="txt_note">
                                            <i class="fa fa-info" aria-hidden="true"></i>
                                            برای کالاهای گروه موبایل، امکان برگشت کالا به دلیل انصراف از خرید تنها در
                                            صورتی مورد قبول است که کالا بدون هیچگونه استفاده و با تمامی قطعات، متعلقات و
                                            بسته‌بندی‌های اولیه خود بازگردانده شود. لازم به ذکر است که برای هر کالای
                                            موبایل، ضمانت رجیستری صادر می‌شود. در صورت بروز اشکال در ضمانت رجیستری، پس
                                            از انقضای مدت ۳۰ روزه، کالا می‌تواند بازگردانده شود.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 default no-padding bg_single_product">
                        <div class="product-tabs default">
                            <div class="box-tabs default">
                                <ul class="nav" role="tablist">
                                    <li class="box-tabs-tab">
                                        <a class="active " data-toggle="tab" href="#desc" role="tab"
                                           aria-expanded="true">
                                            توضیحات تکمیلی
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#params" role="tab" aria-expanded="false">
                                            مشخصات محصول
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#comments" role="tab" aria-expanded="false">
                                            دیدگاه خریداران
                                        </a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a data-toggle="tab" href="#comments_questions" role="tab"
                                           aria-expanded="false">
                                            پرسش و نظر
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-body default">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="desc" role="tabpanel" aria-expanded="true">

                                            <header class="card-header">
                                                <h3 class="card-title"><span><?php echo e($product['desc_title']); ?></span>
                                                </h3>
                                            </header>
                                            <div class="parent-expert default">
                                                <div class="content-expert"><p><?php echo e($product["description"]); ?></p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="tab-pane params" id="params" role="tabpanel" aria-expanded="false">
                                            <header class="card-header">
                                                <h3 class="card-title"><span><?php echo e($product['desc_title']); ?></span>
                                                </h3>
                                            </header>

                                            <div class="col-12">
                                                <ul class="list-group space-15">
                                                    <?php
                                                        $items=explode(',',$product['list_group_item'])
                                                    ?>

                                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="list-group-item"><?php echo e($item); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="comments" role="tabpanel" aria-expanded="false">
                                            <header class="card-header">
                                                <h3 class="card-title"><span>دیدگاه های کاربران(<?php echo e(count($product->comments) ?? 0); ?>)</span>
                                                </h3>
                                            </header>
                                            <div class="comments_form default">
                                                <ol class="comment-list">
                                                    <!-- #comment-## -->
                                                    <?php if(isset($product->comments[0])): ?>
                                                        <?php $__currentLoopData = $product->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <div class="comment-body">
                                                                    <div class="comment-author">
                                                                        <img alt="" src="<?php echo e(asset($comment['avatar'])); ?>"
                                                                             class="avatar"><span
                                                                            class="star4">4.3</span>
                                                                        <div class="text-h5"><?php echo e($comment['name']); ?></div>
                                                                    </div>
                                                                    <p><?php echo e($comment['text']); ?></p>
                                                                    <ul class="commentul">
                                                                        <li>
                                                                            <?php echo e($date =Jalalian::forge($comment['created_at'])->format(' %d %B %Y')); ?>

                                                                        </li>
                                                                        <li>
                                                                            <?php echo e($comment->user->name ?? "Guest"); ?>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </ol>
                                            </div>
                                        </div>
                                        <div class="tab-pane form-comment" id="comments_questions" role="tabpanel"
                                             aria-expanded="false">
                                            <header class="card-header">
                                                <h3 class="card-title"><span>ارسال نظر و پرسش  </span></h3>
                                            </header>
                                            <?php if(session()->has('status')): ?>
                                                <h3 class="card-title alert alert-success col-4"><?php echo e(session()->get('status')); ?></h3>
                                            <?php endif; ?>
                                            <?php if(auth()->guard()->guest()): ?>
                                                <form method="POST"
                                                      action="<?php echo e(route('insert_comment',['slug'=>$product['slug']])); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row col-5 d-flex flex-column">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="form-account-title"><span>*</span> ایمیل</div>
                                                            <div class="form-account-row">
                                                                <input id="email" type="email"
                                                                       class="input_second input_all <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                       name="email" value="<?php echo e(old('email')); ?>"
                                                                       autocomplete="email">
                                                            </div>
                                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>


                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="form-account-title"><span>*</span> کلمه عبور
                                                            </div>

                                                            <div class="form-account-row">
                                                                <input id="password" type="password"
                                                                       class="input_second input_all <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                       name="password" autocomplete="new-password">
                                                            </div>
                                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="form-account-title"><span>*</span> تکرار کلمه
                                                                عبور
                                                            </div>

                                                            <div class="form-account-row">
                                                                <input id="password-confirm" type="password"
                                                                       class="input_second input_all"
                                                                       name="password_confirmation"
                                                                       autocomplete="new-password">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-0">
                                                            <textarea name="comment" class="form-control"
                                                                      placeholder="متن نظر و پرسش"
                                                                      rows="3"><?php echo e(old('comment')); ?></textarea>
                                                            <button type="submit" class="btn btn-main-masai">ارسال برای
                                                                تایید
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                        </div>
                                        <?php else: ?>
                                            <form method="POST"
                                                  action="<?php echo e(route('insert_comment',['slug'=>$product['slug']])); ?>">
                                                <?php echo csrf_field(); ?>
                                                <textarea name="comment" class="form-control"
                                                          placeholder="متن نظر و پرسش"
                                                          rows="4"><?php echo e(old('comment')); ?></textarea>
                                                <button type="submit" class="btn btn-main-masai">ارسال برای تایید
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-- main -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_js'); ?>
    <!-- custom Js -->
    <script src="assets/js/main.js" type="text/javascript"></script>
    <!-- only single  -->
    <script src="assets/css/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script>
        function copyElementText(id) {
            var text = document.getElementById(id).innerText;
            var elem = document.createElement("textarea");
            document.body.appendChild(elem);
            elem.value = text;
            elem.select();
            document.execCommand("copy");
            document.body.removeChild(elem);
        }
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $("area[rel^='prettyPhoto']").prettyPhoto();

            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'normal',
                theme: 'light_square',
                slideshow: 3000,
                autoplay_slideshow: false
            });
            $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'fast',
                slideshow: 10000,
                hideflash: true
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_Master.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\single-product.blade.php ENDPATH**/ ?>