
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">&times;</button>
    <h4 class="modal-title">Upload Bukti Pembayaran</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">

        <?php echo Form::open(['id'=>'bayar','name'=>'bayar','action'=>'OrderController@buktiBayar', 'files'=>true]); ?>

        <?php echo e(csrf_field()); ?>


        <?php echo Form::hidden('order_id',$order->id); ?>


        <div class="row">
            <div class="col-md-10">
                <h4>Silahkan mengupload bukti pembayaran untuk order dengan detil sebagai berikut :</h4>
                <table  class="table">
                    <tr>
                        <th>ID</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Biaya</th>
                    </tr>

                        <tr>
                            <td><?php echo e($order->id); ?></td>
                            <td><?php echo e($order->created_at); ?></td>
                            <td><?php echo e('Rp. '.$order->total); ?></td>
                </table>
            </div>
        </div>

        <div class="form-group">
            <label for="pic" class="control-label">Upload Gambar</label>
            <input id="pic" type="file" class="form-control-file" name="pic" required>
            <p class="help-block">Upload gambar/foto bukti pembayaran order yang bersangkutan.</p>
        </div>

    </form>
    <?php echo Form::close(); ?>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">Close</button>
    <button type="submit" form="bayar" class="btn btn-primary">Upload</button>
</div>

<form id="close-modal" action="<?php echo e(Session::forget('sewas')); ?>" style="display: none;">
</form>
