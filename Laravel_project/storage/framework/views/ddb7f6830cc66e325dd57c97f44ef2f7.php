<?php $__env->startSection('main'); ?>
    <main class="page-404">
        <div class="container text-center">
            <div class="flex-container">
                <div class="text-center">
                    <h1>
                        <span class="fade-in" id="digit1">4</span>
                        <span class="fade-in" id="digit2">0</span>
                        <span class="fade-in" id="digit3">4</span>
                    </h1>
                    <h6 class="fadeIn">صفحه‌ای که دنبال آن بودید پیدا نشد!</h6>
                    <a href="<?php echo e(route('index')); ?>" class="btn btn-main-masai">صفحه نخست</a>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_Master.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\errors\404.blade.php ENDPATH**/ ?>