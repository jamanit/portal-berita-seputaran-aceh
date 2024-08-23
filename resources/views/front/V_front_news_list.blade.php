<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-newspaper mr-1"></i>
            Daftar Berita
        </h3>
    </div>
    <div class="card-body" style="display: block; max-height: 60vh; overflow-y: scroll">
        @foreach ($news_list as $item)
        <a href="{{ url('front/news_detail/'. $item->idp_news) }}" style="text-decoration:none; color: inherit;">
            <div class="row mb-3">
                <div class="col-4">
                    <img src="{{ asset('/img/news/' . $item->photo ) }}" class="rounded photo"
                        style="max-width: 100%; object-fit: cover;" alt="">
                </div>
                <div class="col-8">
                    <h6 class="font-weight-bold">{{ $item->title }}</h6>
                    @php
                    $day = date('D', strtotime($item->created_at));
                    $dayList = array( 'Sun' => 'Minggu', 'Mon' => 'Senin', 'Tue' => 'Selasa', 'Wed' => 'Rabu', 'Thu' =>
                    'Kamis', 'Fri' => 'Jumat', 'Sat' => 'Sabtu');
                    @endphp
                    <h6 class="small">{{ $dayList[$day] .', '. date('d-m-Y H:i', strtotime($item->created_at)) . ' WIB'
                        }}</h6>
                    <h6 class="small">{{ $item->category_name }}</h6>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="card-footer">
        <span class="float-right"> {{
            $news_list->onEachSide(1)->links('pagination::bootstrap-4')
            }}</span>
    </div>
</div>