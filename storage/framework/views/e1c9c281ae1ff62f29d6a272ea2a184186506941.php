<?php $__env->startSection('subtitle','Daftar User'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <li><a href="<?php echo e(url('/admin')); ?>">Halaman Admin</a></li>
  <li class="active">Daftar User</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
  <a href="<?php echo e(url('/admin')); ?>" class="list-group-item">Halaman Admin</a>
  <a href="<?php echo e(url('/admin/listuser')); ?>" class="list-group-item active">Daftar User</a>
  <a href="<?php echo e(url('/admin/berita')); ?>" class="list-group-item">Manajemen Berita</a>
  <a href="<?php echo e(url('/admin/bukutamu')); ?>" class="list-group-item">Buku Tamu</a>
  <a href="<?php echo e(url('/admin/types')); ?>" class="list-group-item">Manajemen Type Mobil</a>
  <a href="<?php echo e(url('/admin/mobil')); ?>" class="list-group-item">Manajemen Mobil</a>
  <a href="<?php echo e(url('/admin/orders')); ?>" class="list-group-item">Daftar Order</a>
  <a href="<?php echo e(url('/admin/pembayaran')); ?>" class="list-group-item">Konfirmasi Pembayaran</a>
  <a href="<?php echo e(url('/admin/sewa')); ?>" class="list-group-item">Daftar Sewa Mobil</a>
  <a href="<?php echo e(url('/admin/pengembalian')); ?>" class="list-group-item">Pengembalian Mobil</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader','Daftar User'); ?>

<?php $__env->startSection('admincontent'); ?>
<div class="table-responsive">
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Nama</th>
     <th>Email</th>
     <th>No. KTP</th>
     <th>No. SIM</th>
     <th>Status</th>
     <th>Delete</th>
   </tr>

   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr>
      <td><?php echo e($user->id); ?></td>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td><?php echo e($user->ktp); ?></td>
      <td><?php echo e($user->sim); ?></td>
      <td>
        <?php if($user->admin): ?>
          <?php echo e('Admin'); ?>

        <?php else: ?>
          <?php echo e('User'); ?>

        <?php endif; ?>
      </td>
      <td><a href="<?php echo e(url('/admin/listuser/del')); ?>/<?php echo e($user->id); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>

    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

 </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>