@extends('layouts.adminlte3.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Berita</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('news') }}">Daftar Berita</a></li>
                        <li class="breadcrumb-item active">Tambah Berita</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <form action="{{ url('news/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card card-outline card-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <img src="{{ asset('/') }}img/default/default-image.jpg" class="img-thumbnail img-preview" style="width: 100%;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" id="photo" class="custom-file-input @error('photo') is-invalid @enderror" onchange="previewImg(event)">
                                        <label for="photo" class="custom-file-label custom-file-labelG">- pilih
                                            -</label>
                                        @error('photo')
                                        <div class="small text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                    @error('title')
                                    <div class="small text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Isi</label>
                                    <textarea name="content" id="summernote" class="form-control @error('content') is-invalid @enderror" cols="30" rows="10">{{ old('content') }}</textarea>
                                    @error('content')
                                    <div class="small text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="idf_category">Kategori</label>
                                    <select name="idf_category" id="idf_category" class="form-control @error('idf_category') is-invalid @enderror">
                                        <option value="">- pilih -</option>
                                        <?php foreach ($category_list as $item) { ?>
                                            <option value="<?= $item->idp_category; ?>" {{ old('idf_category')==$item->
                                            idp_category ? "selected" : ""; }}>
                                                <?= $item->category_name; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    @error('idf_category')
                                    <div class="small text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="created_by" id="created_by" value="{{ Auth::user()->name }}">
                <div class="pb-3">
                    <button type="reset" class="btn btn-default btn-sm">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm float-right">Simpan</button>
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
        const photo = document.querySelector('#photo');
        const fotoLabel = document.querySelector('.custom-file-labelG');
        const imgPreview = document.querySelector('.img-preview');

        fotoLabel.textContent = photo.files[0].name;

        const filephoto = new FileReader();
        filephoto.readAsDataURL(photo.files[0]);

        filephoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</SCript>
@endsection