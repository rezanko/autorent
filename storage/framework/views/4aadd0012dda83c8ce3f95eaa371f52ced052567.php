
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">&times;</button>
    <h4 class="modal-title">Detil Order</h4>
</div>

<div class="modal-content" style="padding:40px 50px;">
    
    <div class="col-md-6">
        <h3>Order ID : <b><?php echo e($order->id); ?></b></h3>
        <h4>Atas Nama : <b><?php echo e($order->User->name); ?></b></h4>
        <h4>No. KTP : <b><?php echo e($order->User->ktp); ?></b></h4>
        <h4>Tgl. Order : <b><?php echo e($order->created_at); ?></b></h4>
        <br>
    </div>


        <table class="table">
            <tr>
                <th>Tipe Mobil</th>
                <th>Plat Nomor</th>
                <th>Tgl. Sewa</th>
                <th>Tgl. Kembali</th>
                <th>Tarif harian</th>
                <th>Biaya Sewa</th>
                <th>Biaya Sopir</th>
                <th>Sub-Total</th>
                <th>Status Sewa</th>
            </tr>

            <?php $__currentLoopData = $sewas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sewa): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($sewa->Mobil->Type->nama); ?></td>
                    <td><?php echo e($sewa->Mobil->plat_nomor); ?></td>
                    <td><?php echo e($sewa->tgl_sewa); ?></td>
                    <td><?php echo e($sewa->tgl_kembali); ?></td>
                    <td><?php echo e('Rp.'.$sewa->Mobil->Type->tarif); ?></td>
                    <td>
                        <?php 
                            if($sewa->tgl_sewa == $sewa->tgl_kembali)
                            {
                                $lamasewa = 1;
                            }
                            else
                            {
                                $date1 = new DateTime($sewa->tgl_sewa);
                                $date2 = new DateTime($sewa->tgl_kembali);

                                $lamasewa =  $date1->diff($date2)->days + 1;
                            }
                            $biayasewa = $lamasewa * $sewa->Mobil->Type->tarif;
                            echo 'Rp.'.$biayasewa;
                         ?>
                    </td>
                    <td>
                        <?php 
                            if($sewa->with_sopir)
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
                        <?php echo e('Rp.'.($biayasewa+$sopir)); ?>

                    </td>
                    <td>Under Construction</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>

    

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">Close</button>
</div>

<form id="close-modal" action="<?php echo e(Session::forget('sewas')); ?>" style="display: none;">
</form>