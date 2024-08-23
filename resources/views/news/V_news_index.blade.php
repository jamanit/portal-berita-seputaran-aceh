@extends('layouts.adminlte3.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Berita</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Berita</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ url('news/create') }}" class="btn btn-primary btn-sm"><i
                                class="fas fa-plus"></i></a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        {{ Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                    @elseif(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible">
                        {{ Session::get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </div>
                    @else
                    @endif
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped text-nowrap">
                            <thead>
                                <tr class="">
                                    <th style="width: 1%;">No</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Dibuat Oleh</th>
                                    <th style="width: 1%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($news_list as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <a href="{{ asset('img/news/'. $item->photo) }}" target="_blank">
                                            <img src="{{ asset('img/news/'. $item->photo) }}" class="img-thumbnail"
                                                style="max-width: 100%; height: 30px; object-fit: contain;" alt="">
                                        </a>
                                    </td>
                                    <td>{{ substr($item->title, 0, 25) . "..." }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>{{ $item->created_by }} - {{ $item->created_at }} WIB</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ url('news/edit/'. $item->idp_news) }}"
                                                class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-delete{{ $item->idp_news }}"><i
                                                    class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    @include('news.V_news_delete')
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection