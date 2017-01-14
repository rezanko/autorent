@extends('layouts.main')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Berita
                    <small>{{ $berita->judul }}
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a href="{{ url('/berita') }}">Berita</a></li>
                    <li class="active">{{ $berita->judul }}</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <!-- Preview Image -->
                <img class="img-responsive" src="{{ URL::asset('public/images/berita/'.$berita->pic) }}" alt="">
                <!-- Blog Post -->
				<h3>{{ $berita->judul }}<br>
                    <small><i class="fa fa-clock-o"></i> Posted on {{ $berita->updated_at }}</small>
                </h3><br>
                <!-- Post Content -->
               
                <p style="white-space: pre-wrap">{{ $berita->isi }}</p>

                <hr>

                {{--<!-- Blog Comments -->--}}

                {{--<!-- Comments Form -->--}}
                {{--<div class="well">--}}
                    {{--<h4>Leave a Comment:</h4>--}}
                    {{--<form role="form">--}}
                        {{--<div class="form-group">--}}
                            {{--<textarea class="form-control" rows="3"></textarea>--}}
                        {{--</div>--}}
                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                    {{--</form>--}}
                {{--</div>--}}

                {{--<hr>--}}

                {{--<!-- Posted Comments -->--}}

                {{--<!-- Comment -->--}}
                {{--<div class="media">--}}
                    {{--<a class="pull-left" href="#">--}}
                        {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
                    {{--</a>--}}
                    {{--<div class="media-body">--}}
                        {{--<h4 class="media-heading">Start Bootstrap--}}
                            {{--<small>August 25, 2014 at 9:30 PM</small>--}}
                        {{--</h4>--}}
                        {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Comment -->--}}
                {{--<div class="media">--}}
                    {{--<a class="pull-left" href="#">--}}
                        {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
                    {{--</a>--}}
                    {{--<div class="media-body">--}}
                        {{--<h4 class="media-heading">Start Bootstrap--}}
                            {{--<small>August 25, 2014 at 9:30 PM</small>--}}
                        {{--</h4>--}}
                        {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                        {{--<!-- Nested Comment -->--}}
                        {{--<div class="media">--}}
                            {{--<a class="pull-left" href="#">--}}
                                {{--<img class="media-object" src="http://placehold.it/64x64" alt="">--}}
                            {{--</a>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Nested Start Bootstrap--}}
                                    {{--<small>August 25, 2014 at 9:30 PM</small>--}}
                                {{--</h4>--}}
                                {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- End Nested Comment -->--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

            {{--<!-- Blog Sidebar Widgets Column -->--}}
            {{--<div class="col-md-4">--}}

                {{--<!-- Blog Search Well -->--}}
                {{--<div class="well">--}}
                    {{--<h4>Blog Search</h4>--}}
                    {{--<div class="input-group">--}}
                        {{--<input type="text" class="form-control">--}}
                        {{--<span class="input-group-btn">--}}
                            {{--<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>--}}
                        {{--</span>--}}
                    {{--</div>--}}
                    {{--<!-- /.input-group -->--}}
                {{--</div>--}}

                {{--<!-- Blog Categories Well -->--}}
                {{--<div class="well">--}}
                    {{--<h4>Blog Categories</h4>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li><a href="#">Category Name</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Category Name</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Category Name</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Category Name</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li><a href="#">Category Name</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Category Name</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Category Name</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Category Name</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /.row -->--}}
                {{--</div>--}}

                {{--<!-- Side Widget Well -->--}}
                {{--<div class="well">--}}
                    {{--<h4>Side Widget Well</h4>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>--}}
                {{--</div>--}}

            </div>

        </div>
        <!-- /.row -->

    @endsection
