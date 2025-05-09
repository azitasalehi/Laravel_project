<?php use Illuminate\Support\Str; ?>
<?php use Morilog\Jalali\Jalalian; ?>


<?php $__env->startSection('extra_link'); ?>
    <link href="<?php echo e(asset('assets/css/nouislider.min.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .single_blog_content {
            background-color: #ffffff; /* پس‌زمینه مقالات */
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <main class="cart-page default ">
        <div class="container">
            <div class="container">
                <div class="row">
                    <!-- Sidebar - دسته‌بندی‌ها -->
                    <div class="col-12 col-lg-3 order-1 order-lg-1">
                        <div class="sidebar_blog ">
                            <div class="widget_blog">
                                <div class="widget_blog_headbox">
                                    <h3 class="p-2"> دسته بندی ها </h3>
                                </div>
                                <div class="blog_list_widget_blog">
                                    <div class="widget_blog_groups">
                                        <ul class="widget_blog_posts">
                                            <?php $__currentLoopData = $_mag_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mag_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a class="widget_blog_title_link"
                                                       href="<?php echo e(route('cat',['id'=>$mag_cat['id'],'slug'=>$mag_cat['slug']])); ?>"><?php echo e($mag_cat['title']); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div><!-- end blog-list -->
                            </div>
                            <div class="widget_blog marg_top20">
                                <div class="widget_blog_headbox">
                                    <h3 class="p-2">آخرین مقالات </h3>
                                </div>
                                <div class="blog_list_widget_blog">
                                    <div class="widget_blog_groups">
                                        <ul class="widget_blog_posts">
                                            <?php $__currentLoopData = $_magazines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $magazine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a class="widget_blog_title_link"
                                                       href="<?php echo e(route('single_blog',['slug'=>$magazine['slug']])); ?>"><?php echo e(Str::limit($magazine['title'],70)); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div><!-- end blog-list -->
                            </div>

                        </div>

                    </div>

                    <!-- مقالات -->
                    <div class="col-12 col-lg-8 order-2">
                        <?php $__currentLoopData = $magazines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $magazine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single_blog_content mb-4">
                                <header class="card-header">
                                    <h3 class="card-title"><span><?php echo e($magazine['title']); ?></span></h3>
                                </header>
                                <div class="single_blog_page">
                                    <img src="<?php echo e(asset($magazine['image'])); ?>" alt="Image" class="img-fluid"/>
                                    <div class="data_det mt-2">
                        <span class="publish_date">
                            <i class="fa fa-clock"></i>
                            <?php echo e(Jalalian::forge($magazine['created_at'])->format(' %d %B %Y')); ?>

                        </span>
                                        <span class="author">
                            <i class="fa fa-user-alt"></i>
                            نویسنده: <?php echo e($magazine->user->name); ?>

                        </span>
                                        <span class="category">
                            <i class="fa fa-folder"></i>
                            <a href=""><?php echo e($magazine->mag_category->title); ?></a>
                        </span>
                                        <span class="visitors">
                            <i class="fa fa-eye"></i> <?php echo e($magazine['view']); ?> بازدید
                        </span>
                                    </div>
                                    <p class="p-3"><?php echo e($magazine['body']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_Master.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\category.blade.php ENDPATH**/ ?>