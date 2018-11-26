
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Sewa Mobil</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
    <div class="container">
        <h4><?php echo e($mobil->Type->nama); ?></h4>
        <div class="col-sm-3">
            <img class="img-responsive img-related" src="<?php echo e(URL::asset('public/images/types/'.$mobil->Type->pic)); ?>" >
        </div>
        <div class="col-sm-3">
            <div class="caption">
                <h4><b>Detail Mobil :</b></h4>
                <p>Plat Nomor : <?php echo e($mobil->plat_nomor); ?></p>
                <p>Warna Mobil : <?php echo e($mobil->warna); ?></p>
                <p>Tahun : <?php echo e($mobil->tahun); ?></p>
                <p>Jml. Kursi : <?php echo e($mobil->Type->kursi); ?></p>
                <p>Tarif Sewa (per Hari) : <?php echo e($mobil->Type->tarif); ?></p>
            </div>
        </div>
    </div>

    <hr>

    <?php echo Form::open(['id'=>'sewa','name'=>'sewa','action'=>'CartController@addToCart']); ?>


    <?php echo Form::hidden('mobil_id',$mobil->id); ?>


    <div class="form-group">
        <?php echo Form::label('tgl_sewa','Tanggal Sewa',['class' => 'control-label']); ?>

        <?php echo Form::date('tgl_sewa', \Carbon\Carbon::now(),['class'=>'form-control','min'=>\Carbon\Carbon::now()]); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('lama_sewa','Durasi penyewaan (hari)',['class' => 'control-label']); ?>

        <?php echo Form::number('lama_sewa',1,['class' => 'form-control']); ?>

    </div>

    <div class="form-group">

        <?php echo Form::checkbox('with_sopir', 1); ?>

        <?php echo Form::label('with_sopir','Pakai Sopir? (Tambahan biaya Rp.100.000 per-hari)',['class' => 'control-label']); ?>

    </div>

    <?php echo Form::close(); ?>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
    <button type="submit" form="sewa" class="btn btn-primary">Menyewa</button>
</div>
