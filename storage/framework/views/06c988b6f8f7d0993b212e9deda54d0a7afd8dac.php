<?php $__env->startSection('subtitle','Daftar Order'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <li><a href="<?php echo e(url('/admin')); ?>">Halaman Admin</a></li>
  <li class="active">Daftar Order</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
  <a href="<?php echo e(url('/admin')); ?>" class="list-group-item">Halaman Admin</a>
  <a href="<?php echo e(url('/admin/listuser')); ?>" class="list-group-item">Daftar User</a>
  <a href="<?php echo e(url('/admin/berita')); ?>" class="list-group-item">Manajemen Berita</a>
  <a href="<?php echo e(url('/admin/bukutamu')); ?>" class="list-group-item">Buku Tamu</a>
  <a href="<?php echo e(url('/admin/types')); ?>" class="list-group-item">Manajemen Type Mobil</a>
  <a href="<?php echo e(url('/admin/mobil')); ?>" class="list-group-item">Manajemen Mobil</a>
  <a href="<?php echo e(url('/admin/orders')); ?>" class="list-group-item  active">Daftar Order</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader','Daftar Order'); ?>

<?php $__env->startSection('admincontent'); ?>
<div class="table-responsive">
  <table  class="table">
    <tr>
      <th>ID</th>
      <th>Tanggal Transaksi</th>
      <th>Detil Order</th>
      <th>Total Biaya</th>
      <th>Status Pembayaran</th>
      <th>Aksi</th>
    </tr>

    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <tr>
        <td><?php echo e($order->id); ?></td>
        <td><?php echo e($order->created_at); ?></td>
        <td><a data-toggle="modal" data-target="#modaldetil" href="<?php echo e(url('/orders/'.$order->id)); ?>" class="btn btn-primary">Klik Untuk Lihat</a> </td>
        <td><?php echo e('Rp. '.$order->total); ?></td>
        <td>
          <?php if($order->status_bayar == 2): ?>
            <p class="text-success"><b>Lunas</b></p>
          <?php elseif($order->status_bayar == 1): ?>
                <p class="text-warning"><b>Menunggu Konfirmasi</b></p>
          <?php else: ?>
                <p class="text-danger"><b>Belum Terbayar</b></p>
          <?php endif; ?>
        </td>
        <td align="center">
          <?php if($order->status_bayar == null || $order->status_bayar == 0): ?>
            <a data-toggle="modal" data-target="#modalkonfirm" href="<?php echo e(url('/orders/'.$order->id.'/bayar')); ?>" class="btn btn-warning">Upload Bukti Bayar</a>

          <?php elseif($order->status_bayar == 1): ?>
            <a data-toggle="modal" data-target="#modalcekbayar" href="<?php echo e(url('/admin/orders/cek-bayar/'.$order->id)); ?>" class="btn btn-info">Cek Bukti Pembayaran</a>
          <?php else: ?>
                <a href="<?php echo e(url('/orders/'.$order->id.'/invoice')); ?>" class="btn btn-success">Download Invoice</a>
          <?php endif; ?>
        </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </table>
</div>

<!-- Modal -->
<div id="modaldetil" class="modal fade" role="dialog">
  <div class="container">

    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalkonfirm" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>


<div id="modalcekbayar" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>