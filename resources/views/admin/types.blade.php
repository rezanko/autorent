@extends('layouts.admin')

@section('subtitle','Manajemen Type Mobil')

@section('breadcrumb')
  <li><a href="{{ url('/admin') }}">Halaman Admin</a></li>
  <li class="active">Manajemen Type Mobil</li>
@endsection

@section('list')
  <a href="{{url('/admin')}}" class="list-group-item">Halaman Admin</a>
  <a href="{{url('/admin/listuser')}}" class="list-group-item">Daftar User</a>
  <a href="{{url('/admin/berita')}}" class="list-group-item">Manajemen Berita</a>
  <a href="{{url('/admin/bukutamu')}}" class="list-group-item">Buku Tamu</a>
  <a href="{{url('/admin/types')}}" class="list-group-item active">Manajemen Type Mobil</a>
  <a href="{{url('/admin/mobil')}}" class="list-group-item">Manajemen Mobil</a>
  <a href="{{url('/admin/orders')}}" class="list-group-item">Daftar Order</a>
@endsection

@section('contentheader','Manajemen Type Mobil')

@section('admincontent')
<div class="table-responsive">
  <br>
  <a data-toggle="modal" data-target="#modaladdtype" href="{{url('/admin/types/add')}}"> <button type="button" name="addtype" class="btn btn-primary">Add Type Mobil</button></a>
  <br><br>
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Nama</th>
     <th>Jenis</th>
     <th>Jml. Kursi</th>
     <th>Tarif</th>
     <th>Gambar</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>

   @foreach ($types as $type)
    <tr>
      <td>{{ $type->id }}</td>
      <td>{{ $type->nama }}</td>
      <td>{{ $type->jenis }}</td>
      <td>{{ $type->kursi }}</td>
      <td>{{ $type->tarif }}</td>
      <td>{{ $type->pic }}</td>
      <td> <a data-toggle="modal" data-target="#modaledittype" href="{{ url('/admin/types/edit')}}/{{$type->id}}"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
      <td><a href="{{ url('/admin/types/del')}}/{{$type->id}}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>

    </tr>
   @endforeach

 </table>
</div>

<!-- Modal -->
<div id="modaladdtype" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modaledittype" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        </div>
    </div>
</div>

@endsection
