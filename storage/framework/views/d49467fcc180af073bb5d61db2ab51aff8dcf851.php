<?php $__env->startSection('content'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo e($type->nama); ?>

                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li><a href="<?php echo e(url('/types')); ?>">Daftar Type Mobil</a>
                    </li>
                    <li class="active"><?php echo e($type->nama); ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row thumbnail">
            <div class="col-md-5">
                <img class="img-responsive" src="<?php echo e(URL::asset('public/images/types/'.$type->pic)); ?>" alt="<?php echo e($type->nama); ?>" style="max-height: 400px;">
            </div>

            <div class="col-md-6">
                <h3>Spesifikasi Mobil :</h3>
                <ul>
                    <li>Jenis Mobil : <?php echo e($type->jenis); ?></li>
                    <li>Jml. Kursi : <?php echo e($type->kursi); ?></li>
                    <li>Tarif Sewa : Rp. <?php echo e($type->tarif); ?></li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Mobil Yang Tersedia :</h3>
            </div>

            <?php if($mobils->count()==0): ?>
                <div class="col-lg-12">
                    <h3>Coming Soon!!</h3>
                </div>
            <?php else: ?>
                <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img class="img-responsive img-hover img-related" src="<?php echo e(URL::asset('public/images/types/'.$type->pic)); ?>" alt="">
                            <div class="caption">
                                <h4><b>Detail Mobil :</b></h4>
                                <p>Plat Nomor : <?php echo e($mobil->plat_nomor); ?></p>
                                <p>Warna Mobil : <?php echo e($mobil->warna); ?></p>
                                <p>Tahun : <?php echo e($mobil->tahun); ?></p>
                                <br>
                                <p>
                                    <a data-toggle="modal" data-target="#modaljadwalsewa" href="<?php echo e(url('/types/'.$type->id.'/jadwal-sewa/'.$mobil->id)); ?>" class="btn btn-warning">Jadwal Sewa</a> <a data-toggle="modal" data-target="#modalsewamobil" href="<?php echo e(url('/sewa/'.$mobil->id)); ?>" class="btn btn-primary">Sewa Mobil Ini</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            <?php endif; ?>
        </div>
</div>

    <!-- Modal -->
    <div id="modalsewamobil" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modaljadwalsewa" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>