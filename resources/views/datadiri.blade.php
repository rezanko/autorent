@extends('layouts.main')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Diri Pengguna
                  <br><small>{{ $user->name }}</small>
                </h1>

                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Data Diri Pengguna</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

            @if(count($errors) > 0)
              <div class="alert alert-danger" role="alert">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

            @if(session('sukses'))
              <div class="alert alert-success" role="alert"><b>Sukses!</b> Data Diri Anda berhasil diubah!</div>
            @endif

              <div class="panel panel-default">
                  <div class="panel-heading">Data Diri Anda :</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/data_diri/update') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Nama</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                  @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('ktp') ? ' has-error' : '' }}">
                              <label for="ktp" class="col-md-4 control-label">No. KTP</label>

                              <div class="col-md-6">
                                  <input id="ktp" type="text" class="form-control" name="ktp" value="{{ $user->ktp }}" required>

                                  @if ($errors->has('ktp'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('ktp') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('sim') ? ' has-error' : '' }}">
                              <label for="sim" class="col-md-4 control-label">No. SIM (optional)</label>

                              <div class="col-md-6">
                                  <input id="sim" type="text" class="form-control" name="sim" value="{{ $user->sim }}">

                                  @if ($errors->has('sim'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('sim') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                              <label for="alamat" class="col-md-4 control-label">Alamat</label>

                              <div class="col-md-6">
                                  <textarea id="alamat" type="text" class="form-control" name="alamat" rows="4" required>{{ $user->alamat }}</textarea>

                                  @if ($errors->has('alamat'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('alamat') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Update Data Diri
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
        <!-- /.row -->

        <hr>

@endsection
