@extends('layouts.admin')

@section('subtitle','Daftar Order')

@section('breadcrumb')
  <li><a href="{{ url('/admin') }}">Halaman Admin</a></li>
  <li class="active">Daftar Order</li>
@endsection

@section('list')
  <a href="{{url('/admin')}}" class="list-group-item">Halaman Admin</a>
  <a href="{{url('/admin/listuser')}}" class="list-group-item">Daftar User</a>
  <a href="{{url('/admin/berita')}}" class="list-group-item">Manajemen Berita</a>
  <a href="{{url('/admin/bukutamu')}}" class="list-group-item">Buku Tamu</a>
  <a href="{{url('/admin/types')}}" class="list-group-item">Manajemen Type Mobil</a>
  <a href="{{url('/admin/mobil')}}" class="list-group-item">Manajemen Mobil</a>
  <a href="{{url('/admin/orders')}}" class="list-group-item  active">Daftar Order</a>
@endsection

@section('contentheader','Daftar Order')

@section('admincontent')
<div class="table-responsive">
  <table  class="table">
    <tr>
      <th>ID</th>
      <th>Tanggal Transaksi</th>
      <th>Detil Order</th>
      <th>Total Biaya</th>
      <th>Status Pembayaran</th>
      <th>Aksi</th>
    </tr>

    @foreach($orders as $order)
      <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->created_at }}</td>
        <td><a data-toggle="modal" data-target="#modaldetil" href="{{ url('/orders/'.$order->id)}}" class="btn btn-primary">Klik Untuk Lihat</a> </td>
        <td>{{ 'Rp. '.$order->total }}</td>
        <td>
          @if($order->status_bayar == 2)
            <p class="text-success"><b>Lunas</b></p>
          @elseif($order->status_bayar == 1)
                <p class="text-warning"><b>Menunggu Konfirmasi</b></p>
          @else
                <p class="text-danger"><b>Belum Terbayar</b></p>
          @endif
        </td>
        <td align="center">
          @if($order->status_bayar == null || $order->status_bayar == 0)
            <a data-toggle="modal" data-target="#modalkonfirm" href="{{ url('/orders/'.$order->id.'/bayar')}}" class="btn btn-warning">Upload Bukti Bayar</a>

          @elseif($order->status_bayar == 1)
            <a data-toggle="modal" data-target="#modalcekbayar" href="{{ url('/admin/orders/cek-bayar/'.$order->id)}}" class="btn btn-info">Cek Bukti Pembayaran</a>
          @else
                <a href="{{ url('/orders/'.$order->id.'/invoice') }}" class="btn btn-success">Download Invoice</a>
          @endif
        </td>
    @endforeach
  </table>
</div>

<!-- Modal -->
<div id="modaldetil" class="modal fade" role="dialog">
  <div class="container">

    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modalkonfirm" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    </div>

  </div>
</div>


<div id="modalcekbayar" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        </div>
    </div>
</div>
@endsection
