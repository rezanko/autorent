
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">&times;</button>
    <h4 class="modal-title">Cek Bukti Pembayaran</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">

        <?php echo Form::open(['id'=>'validbayar','name'=>'validbayar','action'=>'OrderController@confirmBayar']); ?>

            <?php echo Form::hidden('order_id',$order->id); ?>

        <?php echo Form::close(); ?>


        <?php echo Form::open(['id'=>'invalidbayar','name'=>'invalidbayar','action'=>'OrderController@invalidBayar']); ?>

            <?php echo Form::hidden('order_id',$order->id); ?>

        <?php echo Form::close(); ?>



        <div class="row">
            <div class="col-md-14">
                <h4>Cek Pembayaran Pelanggan berikut dengan cermat :</h4>
                <table  class="table">
                    <tr>
                        <th>ID</th>
                        <th>Atas Nama</th>
                        <th>Tanggal Transaksi</th>
                        <th>Dibayar Pada</th>
                        <th>Total Biaya</th>
                    </tr>

                        <tr>
                            <td><?php echo e($order->id); ?></td>
                            <td><?php echo e($order->User->name); ?></td>
                            <td><?php echo e($order->created_at); ?></td>
                            <td><?php echo e($bayar->created_at); ?></td>
                            <td><?php echo e('Rp. '.$order->total); ?></td>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="thumbnail">
                <img src="<?php echo e(URL::asset('/public/images/pembayaran/'.$bayar->pic)); ?>">
            </div>
        </div>

    </form>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">Close</button>
    <button type="submit" form="invalidbayar" class="btn btn-danger">Invalidasi Pembayaran</button>
    <button type="submit" form="validbayar" class="btn btn-success">Konfirmasi Pembayaran</button>
</div>

<form id="close-modal" action="<?php echo e(Session::forget('order','bayar')); ?>" style="display: none;">
</form>
