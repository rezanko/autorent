@extends('layouts.admin')

@section('subtitle','Daftar User')

@section('breadcrumb')
  <li><a href="{{ url('/admin') }}">Halaman Admin</a></li>
  <li class="active">Daftar User</li>
@endsection

@section('list')
  <a href="{{url('/admin')}}" class="list-group-item">Halaman Admin</a>
  <a href="{{url('/admin/listuser')}}" class="list-group-item active">Daftar User</a>
  <a href="{{url('/admin/berita')}}" class="list-group-item">Manajemen Berita</a>
  <a href="{{url('/admin/bukutamu')}}" class="list-group-item">Buku Tamu</a>
  <a href="{{url('/admin/types')}}" class="list-group-item">Manajemen Type Mobil</a>
  <a href="{{url('/admin/mobil')}}" class="list-group-item">Manajemen Mobil</a>
  <a href="{{url('/admin/orders')}}" class="list-group-item">Daftar Order</a>
@endsection

@section('contentheader','Daftar User')

@section('admincontent')
<div class="table-responsive">
 <table class="table">
   <tr>
     <th>ID</th>
     <th>Nama</th>
     <th>Email</th>
     <th>No. KTP</th>
     <th>No. SIM</th>
     <th>Status</th>
     <th>Delete</th>
   </tr>

   @foreach ($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->ktp }}</td>
      <td>{{ $user->sim }}</td>
      <td>
        @if($user->admin)
          {{'Admin'}}
        @else
          {{'User'}}
        @endif
      </td>
      <td><a href="{{ url('/admin/listuser/del')}}/{{$user->id}}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>

    </tr>
   @endforeach

 </table>
</div>
@endsection
