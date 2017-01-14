@extends('layouts.admin')

<!-- @section('subtitle') -->

@section('breadcrumb')
  <li class="active">Halaman Admin</li>
@endsection

@section('list')
  <a href="{{url('/admin')}}" class="list-group-item active">Halaman Admin</a>
  <a href="{{url('/admin/listuser')}}" class="list-group-item">Daftar User</a>
  <a href="{{url('/admin/berita')}}" class="list-group-item">Manajemen Berita</a>
  <a href="{{url('/admin/bukutamu')}}" class="list-group-item">Buku Tamu</a>
  <a href="{{url('/admin/types')}}" class="list-group-item">Manajemen Type Mobil</a>
  <a href="{{url('/admin/mobil')}}" class="list-group-item">Manajemen Mobil</a>
  <a href="{{url('/admin/orders')}}" class="list-group-item">Daftar Order</a>
@endsection

<!-- @section('contentheader') -->

<!-- @section('admincontent') -->
