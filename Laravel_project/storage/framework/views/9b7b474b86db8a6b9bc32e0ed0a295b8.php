
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
        <div class="row">
            <div class="main-content login_content  col-12 col-md-7 col-lg-5 mx-auto">
                <header class="card-header">
                    <h3 class="card-title"><span>ورود به حساب کاربری</span></h3>
                </header>
                <div class="login_box">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                            <div class="form-account-title"><span>*</span> نام کاربری</div>
                            <div class="form-account-row">
                                    <input id="email" type="email"  class="input_second input_all <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder=" نام کاربری شما" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            </div>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback mb-1" role="alert">
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
                                    <div class="form-account-row">
                                    <input  id="password" class="input_all input_second  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password"  type="password" placeholder=" کلمه عبور شما">

                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback mb-1" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-6">
                                <div class="form-account-agree">
                                    <label class="checkbox-form checkbox-primary">
                                        <input class="checkbox-check" id="agree" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <span class="checkbox-check"></span>
                                    </label>
                                    <label for="remember"> مرا به خاطر بسپار</label>
                                </div>
                        </div>
                                    <button type="submit" class="btn big_btn btn-main-masai">ورود  </button>
                                </div>
                                <div class="col-12 footer_login_reg text--center">
                                    <p>
                                        <span>کاربر جدید هستید؟</span>
                                        <a href="<?php echo e(route('register')); ?>" >ثبت نام</a>

                                    </p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\auth\login.blade.php ENDPATH**/ ?>