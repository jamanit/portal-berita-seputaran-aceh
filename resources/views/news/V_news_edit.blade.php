@extends('layouts.adminlte3.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Berita</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('news') }}">Daftar Berita</a></li>
                        <li class="breadcrumb-item active">Ubah Berita</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <form action="{{ url('news/update/'. $news_detail->idp_news) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card card-outline card-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <a href="{{ asset('img/news/'. $news_detail->photo) }}" target="_blank">
                                        <img src="{{ asset('img/news/'. $news_detail->photo) }}"
                                            class="img-thumbnail img-preview" style="width: 100%;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" id="photo"
                                            class="custom-file-input @error('photo') is-invalid @enderror"
                                            onchange="previewImg(event)">
                                        <input type="hidden" name="old_photo" id="old_photo"
                                            value="{{ $news_detail->photo }}">
                                        <label for="photo" class="custom-file-label custom-file-labelG">{{
                                            $news_detail->photo }}</label>
                                        @error('photo')
                                        <div class="small text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ $news_detail->title }}">
                                    @error('title')
                                    <div class="small text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Isi</label>
                                    <textarea name="content" id="summernote"
                                        class="form-control @error('content') is-invalid @enderror" cols="30"
                                        rows="10">{{ $news_detail->content }}</textarea>
                                    @error('content')
                                    <div class="small text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="idf_category">Kategori</label>
                                    <select name="idf_category" id="idf_category"
                                        class="form-control @error('idf_category') is-invalid @enderror">
                                        <option value="">- pilih -</option>
                                        <?php foreach ($category_list as $item) { ?>
                                        <option value="<?= $item->idp_category; ?>" {{ $news_detail->idf_category ==
                                            $item->idp_category ? "selected" : ""; }}>
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
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Dibuat Oleh</label>
                                    <input type="hidden" name="created_by" id="created_by"
                                        value="{{ $news_detail->created_by }}">
                                    <input type="text" name="" id="" class="form-control"
                                        value="{{ $news_detail->created_by }}" readonly>
                                    <input type="text" name="" id="" class="form-control"
                                        value="{{ $news_detail->created_at }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Diubah oleh</label>
                                    <input type="hidden" name="updated_by" id="updated_by"
                                        value="{{ Auth::user()->name }}">
                                    <input type="text" name="" id="" class="form-control"
                                        value="{{ $news_detail->updated_by }}" readonly>
                                    <input type="text" name="" id="" class="form-control"
                                        value="{{ $news_detail->updated_by != '' ? $news_detail->updated_at : '' }}"
                                        readonly>
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