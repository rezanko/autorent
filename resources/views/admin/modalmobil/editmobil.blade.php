<div class="modal-header">
    <a href="{{ url('/admin/mobil') }}"><button type="button" class="close">&times;</button></a>
    <h4 class="modal-title">Edit Mobil</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
    {{--<form id="editber" name="editber" class="form-horizontal" role="form" method="POST" action="{{ url('/admin/berita/edit') }}/{{$berita->id}}/save">--}}
        {{--{!! Form::open(['id'=>'edittype','name'=>'edittype','action'=>['TypeController@saveEditType',$type->id],'files'=>'true']) !!}--}}

    {!! Form::model($mobil,['id'=>'editmobil','name'=>'editmobil','action'=>['MobilController@saveEditMobil',$mobil->id],'files'=>'true']) !!}

    <div class="form-group">
        {!! Form::label('type_id','Type Mobil',['class' => 'control-label']) !!}
        {!! Form::select('type_id',$array, null, ['class'=>'form-control','placeholder' => 'Pilih tipe mobil...']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('plat_nomor','Plat Nomor',['class' => 'control-label']) !!}
        {!! Form::text('plat_nomor',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('warna','Warna Mobil',['class' => 'control-label']) !!}
        {!! Form::text('warna',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tahun','Tahun',['class' => 'control-label']) !!}
        {!! Form::text('tahun',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pic','Upload Gambar Mobil',['class' => 'control-label']) !!}
        {!! Form::file('pic',['class' => 'form-control-file']) !!}
    </div>
    {!! Form::close() !!}

</div>

<div class="modal-footer">
    <a href="{{url('/admin/mobil')}}"><button type="button" class="btn btn-warning pull-left">Close</button></a>
    <button type="submit" form="editmobil" class="btn btn-primary">Edit Mobil</button>
</div>