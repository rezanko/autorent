
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">&times;</button>
    <h4 class="modal-title">Jadwal Sewa Mobil</h4>
</div>

<div class="modal-content" style="padding:40px 50px;">
    
    <div class="col-md-12">
        <h3>Tipe Mobil : <b><?php echo e($mobil->Type->nama); ?></b></h3>
        <h4>Plat Nomor : <b><?php echo e($mobil->plat_nomor); ?></b></h4>
        <h4>Tarif Sewa : <b><?php echo e('Rp.'.$mobil->Type->tarif); ?></b></h4>
        <br>
    </div>

        <table class="table">
            <tr>
                <th>Tgl. Sewa</th>
                <th>Tgl. Kembali</th>
            </tr>

            <?php $__currentLoopData = $mobil->Sewa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sewa): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($sewa->tgl_sewa); ?></td>
                    <td><?php echo e($sewa->tgl_kembali); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </table>

    

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">Close</button>
</div>

<form id="close-modal" action="<?php echo e(Session::forget('mobil')); ?>" style="display: none;">
</form>