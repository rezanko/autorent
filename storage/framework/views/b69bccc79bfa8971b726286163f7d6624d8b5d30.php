<?php $__env->startSection('subtitle','Manajemen Berita'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <li><a href="<?php echo e(url('/admin')); ?>">Halaman Admin</a></li>
  <li class="active">Manajemen Berita</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
  <a href="<?php echo e(url('/admin')); ?>" class="list-group-item">Halaman Admin</a>
  <a href="<?php echo e(url('/admin/listuser')); ?>" class="list-group-item">Daftar User</a>
  <a href="<?php echo e(url('/admin/berita')); ?>" class="list-group-item active">Manajemen Berita</a>
  <a href="<?php echo e(url('/admin/bukutamu')); ?>" class="list-group-item">Buku Tamu</a>
  <a href="<?php echo e(url('/admin/types')); ?>" class="list-group-item">Manajemen Type Mobil</a>
  <a href="<?php echo e(url('/admin/mobil')); ?>" class="list-group-item">Manajemen Mobil</a>
  <a href="<?php echo e(url('/admin/orders')); ?>" class="list-group-item">Daftar Order</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader','Manajemen Berita'); ?>

<?php $__env->startSection('admincontent'); ?>
<div class="table-responsive">
  <br>
  <a data-toggle="modal" data-target="#modaladdberita" href="<?php echo e(url('/admin/berita/add')); ?>"> <button type="button" name="addberita" class="btn btn-primary">Add Berita</button></a>
  <br><br>
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Judul</th>
     <th>Picture</th>
     <th>Konten</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>

   <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr>
      <td><?php echo e($berita->id); ?></td>
      <td><?php echo e($berita->judul); ?></td>
      <td><?php echo e($berita->pic); ?></td>
      <td style="display:block; max-height: 5em;overflow: hidden;word-wrap: break-word;text-overflow: ellipsis;"><?php echo e($berita->isi); ?></td>
      <td> <a data-toggle="modal" data-target="#modaleditberita" href="<?php echo e(url('/admin/berita/edit')); ?>/<?php echo e($berita->id); ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
      <td><a href="<?php echo e(url('/admin/berita/del')); ?>/<?php echo e($berita->id); ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>

    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

 </table>
</div>

<!-- Modal -->
<div id="modaladdberita" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modaleditberita" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>