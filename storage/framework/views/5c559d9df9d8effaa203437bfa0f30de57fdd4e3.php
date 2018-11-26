<?php $__env->startSection('subtitle','Manajemen Type Mobil'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <li><a href="<?php echo e(url('/admin')); ?>">Halaman Admin</a></li>
  <li class="active">Manajemen Type Mobil</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
  <a href="<?php echo e(url('/admin')); ?>" class="list-group-item">Halaman Admin</a>
  <a href="<?php echo e(url('/admin/listuser')); ?>" class="list-group-item">Daftar User</a>
  <a href="<?php echo e(url('/admin/berita')); ?>" class="list-group-item">Manajemen Berita</a>
  <a href="<?php echo e(url('/admin/bukutamu')); ?>" class="list-group-item">Buku Tamu</a>
  <a href="<?php echo e(url('/admin/types')); ?>" class="list-group-item active">Manajemen Type Mobil</a>
  <a href="<?php echo e(url('/admin/mobil')); ?>" class="list-group-item">Manajemen Mobil</a>
  <a href="<?php echo e(url('/admin/orders')); ?>" class="list-group-item">Daftar Order</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader','Manajemen Type Mobil'); ?>

<?php $__env->startSection('admincontent'); ?>
<div class="table-responsive">
  <br>
  <a data-toggle="modal" data-target="#modaladdtype" href="<?php echo e(url('/admin/types/add')); ?>"> <button type="button" name="addtype" class="btn btn-primary">Add Type Mobil</button></a>
  <br><br>
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Nama</th>
     <th>Jenis</th>
     <th>Jml. Kursi</th>
     <th>Tarif</th>
     <th>Gambar</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>

   <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr>
      <td><?php echo e($type->id); ?></td>
      <td><?php echo e($type->nama); ?></td>
      <td><?php echo e($type->jenis); ?></td>
      <td><?php echo e($type->kursi); ?></td>
      <td><?php echo e($type->tarif); ?></td>
      <td><?php echo e($type->pic); ?></td>
      <td> <a data-toggle="modal" data-target="#modaledittype" href="<?php echo e(url('/admin/types/edit')); ?>/<?php echo e($type->id); ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
      <td><a href="<?php echo e(url('/admin/types/del')); ?>/<?php echo e($type->id); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>

    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

 </table>
</div>

<!-- Modal -->
<div id="modaladdtype" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modaledittype" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>