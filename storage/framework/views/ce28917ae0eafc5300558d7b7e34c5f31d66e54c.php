<!-- <?php $__env->startSection('subtitle'); ?> -->

<?php $__env->startSection('breadcrumb'); ?>
  <li class="active">Halaman Admin</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
  <a href="<?php echo e(url('/admin')); ?>" class="list-group-item active">Halaman Admin</a>
  <a href="<?php echo e(url('/admin/listuser')); ?>" class="list-group-item">Daftar User</a>
  <a href="<?php echo e(url('/admin/berita')); ?>" class="list-group-item">Manajemen Berita</a>
  <a href="<?php echo e(url('/admin/bukutamu')); ?>" class="list-group-item">Buku Tamu</a>
  <a href="<?php echo e(url('/admin/types')); ?>" class="list-group-item">Manajemen Type Mobil</a>
  <a href="<?php echo e(url('/admin/mobil')); ?>" class="list-group-item">Manajemen Mobil</a>
  <a href="<?php echo e(url('/admin/orders')); ?>" class="list-group-item">Daftar Order</a>
  <a href="<?php echo e(url('/admin/pembayaran')); ?>" class="list-group-item">Konfirmasi Pembayaran</a>
  <a href="<?php echo e(url('/admin/sewa')); ?>" class="list-group-item">Daftar Sewa Mobil</a>
  <a href="<?php echo e(url('/admin/pengembalian')); ?>" class="list-group-item">Pengembalian Mobil</a>
<?php $__env->stopSection(); ?>

<!-- <?php $__env->startSection('contentheader'); ?> -->

<!-- <?php $__env->startSection('admincontent'); ?> -->

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>