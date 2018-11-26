<?php $__env->startSection('content'); ?>

    <?php 
        $total = array();
     ?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Shopping Cart
                
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <table  class="table table-responsive table">
                <tr>
                    <th>Tipe Mobil</th>
                    <th>Plat Nomor</th>
                    <th>Tgl. Sewa</th>
                    <th>Tgl. Kembali</th>
                    <th>Tarif harian</th>
                    <th>Biaya Sewa</th>
                    <th>Biaya Sopir</th>
                    <th>Sub-Total</th>
                    <th>Delete</th>
                </tr>

                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($cart->Mobil->Type->nama); ?></td>
                    <td><?php echo e($cart->Mobil->plat_nomor); ?></td>
                    <td><?php echo e($cart->tgl_sewa); ?></td>
                    <td><?php echo e($cart->tgl_kembali); ?></td>
                    <td><?php echo e('Rp.'.$cart->Mobil->Type->tarif); ?></td>
                    <td>
                        <?php 
                            if($cart->tgl_sewa == $cart->tgl_kembali)
                            {
                                $lamasewa = 1;
                            }
                            else
                            {
                                $date1 = new DateTime($cart->tgl_sewa);
                                $date2 = new DateTime($cart->tgl_kembali);

                                $lamasewa =  $date1->diff($date2)->days + 1;
                            }
                            $biayasewa = $lamasewa * $cart->Mobil->Type->tarif;
                            echo 'Rp.'.$biayasewa;
                         ?>
                    </td>
                    <td>
                            <?php 
                                if($cart->with_sopir)
                                {
                                    $sopir = $lamasewa*100000;
                                }
                                else
                                {
                                    $sopir = 0;
                                }
                                echo 'Rp.'.$sopir;
                             ?>
                    </td>
                    <td>
                        <?php 
                            array_push($total,$cart->subtotal);
                         ?>
                        <?php echo e('Rp.'.($cart->subtotal)); ?>

                    </td>
                    <td><a href="<?php echo e(url('/cart/'.$cart->id.'/del')); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td colspan="7" align="right"><h3>Total :</h3></td>
                    <td colspan="2"><h3>Rp. <?php echo e(array_sum($total)); ?></h3></td>
                </tr>
                <tr>
                    <td colspan="7" align="right"><a href="<?php echo e(url('/types')); ?>" class="btn btn-warning">Tambah Sewa Mobil</a> </td>
                    <?php if($carts->count() != 0): ?>
                        <td colspan="2" align="right"><a href="<?php echo e(url('/cart/checkout')); ?>" class="btn btn-primary">Checkout Order</a></td>
                    <?php else: ?>
                        <td colspan="2" align="right"><a href="<?php echo e(url('/cart/checkout')); ?>" class="btn btn-primary disabled">Checkout Order</a></td>
                    <?php endif; ?>
                </tr>
            </table>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>