<?php use Morilog\Jalali\Jalalian; ?>
<?php use Illuminate\Support\Str; ?>


<?php $__env->startSection('extra_link'); ?>
    <link href="<?php echo e(asset('assets/css/nouislider.min.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <main class="cart-page default ">
        <div class="container">
            <div class="row">
                <div class="single_blog_content col-12 col-lg-9 mx-auto order-1 order-sm-1 ">
                    <header class="card-header">
                        <h3 class="card-title"><span><?php echo e($mag['title']); ?></span></h3>
                    </header>
                    <div class="single_blog_page">
                        <div class="single_blog_box_content">
                            <form class="form-account">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <img src="<?php echo e(asset($mag['image'])); ?>"/>
                                        <div class="data_det">
                                                <span class="publish_date">
                                                    <i class="fa fa-clock"></i>
                                                   <?php echo e($date = Jalalian::forge($mag['created_at'])->format(' %d %B %Y')); ?>

                                                </span>
                                            <span class="author">
                                                    <i class="fa fa-user-alt"></i>
                                                    نویسنده<a href=""> <?php echo e($mag->user->name); ?></a></span>
                                            <span class="categoey">
                                                    <i class="fa fa-folder"></i>
                                                    <a href="<?php echo e(route('cat',['id'=>$mag['mag_category_id'],'slug'=>$mag['slug']])); ?>"
                                                       rel="category tag"><?php echo e($mag->mag_category->title); ?></a>
                                                </span>
                                            <span class="visitors">
                                                    <i class="fa fa-eye"></i> <?php echo e($mag->view); ?> بازدید
                                                </span>
                                        </div>
                                        <p class="p-5"><?php echo e($mag['body']); ?></p>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">

                    <div class="sidebar_blog">
                        <div class="widget_blog">
                            <div class="widget_blog_headbox">
                                <h3> دسته بندی ها </h3>
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
                                <h3>آخرین مقالات </h3>
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
            </div>
        </div>

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_Master.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\single-blog.blade.php ENDPATH**/ ?>