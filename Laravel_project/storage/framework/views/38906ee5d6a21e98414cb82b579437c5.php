
<?php $__env->startSection('extra-links'); ?>
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/main.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="main-content login_content  col-12 col-md-7 col-lg-5 mx-auto">
                    <header class="card-header">
                        <h3 class="card-title"><span>به مَسای خوش آمدید</span></h3>
                    </header>
                    <div class="login_box">
                        <form class="">
                            <div class="row">
                                <?php if(session('status')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>
                                <div class="col-12  ">
                                    <img class="img-thumbnail" src="<?php echo e(asset('assets/img/hello.gif')); ?>" />
                                </div>
                                <div class="col-12 text--center">
                                    <a href="<?php echo e(route('index')); ?>" class="btn big_btn btn-main-masai">صفحه اصلی  </a>
                                </div>
                                <div class="col-12 footer_login_reg text--center">
                                    <p>
                                        <span>بازگشتن به </span>
                                        <a href="<?php echo e(route('login')); ?>">صفحه‌ای  </a>
                                        <span>که در آن بودید </span>
                                    </p>

                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\home.blade.php ENDPATH**/ ?>