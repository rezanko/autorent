<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Halaman Admin
                <small><?php echo $__env->yieldContent('subtitle'); ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <?php echo $__env->yieldContent('breadcrumb'); ?>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
              <?php echo $__env->yieldContent('list'); ?>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9">
            <h2><?php echo $__env->yieldContent('contentheader'); ?></h2>
            <?php echo $__env->yieldContent('admincontent'); ?>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p> -->
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>