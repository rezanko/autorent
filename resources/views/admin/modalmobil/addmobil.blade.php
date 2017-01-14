
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Mobil</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
        {!! Form::open(['id'=>'addmobil','name'=>'addmobil','action'=>'MobilController@saveAddMobil', 'files'=>true])  !!}

        {{--dropdown jenis mobil--}}



    <div class="form-group">
        {!! Form::label('type_id','Type Mobil',['class' => 'control-label']) !!}
        {!! Form::select('type_id',$array, null, ['class'=>'form-control','placeholder' => 'Pilih tipe mobil...']) !!}
    </div>

       <div class="form-group">
           {!! Form::label('plat_nomor','Plat Nomor',['class' => 'control-label']) !!}
           {!! Form::text('plat_nomor','',['class' => 'form-control']) !!}
       </div>

        <div class="form-group">
            {!! Form::label('warna','Warna Mobil',['class' => 'control-label']) !!}
            {!! Form::text('warna','',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tahun','Tahun',['class' => 'control-label']) !!}
            {!! Form::text('tahun','',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('pic','Upload Gambar Mobil',['class' => 'control-label']) !!}
            {!! Form::file('pic',['class' => 'form-control-file']) !!}
        </div>
    {!! Form::close() !!}
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
    <button type="submit" form="addmobil" class="btn btn-primary">Add Mobil</button>
</div>
