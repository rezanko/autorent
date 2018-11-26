
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Type Mobil</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
        <?php echo Form::open(['id'=>'addber','name'=>'addber','action'=>'TypeController@saveAddType', 'files'=>true]); ?>


       <div class="form-group">
           <?php echo Form::label('nama','Nama Type',['class' => 'control-label']); ?>

           <?php echo Form::text('nama','',['class' => 'form-control']); ?>

       </div>

        <div class="form-group">
            <?php echo Form::label('jenis','Jenis Type',['class' => 'control-label']); ?>

            <?php echo Form::text('jenis','',['class' => 'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('kursi','Jml. Kursi',['class' => 'control-label']); ?>

            <?php echo Form::number('kursi','',['class' => 'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('tarif','Tarif Sewa',['class' => 'control-label']); ?>

            <?php echo Form::number('tarif','',['class' => 'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('pic','Upload Gambar Mobil',['class' => 'control-label']); ?>

            <?php echo Form::file('pic',['class' => 'form-control-file']); ?>

        </div>
    <?php echo Form::close(); ?>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
    <button type="submit" form="addber" class="btn btn-primary">Add Type</button>
</div>
