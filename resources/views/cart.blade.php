@extends('layouts.main')

@section('content')

    @php
        $total = array();
    @endphp

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Shopping Cart
                {{--<small>Subheading</small>--}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <table  class="table table-responsive table">
                <tr>
                    <th>Tipe Mobil</th>
                    <th>Plat Nomor</th>
                    <th>Tgl. Sewa</th>
                    <th>Tgl. Kembali</th>
                    <th>Tarif harian</th>
                    <th>Biaya Sewa</th>
                    <th>Biaya Sopir</th>
                    <th>Sub-Total</th>
                    <th>Delete</th>
                </tr>

                @foreach($carts as $cart)
                <tr>
                    <td>{{ $cart->Mobil->Type->nama }}</td>
                    <td>{{ $cart->Mobil->plat_nomor }}</td>
                    <td>{{ $cart->tgl_sewa }}</td>
                    <td>{{ $cart->tgl_kembali }}</td>
                    <td>{{ 'Rp.'.$cart->Mobil->Type->tarif }}</td>
                    <td>
                        @php
                            if($cart->tgl_sewa == $cart->tgl_kembali)
                            {
                                $lamasewa = 1;
                            }
                            else
                            {
                                $date1 = new DateTime($cart->tgl_sewa);
                                $date2 = new DateTime($cart->tgl_kembali);

                                $lamasewa =  $date1->diff($date2)->days + 1;
                            }
                            $biayasewa = $lamasewa * $cart->Mobil->Type->tarif;
                            echo 'Rp.'.$biayasewa;
                        @endphp
                    </td>
                    <td>
                            @php
                                if($cart->with_sopir)
                                {
                                    $sopir = $lamasewa*100000;
                                }
                                else
                                {
                                    $sopir = 0;
                                }
                                echo 'Rp.'.$sopir;
                            @endphp
                    </td>
                    <td>
                        @php
                            array_push($total,$cart->subtotal);
                        @endphp
                        {{ 'Rp.'.($cart->subtotal) }}
                    </td>
                    <td><a href="{{ url('/cart/'.$cart->id.'/del') }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="7" align="right"><h3>Total :</h3></td>
                    <td colspan="2"><h3>Rp. {{ array_sum($total) }}</h3></td>
                </tr>
                <tr>
                    <td colspan="7" align="right"><a href="{{ url('/types') }}" class="btn btn-warning">Tambah Sewa Mobil</a> </td>
                    @if($carts->count() != 0)
                        <td colspan="2" align="right"><a href="{{url('/cart/checkout')}}" class="btn btn-primary">Checkout Order</a></td>
                    @else
                        <td colspan="2" align="right"><a href="{{url('/cart/checkout')}}" class="btn btn-primary disabled">Checkout Order</a></td>
                    @endif
                </tr>
            </table>
        </div>
    </div>

    @endsection
