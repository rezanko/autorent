<?php $__env->startSection('content'); ?>


<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Orders
                
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="active">Orders</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
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
                    <td>
                        <?php if($order->status_bayar == null || $order->status_bayar == 0): ?>
                            <a data-toggle="modal" data-target="#modalkonfirm" href="<?php echo e(url('/orders/'.$order->id.'/bayar')); ?>" class="btn btn-warning">Upload Bukti Bayar</a>

                        <?php elseif($order->status_bayar == 1): ?>
                            <a href="#" class="btn btn-warning disabled">Upload Bukti Bayar</a>
                        <?php else: ?>
                            <a href="<?php echo e(url('/orders/'.$order->id.'/invoice')); ?>" class="btn btn-success">Download Invoice</a>
                        <?php endif; ?>
                    </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </table>
        </div>
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


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>