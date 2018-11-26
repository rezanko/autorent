<div class="modal-header">
    <a href="<?php echo e(url('/admin/types')); ?>"><button type="button" class="close">&times;</button></a>
    <h4 class="modal-title">Edit Type Mobil</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
    
        

    <?php echo Form::model($type,['id'=>'edittype','name'=>'edittype','action'=>['TypeController@saveEditType',$type->id],'files'=>'true']); ?>

    <div class="form-group">
        <?php echo Form::label('nama','Nama Type',['class' => 'control-label']); ?>

        <?php echo Form::text('nama',$type->nama,['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('jenis','Jenis Type',['class' => 'control-label']); ?>

        <?php echo Form::text('jenis',$type->jenis,['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('kursi','Jml. Kursi',['class' => 'control-label']); ?>

        <?php echo Form::number('kursi',$type->kursi,['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('tarif','Tarif Sewa',['class' => 'control-label']); ?>

        <?php echo Form::number('tarif',$type->tarif,['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('pic','Upload Gambar Mobil',['class' => 'control-label']); ?>

        <?php echo Form::file('pic',['class' => 'form-control-file']); ?>

    </div>
    <?php echo Form::close(); ?>


</div>

<div class="modal-footer">
    <a href="<?php echo e(url('/admin/types')); ?>"><button type="button" class="btn btn-warning pull-left">Close</button></a>
    <button type="submit" form="edittype" class="btn btn-primary">Edit Type</button>
</div>