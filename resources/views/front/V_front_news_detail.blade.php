@extends('layouts.main')

@section('content')
<div class="content-wrapper" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-newspaper mr-1"></i>
                            Detail Berita
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12">
                                <img src="{{ asset('/img/news/' . $news_detail->photo ) }}" class="rounded"
                                    style="max-width: 100%; object-fit: contain;" alt="">
                            </div>
                            <div class="col-12 mt-3">
                                <h4 class="font-weight-bold">{{ $news_detail->title }}</h4>
                                @php
                                $day = date('D', strtotime($news_detail->created_at));
                                $dayList = array( 'Sun' => 'Minggu', 'Mon' => 'Senin', 'Tue' => 'Selasa', 'Wed' =>
                                'Rabu', 'Thu' => 'Kamis', 'Fri' => 'Jumat', 'Sat' => 'Sabtu');
                                $web_name = substr($title, 0, 15);
                                @endphp
                                <small>{{ $web_name .' - '. $dayList[$day] .', '. date('d-m-Y H:i',
                                    strtotime($news_detail->created_at)) . ' WIB' }}</small>
                                <p>{!! $news_detail->content !!}</p>
                                <h6 class="small">Kategori : {{ $news_detail->category_name }}</h6>
                                <h6 class="small">Dipublikasi Oleh : {{ $news_detail->created_by }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <span class="mr-1">Bagikan :</span>
                            <!-- Email -->
                            <a
                                href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 {{ url()->current() }}">
                                <img src="{{ asset('img/default/gmail.png') }}" class="mr-1" width="25" height="25"
                                    alt="">
                            </a>
                            <!-- WhatsApp -->
                            <a href="whatsapp://send?text={{ url()->current() }}" action="share/whatsapp/share"
                                target="_blank">
                                <img src="{{ asset('img/default/whatsapp.png') }}" class="mr-1" width="25" height="25"
                                    alt="">
                            </a>
                            <!-- Facebook -->
                            <a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank">
                                <img src="{{ asset('img/default/facebook.png') }}" class="mr-1" width="25" height="25"
                                    alt="">
                            </a>
                            <!-- Twitter -->
                            <a href="https://twitter.com/share?url={{ url()->current() }}&text=Simple%20Share%20Buttons&hashtags=simplesharebuttons"
                                target="_blank">
                                <img src="{{ asset('img/default/twitter.png') }}" class="mr-1" width="25" height="25"
                                    alt="">
                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/?url={{ url()->current() }}" rel="noopener"
                                target="_blank">
                                <img src="{{ asset('img/default/instagram.png') }}" class="mr-1" width="25" height="25"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
                @include('front.V_front_news_list')
            </div>
            <div class="col-md-4">
                @include('front.V_front_category_list')
                @include('front.V_front_medsos_list')
            </div>
        </div>
    </div>
</div>
@include('visitor.V_visitor_get')
@endsection