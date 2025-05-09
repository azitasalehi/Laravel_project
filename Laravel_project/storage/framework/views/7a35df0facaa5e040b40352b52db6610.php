<?php use Morilog\Jalali\Jalalian; ?>
<?php use Illuminate\Support\Str; ?>



<?php $__env->startSection('extra_link'); ?>
    <link href="<?php echo e(asset('assets/css/nouislider.min.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <main class="category-blog default space-top-30">
        <div class="container ">

            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="breadcrumb">
                            <li>
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </li>

                            <li>
                                <a href="#"><span>بلاگ</span></a>
                            </li>
                            <li>
                                <a href="category-blog.html"><span>اخبار روز تکنولوژی</span></a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="single_blog_content cat_blog_content col-12 col-lg-9 mx-auto order-1 order-sm-1 ">
                    <div class="row listing-items Blog-category">
                        <?php $__currentLoopData = $magazines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $magazine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12  ">
                                <div class="blog_tag">
                                    <a href="<?php echo e(route('single_blog',['slug'=>$magazine['slug']])); ?>">
                                        <img src="<?php echo e(asset($magazine['image'])); ?>" class="img-fluid" alt="">
                                    </a>
                                    <a href="<?php echo e(route('single_blog',['slug'=>$magazine['slug']])); ?>">
                                        <h2 class="Blog_title">
                                            <?php echo e(Str::limit($magazine['title'],80)); ?></h2>
                                    </a>
                                    <div class="Blog_list">
                                        <span class="Blog_author">
                                            <i class="fa fa-user"></i>
                                            <?php echo e($magazine->user['name']); ?>

                                        </span>
                                        <span class="Blog_Date">
                                            <i class="fa fa-calendar "></i>
                                        <?php echo e($date=Jalalian::forge($magazine['created_at'])->format(' %d %B %Y')); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                </div>
                <div class="col-12 col-lg-3 ">

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
                                        <?php $__currentLoopData = $magazines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $magazine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('_Master.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\project-laravel\resources\views\category-blog.blade.php ENDPATH**/ ?>