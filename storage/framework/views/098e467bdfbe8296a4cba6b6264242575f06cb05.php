<?php $__env->startSection('subtitle','Manajemen Mobil'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <li><a href="<?php echo e(url('/admin')); ?>">Halaman Admin</a></li>
  <li class="active">Manajemen Mobil</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
  <a href="<?php echo e(url('/admin')); ?>" class="list-group-item">Halaman Admin</a>
  <a href="<?php echo e(url('/admin/listuser')); ?>" class="list-group-item">Daftar User</a>
  <a href="<?php echo e(url('/admin/berita')); ?>" class="list-group-item">Manajemen Berita</a>
  <a href="<?php echo e(url('/admin/bukutamu')); ?>" class="list-group-item">Buku Tamu</a>
  <a href="<?php echo e(url('/admin/types')); ?>" class="list-group-item">Manajemen Type Mobil</a>
  <a href="<?php echo e(url('/admin/mobil')); ?>" class="list-group-item" active>Manajemen Mobil</a>
  <a href="<?php echo e(url('/admin/orders')); ?>" class="list-group-item">Daftar Order</a>
  <a href="<?php echo e(url('/admin/pembayaran')); ?>" class="list-group-item">Konfirmasi Pembayaran</a>
  <a href="<?php echo e(url('/admin/sewa')); ?>" class="list-group-item">Daftar Sewa Mobil</a>
  <a href="<?php echo e(url('/admin/pengembalian')); ?>" class="list-group-item">Pengembalian Mobil</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader','Manajemen Mobil'); ?>

<?php $__env->startSection('admincontent'); ?>
<div class="table-responsive">
  <br>
  <a data-toggle="modal" data-target="#modaladdmobil" href="<?php echo e(url('/admin/mobil/add')); ?>"> <button type="button" name="addmobil" class="btn btn-primary">Add Mobil</button></a>
  <br><br>
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Type Mobil</th>
     <th>Plat Nomor</th>
     <th>Warna</th>
     <th>Tahun</th>
     <th>Gambar</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>

   <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr>
      <td><?php echo e($mobil->id); ?></td>
      <td><?php echo e($mobil->Type->nama); ?></td>
      <td><?php echo e($mobil->plat_nomor); ?></td>
      <td><?php echo e($mobil->warna); ?></td>
      <td><?php echo e($mobil->tahun); ?></td>
      <td><?php echo e($mobil->pic); ?></td>
      <td> <a data-toggle="modal" data-target="#modaleditmobil" href="<?php echo e(url('/admin/mobil/edit')); ?>/<?php echo e($mobil->id); ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
      <td><a href="<?php echo e(url('/admin/mobil/del')); ?>/<?php echo e($mobil->id); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>
    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

 </table>
</div>

<!-- Modal -->
<div id="modaladdmobil" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modaleditmobil" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>