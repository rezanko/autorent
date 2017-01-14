<div class="modal-header">
    <a href="{{ url('/admin/types') }}"><button type="button" class="close">&times;</button></a>
    <h4 class="modal-title">Edit Type Mobil</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">
    {{--<form id="editber" name="editber" class="form-horizontal" role="form" method="POST" action="{{ url('/admin/berita/edit') }}/{{$berita->id}}/save">--}}
        {{--{!! Form::open(['id'=>'edittype','name'=>'edittype','action'=>['TypeController@saveEditType',$type->id],'files'=>'true']) !!}--}}

    {!! Form::model($type,['id'=>'edittype','name'=>'edittype','action'=>['TypeController@saveEditType',$type->id],'files'=>'true']) !!}
    <div class="form-group">
        {!! Form::label('nama','Nama Type',['class' => 'control-label']) !!}
        {!! Form::text('nama',$type->nama,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('jenis','Jenis Type',['class' => 'control-label']) !!}
        {!! Form::text('jenis',$type->jenis,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('kursi','Jml. Kursi',['class' => 'control-label']) !!}
        {!! Form::number('kursi',$type->kursi,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tarif','Tarif Sewa',['class' => 'control-label']) !!}
        {!! Form::number('tarif',$type->tarif,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pic','Upload Gambar Mobil',['class' => 'control-label']) !!}
        {!! Form::file('pic',['class' => 'form-control-file']) !!}
    </div>
    {!! Form::close() !!}

</div>

<div class="modal-footer">
    <a href="{{url('/admin/types')}}"><button type="button" class="btn btn-warning pull-left">Close</button></a>
    <button type="submit" form="edittype" class="btn btn-primary">Edit Type</button>
</div>