<?php $__env->startSection('subtitle','Buku Tamu'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <li><a href="<?php echo e(url('/admin')); ?>">Halaman Admin</a></li>
  <li class="active">Buku Tamu</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
  <a href="<?php echo e(url('/admin')); ?>" class="list-group-item">Halaman Admin</a>
  <a href="<?php echo e(url('/admin/listuser')); ?>" class="list-group-item">Daftar User</a>
  <a href="<?php echo e(url('/admin/berita')); ?>" class="list-group-item">Manajemen Berita</a>
  <a href="<?php echo e(url('/admin/bukutamu')); ?>" class="list-group-item active">Buku Tamu</a>
  <a href="<?php echo e(url('/admin/types')); ?>" class="list-group-item">Manajemen Type Mobil</a>
  <a href="<?php echo e(url('/admin/mobil')); ?>" class="list-group-item">Manajemen Mobil</a>
  <a href="<?php echo e(url('/admin/orders')); ?>" class="list-group-item">Daftar Order</a>
  <a href="<?php echo e(url('/admin/pembayaran')); ?>" class="list-group-item">Konfirmasi Pembayaran</a>
  <a href="<?php echo e(url('/admin/sewa')); ?>" class="list-group-item">Daftar Sewa Mobil</a>
  <a href="<?php echo e(url('/admin/pengembalian')); ?>" class="list-group-item">Pengembalian Mobil</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader','Buku Tamu'); ?>

<?php $__env->startSection('admincontent'); ?>
<div class="table-responsive">
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Nama</th>
     <th>No. Telp</th>
     <th>Email</th>
     <th>Pesan</th>
   </tr>

   <?php $__currentLoopData = $tamus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tamu): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr>
      <td><?php echo e($tamu->id); ?></td>
      <td><?php echo e($tamu->nama); ?></td>
      <td><?php echo e($tamu->telp); ?></td>
      <td><?php echo e($tamu->email); ?></td>
      <td><?php echo e($tamu->pesan); ?></td>
    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

 </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>