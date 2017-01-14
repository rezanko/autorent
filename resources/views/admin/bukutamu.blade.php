@extends('layouts.admin')

@section('subtitle','Buku Tamu')

@section('breadcrumb')
  <li><a href="{{ url('/admin') }}">Halaman Admin</a></li>
  <li class="active">Buku Tamu</li>
@endsection

@section('list')
  <a href="{{url('/admin')}}" class="list-group-item">Halaman Admin</a>
  <a href="{{url('/admin/listuser')}}" class="list-group-item">Daftar User</a>
  <a href="{{url('/admin/berita')}}" class="list-group-item">Manajemen Berita</a>
  <a href="{{url('/admin/bukutamu')}}" class="list-group-item active">Buku Tamu</a>
  <a href="{{url('/admin/types')}}" class="list-group-item">Manajemen Type Mobil</a>
  <a href="{{url('/admin/mobil')}}" class="list-group-item">Manajemen Mobil</a>
  <a href="{{url('/admin/orders')}}" class="list-group-item">Daftar Order</a>
@endsection

@section('contentheader','Buku Tamu')

@section('admincontent')
<div class="table-responsive">
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Nama</th>
     <th>No. Telp</th>
     <th>Email</th>
     <th>Pesan</th>
   </tr>

   @foreach ($tamus as $tamu)
    <tr>
      <td>{{ $tamu->id }}</td>
      <td>{{ $tamu->nama }}</td>
      <td>{{ $tamu->telp }}</td>
      <td>{{ $tamu->email }}</td>
      <td>{{ $tamu->pesan }}</td>
    </tr>
   @endforeach

 </table>
</div>
@endsection
