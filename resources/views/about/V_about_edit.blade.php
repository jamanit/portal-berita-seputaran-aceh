@extends('layouts.adminlte3.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Tentang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('about/edit/1') }}">Daftar Tentang</a></li>
                        <li class="breadcrumb-item active">Ubah Tentang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <form action="{{ url('about/update/'. $about_detail->idp_about) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card card-outline card-danger">
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <a href="{{ asset('img/about/'. $about_detail->logo) }}" target="_blank">
                                        <img src="{{ asset('img/about/'. $about_detail->logo) }}"
                                            class="img-thumbnail img-preview" style="width: 100%;">
                                    </a>
                                </div>
                                <div class="form-group">
                                    <label for="">Logo</label>
                                    <div class="custom-file">
                                        <input type="file" name="logo" id="logo"
                                            class="custom-file-input @error('logo') is-invalid @enderror"
                                            onchange="previewImg(event)">
                                        <input type="hidden" name="old_logo" id="old_logo"
                                            value="{{ $about_detail->logo }}">
                                        <label for="logo" class="custom-file-label custom-file-labelG">{{
                                            $about_detail->logo }}</label>
                                        @error('logo')
                                        <div class="small text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about">Tentang</label>
                                    <textarea name="about" id="summernote"
                                        class="form-control @error('about') is-invalid @enderror" cols="30"
                                        rows="10">{{ $about_detail->about }}</textarea>
                                    @error('about')
                                    <div class="small text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3">
                    <button type="reset" class="btn btn-default btn-sm">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm float-right">Perbarui</button>
                </div>
            </form>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('script')
<SCript>
    function previewImg() {
        const logo = document.querySelector('#logo');
        const logoLabel = document.querySelector('.custom-file-labelG');
        const imgPreview = document.querySelector('.img-preview');

        logoLabel.textContent = logo.files[0].name;

        const filelogo = new FileReader();
        filelogo.readAsDataURL(logo.files[0]);

        filelogo.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</SCript>

@endsection