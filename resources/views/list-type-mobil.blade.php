@extends('layouts.main')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Tipe Mobil
                <br><small>Pilih tipe mobil yang anda inginkan!</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                <li class="active">Daftar Tipe Mobil</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    {{--<div class="row">--}}


        {{--<div class="col-md-4 img-portfolio">--}}
            {{--<a href="{{ url('/types')}}/{{$type->id}}">--}}
                {{--<img class="img-responsive img-hover" src="{{ URL::asset('public/images/types/'.$type->pic) }}" alt="">--}}
            {{--</a>--}}
            {{--<h3>--}}
                {{--<a href="{{ url('/types')}}/{{$type->id}}">{{$type->nama}}</a>--}}
            {{--</h3>--}}

              {{--<p>Jenis mobil   : {{$type->jenis}}</p>--}}
              {{--<p>Jumlah Kursi  : {{$type->kursi}}</p>--}}
              {{--<p>Tarif         : Rp. {{$type->tarif}}</p>--}}

        {{--</div>--}}


    {{--</div>--}}
    {{--<hr>--}}

        <div class="row">
            @foreach($types as $type)

            <div class="col-sm-6 col-md-4">
                <a href="{{ url('/types')}}/{{$type->id}}">
                <div class="thumbnail">
                    <img class="img-responsive img-hover" src="{{ URL::asset('public/images/types/'.$type->pic) }}" alt="{{$type->nama}}" style="max-height: 150px;">
                    <div class="caption">
                        <h3><a href="{{ url('/types')}}/{{$type->id}}">{{$type->nama}}</a></h3>
                        <p>Jenis mobil   : {{$type->jenis}}</p>
                        <p>Jumlah Kursi  : {{$type->kursi}}</p>
                        <p>Tarif         : Rp. {{$type->tarif}}</p>
                    </div>
                </div>
                </a>
            </div>

            @endforeach
        </div>


    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    @endsection
