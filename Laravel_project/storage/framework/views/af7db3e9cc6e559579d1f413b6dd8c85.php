
<?php $__env->startSection('extra-links'); ?>
    <link href="assets/fonts/font-awesome/css/fontawesome.min.css" rel="stylesheet" />
    <link href="assets/fonts/font-awesome/css/solid.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/main_ui.css" rel="stylesheet" />
    <link href="assets/css/icon.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/plugins/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/nouislider.min.css" rel="stylesheet" /><link href="assets/css/main.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="main-content login_content col-12 col-md-7 col-lg-5 mx-auto">
        <header class="card-header">
            <h3 class="card-title"><span>ایجاد حساب کاربری</span></h3>
        </header>
        <div class="login_box">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-account-title"><span>*</span> نام و نام خانوادگی</div>
                                <div class="form-account-row">
                                <input id="name" type="text" class="input_second input_all  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
                                </div>
                                <?php $__errorArgs = ['name'];
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
                            <div class="form-account-title"><span>*</span> ایمیل</div>
                            <div class="form-account-row">
                                <input id="email" type="email" class="input_second input_all <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
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
                                <div class="form-account-title"><span>*</span> کلمه عبور</div>

                                <div class="form-account-row">
                                <input id="password" type="password" class="input_second input_all <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
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
                            <div class="form-account-title"><span>*</span> تکرار کلمه عبور</div>

                            <div class="form-account-row">
                                <input id="password-confirm" type="password" class="input_second input_all" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-12 text--center">
                                <button type="submit" class="btn big_btn btn-main-masai">
                                    <?php echo e(__('ثبت نام')); ?>

                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\auth\register.blade.php ENDPATH**/ ?>