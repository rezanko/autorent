<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Tipe Mobil
                <br><small>Pilih tipe mobil yang anda inginkan!</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="active">Daftar Tipe Mobil</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    


        
            
                
            
            
                
            

              
              
              

        


    
    

        <div class="row">
            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

            <div class="col-sm-6 col-md-4">
                <a href="<?php echo e(url('/types')); ?>/<?php echo e($type->id); ?>">
                <div class="thumbnail">
                    <img class="img-responsive img-hover" src="<?php echo e(URL::asset('public/images/types/'.$type->pic)); ?>" alt="<?php echo e($type->nama); ?>" style="max-height: 150px;">
                    <div class="caption">
                        <h3><a href="<?php echo e(url('/types')); ?>/<?php echo e($type->id); ?>"><?php echo e($type->nama); ?></a></h3>
                        <p>Jenis mobil   : <?php echo e($type->jenis); ?></p>
                        <p>Jumlah Kursi  : <?php echo e($type->kursi); ?></p>
                        <p>Tarif         : Rp. <?php echo e($type->tarif); ?></p>
                    </div>
                </div>
                </a>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>


    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>