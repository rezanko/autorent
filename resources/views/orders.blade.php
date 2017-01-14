@extends('layouts.main')

@section('content')


<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Orders
                {{--<small>Subheading</small>--}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                <li class="active">Orders</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
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
                    <td>
                        @if($order->status_bayar == null || $order->status_bayar == 0)
                            <a data-toggle="modal" data-target="#modalkonfirm" href="{{ url('/orders/'.$order->id.'/bayar')}}" class="btn btn-warning">Upload Bukti Bayar</a>

                        @elseif($order->status_bayar == 1)
                            <a href="#" class="btn btn-warning disabled">Upload Bukti Bayar</a>
                        @else
                            <a href="{{ url('/orders/'.$order->id.'/invoice') }}" class="btn btn-success">Download Invoice</a>
                        @endif
                    </td>
                @endforeach
            </table>
        </div>
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


    @endsection
