@extends('layouts.main')

@section('content')

<!-- Header Carousel -->
<header>
    <div class="jumbotron">
        <img class="img-responsive" src="{{ URL::asset('public/images/logo.png') }}">
    </div>
</header>


<!-- Page Content -->
<div class="container">
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Selamat Datang di AutoRent!
                <br>
                <small>Layanan Sewa Mobil Online!</small>
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-money"></i> Murah!</h4>
                </div>
                <div class="panel-body">
                    <p>Kami memberikan layanan sewa mobil dengan harga yang terjangkau!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> Mudah!</h4>
                </div>
                <div class="panel-body">
                    <p>Dengan AutoRent, Anda dapat menyewa mobil sesuai kebutuhan dengan mudah!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-lock"></i> Aman!</h4>
                </div>
                <div class="panel-body">
                    <p>AutoRent menyediakan layanan transaksi yang aman, dengan mobil yang berkualitas!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <h4>Tunggu apa lagi??? Sewa mobil kami sekarang!</h4>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-primary btn-block" href="{{ url('/types') }}">Sewa Mobil</a>
            </div>
        </div>
    </div>
    <hr>
    <!-- Call to Action Section -->


        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header">Berita Terbaru</h2>
            </div>

            @foreach($beritas as $berita)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body" align="center">
                        <a   href="{{ url('/berita/'.$berita->id) }}"><img src="{{ URL::asset('public/images/berita/'.$berita->pic) }}" style="max-height:160px"></a>
                        <a  href="{{ url('/berita/'.$berita->id) }}"> <h4>{{ $berita->judul }}</h4></a>
                    </div>
                    <div class="panel-footer" align="right">
                        <a href="{{ url('/berita/'.$berita->id) }}" class="btn btn-primary"> Baca Selengkapnya..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href=" {{ url('/berita') }}" class="btn btn-primary center-block"><h4 style="color: white">Baca Berita Lainnya</h4></a>
        <hr>

    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Mobil Terbaru Kami</h2>
        </div>

        <div class="row">
            @foreach($types as $type)

                <div class="col-md-3">
                    <a href="{{ url('/types')}}/{{$type->id}}">

                        <div class="thumbnail">
                            <img class="img-responsive img-hover img-thumbnail" src="{{ URL::asset('public/images/types/'.$type->pic) }}" alt="{{$type->nama}}" style="max-height: 150px;">

                        </div>
                    </a>
                </div>

            @endforeach
        </div>
        <a href=" {{ url('/types') }}" class="btn btn-primary center-block"><h4 style="color: white">Lihat Tipe Mobil Lainnya</h4></a>


    </div>
    <!-- /.row -->

    <hr>

    @endsection
