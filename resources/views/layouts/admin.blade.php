@extends('layouts.main')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Halaman Admin
                <small>@yield('subtitle')</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a>
                </li>
                @yield('breadcrumb')
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
              @yield('list')
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9">
            <h2>@yield('contentheader')</h2>
            @yield('admincontent')
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p> -->
        </div>
    </div>
    <!-- /.row -->

    <hr>

    @endsection
