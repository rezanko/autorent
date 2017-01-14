
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Type Mobil</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
        {!! Form::open(['id'=>'addber','name'=>'addber','action'=>'TypeController@saveAddType', 'files'=>true])  !!}

       <div class="form-group">
           {!! Form::label('nama','Nama Type',['class' => 'control-label']) !!}
           {!! Form::text('nama','',['class' => 'form-control']) !!}
       </div>

        <div class="form-group">
            {!! Form::label('jenis','Jenis Type',['class' => 'control-label']) !!}
            {!! Form::text('jenis','',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('kursi','Jml. Kursi',['class' => 'control-label']) !!}
            {!! Form::number('kursi','',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tarif','Tarif Sewa',['class' => 'control-label']) !!}
            {!! Form::number('tarif','',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('pic','Upload Gambar Mobil',['class' => 'control-label']) !!}
            {!! Form::file('pic',['class' => 'form-control-file']) !!}
        </div>
    {!! Form::close() !!}
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
    <button type="submit" form="addber" class="btn btn-primary">Add Type</button>
</div>
