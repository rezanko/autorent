@extends('layouts.main')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Berita
                {{--<small>Subheading</small>--}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                <li class="active">Berita</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    @foreach($beritas as $berita)
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-5">
                <a href="{{ url('/berita/'.$berita->id) }}">
                    <img class="img-responsive img-hover" src="{{ URL::asset('public/images/berita/'.$berita->pic) }}" alt="">
                </a>
            </div>
            <div class="col-md-6" >
                <h3>
                    <a href="{{ url('/berita/'.$berita->id) }}">{{ $berita->judul }}</a>
                </h3>
                <p style="color: gray">Posted on {{ $berita->updated_at }}
                </p>
                <p style="display:block; max-height: 5.6em;overflow: hidden;word-wrap: break-word;text-overflow: ellipsis;">{{ $berita->isi }}</p>
                <a class="btn btn-primary" href="{{ url('/berita/'.$berita->id) }}">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    @endforeach

    <!-- Pager -->
    <div class="row">
        <ul class="pager">
            <li class="previous"><a href="#">&larr; Older</a>
            </li>
            <li class="next"><a href="#">Newer &rarr;</a>
            </li>
        </ul>
    </div>
    <!-- /.row -->

    @endsection
