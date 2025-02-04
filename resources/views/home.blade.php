@extends('layouts.adminlte3.main')

@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('/') }}img/default/logo-square.png" alt="" width="60" height="40">
</div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Beranda</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Halaman Depan</a></li>
                        <li class="breadcrumb-item active">Beranda</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $count_news }}</h3>
                            <p>Berita</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <a href="{{ url('news') }}" class="small-box-footer">Lihat <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $count_category }}</h3>
                            <p>Kategori</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-list"></i>
                        </div>
                        <a href="{{ url('category') }}" class="small-box-footer">Lihat <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $count_medsos }}</h3>
                            <p>Media Sosial</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <a href="{{ url('medsos') }}" class="small-box-footer">Lihat <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $count_visitor }} <sup><small>{{$count_visitor_visit}}</small></sup></h3>
                            <p>Pengunjung</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ url('visitor') }}" class="small-box-footer">Lihat <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection