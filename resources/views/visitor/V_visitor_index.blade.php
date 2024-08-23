@extends('layouts.adminlte3.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Pengunjung</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Pengunjung</li>
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
                                    <th>Alamat IP</th>
                                    <th>Waktu Awal</th>
                                    <th>Waktu Akhir</th>
                                    <th>Perangkat</th>
                                    <th>Jumlah Kunjungan</th>
                                    <th style="width: 1%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach ($visitor_list as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->ip_address }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>{{ $item->user_agent }}</td>
                                    <td>{{ $item->visit }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-delete{{ $item->idp_visitor }}"><i
                                                    class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    @include('visitor.V_visitor_delete')
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div style="width: 100%; margin: 0px auto;">
                        <canvas id="myChart"></canvas>
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

@include('visitor.V_visitor_chart')