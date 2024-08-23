@extends('layouts.adminlte3.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Akun</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Akun</li>
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
                        <a href="{{ route('register') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                        @include('account.V_account_create')
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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $account_list->firstItem() ?>
                                @foreach ($account_list as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->password }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-edit{{$item->id}}"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                                data-target="#modal-delete{{$item->id}}"><i
                                                    class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    @include('account.V_account_edit')
                                    @include('account.V_account_delete')
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