<style>
    .img-slideshow {
        filter: brightness(75%);
    }

    @media (max-width: 1400px) {
        .caption {
            font-size: 2rem;
        }
    }

    @media (max-width: 1200px) {
        .caption {
            font-size: 1.6rem;
        }
    }

    @media (max-width: 992px) {
        .caption {
            font-size: 100%;
        }
    }

    @media (max-width: 768px) {
        .caption {
            font-size: 100%;
        }
    }

    @media (max-width: 576px) {
        .caption {
            font-size: 100%;
        }
    }
</style>


<div class="card">
    <div class="card-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-touch="true">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($news_slideshow as $item)
                <div class="carousel-item @if ($loop->first) {{ 'active' }} @endif">
                    <a href="{{ url('front/news_detail/'. $item->idp_news) }}" style="text-decoration:none; color: inherit;">
                        <img class="d-block w-100 img-slideshow" src="{{ asset('/img/news/' . $item->photo ) }}" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <h2 class="caption"><strong>{{ $item->title }}</strong></h2>
                            @php
                            $day = date('D', strtotime($item->created_at));
                            $dayList = array( 'Sun' => 'Minggu', 'Mon' => 'Senin', 'Tue' => 'Selasa', 'Wed' => 'Rabu',
                            'Thu' => 'Kamis', 'Fri' => 'Jumat', 'Sat' => 'Sabtu');
                            $web_name = substr($title, 0, 15);
                            @endphp
                            <small>{{ $web_name .' - '. $dayList[$day] .', '. date('d-m-Y H:i',
                                strtotime($item->created_at)) . ' WIB' }}</small>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

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