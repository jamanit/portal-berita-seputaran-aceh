<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-list mr-1"></i>
            Daftar Kategori
        </h3>
    </div>
    <div class="card-body" style="display: block; max-height: 50vh; overflow-y: scroll">
        @foreach ($category_list as $item)
        <a href="{{ url('front/category_detail/'. $item->idp_category) }}" style="text-decoration:none; color: inherit;">
            <h6>{{ $item->category_name }}</h6>
        </a>
        <hr>
        @endforeach
    </div>
</div>