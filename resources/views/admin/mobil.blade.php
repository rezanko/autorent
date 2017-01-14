@extends('layouts.admin')

@section('subtitle','Manajemen Mobil')

@section('breadcrumb')
  <li><a href="{{ url('/admin') }}">Halaman Admin</a></li>
  <li class="active">Manajemen Mobil</li>
@endsection

@section('list')
  <a href="{{url('/admin')}}" class="list-group-item">Halaman Admin</a>
  <a href="{{url('/admin/listuser')}}" class="list-group-item">Daftar User</a>
  <a href="{{url('/admin/berita')}}" class="list-group-item">Manajemen Berita</a>
  <a href="{{url('/admin/bukutamu')}}" class="list-group-item">Buku Tamu</a>
  <a href="{{url('/admin/types')}}" class="list-group-item">Manajemen Type Mobil</a>
  <a href="{{url('/admin/mobil')}}" class="list-group-item active" >Manajemen Mobil</a>
  <a href="{{url('/admin/orders')}}" class="list-group-item">Daftar Order</a>
@endsection

@section('contentheader','Manajemen Mobil')

@section('admincontent')
<div class="table-responsive">
  <br>
  <a data-toggle="modal" data-target="#modaladdmobil" href="{{url('/admin/mobil/add')}}"> <button type="button" name="addmobil" class="btn btn-primary">Add Mobil</button></a>
  <br><br>
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Type Mobil</th>
     <th>Plat Nomor</th>
     <th>Warna</th>
     <th>Tahun</th>
     <th>Gambar</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>

   @foreach ($mobils as $mobil)
    <tr>
      <td>{{ $mobil->id }}</td>
      <td>{{ $mobil->Type->nama }}</td>
      <td>{{ $mobil->plat_nomor }}</td>
      <td>{{ $mobil->warna }}</td>
      <td>{{ $mobil->tahun }}</td>
      <td>{{ $mobil->pic }}</td>
      <td> <a data-toggle="modal" data-target="#modaleditmobil" href="{{ url('/admin/mobil/edit')}}/{{$mobil->id}}"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
      <td><a href="{{ url('/admin/mobil/del')}}/{{$mobil->id}}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>
    </tr>
   @endforeach

 </table>
</div>

<!-- Modal -->
<div id="modaladdmobil" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modaleditmobil" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        </div>
    </div>
</div>

@endsection
