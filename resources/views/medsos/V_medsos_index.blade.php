@extends('layouts.adminlte3.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Media Sosial</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Media Sosial</li>
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
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-create"><i
                                class="fas fa-plus"></i></a>
                        @include('medsos.V_medsos_create')
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
                                    <th>Nama Medsos</th>
                                    <th>Alamat Medsos</th>
                                    <th>Link</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $medsos_list->firstItem() ?>
                                @foreach ($medsos_list as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->medsos_name }}</td>
                                    <td>{{ $item->medsos_address }}</td>
                                    <td>{{ $item->medsos_link }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-edit{{$item->idp_medsos}}"><i
                                                    class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-delete{{$item->idp_medsos}}"><i
                                                    class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    @include('medsos.V_medsos_edit')
                                    @include('medsos.V_medsos_delete')
                                </tr>
                                <?php $i++ ?>
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