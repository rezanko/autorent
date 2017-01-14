@extends('layouts.admin')

@section('subtitle','Manajemen Berita')

@section('breadcrumb')
  <li><a href="{{ url('/admin') }}">Halaman Admin</a></li>
  <li class="active">Manajemen Berita</li>
@endsection

@section('list')
  <a href="{{url('/admin')}}" class="list-group-item">Halaman Admin</a>
  <a href="{{url('/admin/listuser')}}" class="list-group-item">Daftar User</a>
  <a href="{{url('/admin/berita')}}" class="list-group-item active">Manajemen Berita</a>
  <a href="{{url('/admin/bukutamu')}}" class="list-group-item">Buku Tamu</a>
  <a href="{{url('/admin/types')}}" class="list-group-item">Manajemen Type Mobil</a>
  <a href="{{url('/admin/mobil')}}" class="list-group-item">Manajemen Mobil</a>
  <a href="{{url('/admin/orders')}}" class="list-group-item">Daftar Order</a>
@endsection

@section('contentheader','Manajemen Berita')

@section('admincontent')
<div class="table-responsive">
  <br>
  <a data-toggle="modal" data-target="#modaladdberita" href="{{url('/admin/berita/add')}}"> <button type="button" name="addberita" class="btn btn-primary">Add Berita</button></a>
  <br><br>
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Judul</th>
     <th>Picture</th>
     <th>Konten</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>

   @foreach ($beritas as $berita)
    <tr>
      <td>{{ $berita->id }}</td>
      <td>{{ $berita->judul }}</td>
      <td>{{ $berita->pic }}</td>
      <td style="display:block; max-height: 5em;overflow: hidden;word-wrap: break-word;text-overflow: ellipsis;">{{ $berita->isi }}</td>
      <td> <a data-toggle="modal" data-target="#modaleditberita" href="{{ url('/admin/berita/edit')}}/{{$berita->id}}"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
      <td><a href="{{ url('/admin/berita/del')}}/{{$berita->id}}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>

    </tr>
   @endforeach

 </table>
</div>

<!-- Modal -->
<div id="modaladdberita" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modaleditberita" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        </div>
    </div>
</div>

@endsection
