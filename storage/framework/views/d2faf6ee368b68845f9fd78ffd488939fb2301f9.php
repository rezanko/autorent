<?php $__env->startSection('content'); ?>

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Diri Pengguna
                  <br><small><?php echo e($user->name); ?></small>
                </h1>

                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Data Diri Pengguna</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

            <?php if(count($errors) > 0): ?>
              <div class="alert alert-danger" role="alert">
                  <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                          <li><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </ul>
              </div>
            <?php endif; ?>

            <?php if(session('sukses')): ?>
              <div class="alert alert-success" role="alert"><b>Sukses!</b> Data Diri Anda berhasil diubah!</div>
            <?php endif; ?>

              <div class="panel panel-default">
                  <div class="panel-heading">Data Diri Anda :</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/data_diri/update')); ?>">
                          <?php echo e(csrf_field()); ?>


                          <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                              <label for="name" class="col-md-4 control-label">Nama</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" required autofocus>

                                  <?php if($errors->has('name')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('name')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>

                          <div class="form-group<?php echo e($errors->has('ktp') ? ' has-error' : ''); ?>">
                              <label for="ktp" class="col-md-4 control-label">No. KTP</label>

                              <div class="col-md-6">
                                  <input id="ktp" type="text" class="form-control" name="ktp" value="<?php echo e($user->ktp); ?>" required>

                                  <?php if($errors->has('ktp')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('ktp')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>

                          <div class="form-group<?php echo e($errors->has('sim') ? ' has-error' : ''); ?>">
                              <label for="sim" class="col-md-4 control-label">No. SIM (optional)</label>

                              <div class="col-md-6">
                                  <input id="sim" type="text" class="form-control" name="sim" value="<?php echo e($user->sim); ?>">

                                  <?php if($errors->has('sim')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('sim')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>

                          <div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
                              <label for="alamat" class="col-md-4 control-label">Alamat</label>

                              <div class="col-md-6">
                                  <textarea id="alamat" type="text" class="form-control" name="alamat" rows="4" required><?php echo e($user->alamat); ?></textarea>

                                  <?php if($errors->has('alamat')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('alamat')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Update Data Diri
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
        <!-- /.row -->

        <hr>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>