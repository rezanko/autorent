<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Berita
                
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="active">Berita</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-5">
                <a href="<?php echo e(url('/berita/'.$berita->id)); ?>">
                    <img class="img-responsive img-hover" src="<?php echo e(URL::asset('public/images/berita/'.$berita->pic)); ?>" alt="">
                </a>
            </div>
            <div class="col-md-6" >
                <h3>
                    <a href="<?php echo e(url('/berita/'.$berita->id)); ?>"><?php echo e($berita->judul); ?></a>
                </h3>
                <p style="color: gray">Posted on <?php echo e($berita->updated_at); ?>

                </p>
                <p style="display:block; max-height: 5.6em;overflow: hidden;word-wrap: break-word;text-overflow: ellipsis;"><?php echo e($berita->isi); ?></p>
                <a class="btn btn-primary" href="<?php echo e(url('/berita/'.$berita->id)); ?>">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <!-- Pager -->
    <div class="row">
        <ul class="pager">
            <li class="previous"><a href="#">&larr; Older</a>
            </li>
            <li class="next"><a href="#">Newer &rarr;</a>
            </li>
        </ul>
    </div>
    <!-- /.row -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>