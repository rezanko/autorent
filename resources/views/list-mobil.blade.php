@extends('layouts.main')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$type->nama}}
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a>
                    </li>
                    <li><a href="{{url('/types')}}">Daftar Type Mobil</a>
                    </li>
                    <li class="active">{{$type->nama}}</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row thumbnail">
            <div class="col-md-5">
                <img class="img-responsive" src="{{ URL::asset('public/images/types/'.$type->pic) }}" alt="{{$type->nama}}" style="max-height: 400px;">
            </div>

            <div class="col-md-6">
                <h3>Spesifikasi Mobil :</h3>
                <ul>
                    <li>Jenis Mobil : {{$type->jenis}}</li>
                    <li>Jml. Kursi : {{$type->kursi}}</li>
                    <li>Tarif Sewa : Rp. {{$type->tarif}}</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Mobil Yang Tersedia :</h3>
            </div>

            @if($mobils->count()==0)
                <div class="col-lg-12">
                    <h3>Coming Soon!!</h3>
                </div>
            @else
                @foreach($mobils as $mobil)
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img class="img-responsive img-hover img-related" src="{{ URL::asset('public/images/types/'.$type->pic) }}" alt="">
                            <div class="caption">
                                <h4><b>Detail Mobil :</b></h4>
                                <p>Plat Nomor : {{$mobil->plat_nomor}}</p>
                                <p>Warna Mobil : {{$mobil->warna}}</p>
                                <p>Tahun : {{$mobil->tahun}}</p>
                                <br>
                                <p>
                                    <a data-toggle="modal" data-target="#modaljadwalsewa" href="{{ url('/types/'.$type->id.'/jadwal-sewa/'.$mobil->id) }}" class="btn btn-warning">Jadwal Sewa</a> <a data-toggle="modal" data-target="#modalsewamobil" href="{{ url('/sewa/'.$mobil->id) }}" class="btn btn-primary">Sewa Mobil Ini</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
</div>

    <!-- Modal -->
    <div id="modalsewamobil" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modaljadwalsewa" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            </div>
        </div>
    </div>

@endsection