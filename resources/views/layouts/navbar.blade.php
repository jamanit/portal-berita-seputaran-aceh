<nav class="main-header navbar navbar-expand-md navbar-dark navbar-danger fixed-top">
    <div class="container-fluid">
        <a href="{{ asset('/') }}" class="navbar-brand order-0">
            <img src="{{ asset('/') }}img/default/logo-longsquare-bck.png" alt="" width="140px" height="30">
        </a>
        <div class="collapse navbar-collapse order-1" id="navbarCollapse">
            <ul class="order-1 order-md-3 navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i> {{ __('Halaman Depan') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">Kategori</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        @foreach ($category_list as $item)
                        <li><a href="{{ url('front/category_detail/'. $item->idp_category) }}" class="dropdown-item">{{
                                $item->category_name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('front/about_detail/1') }}" class="nav-link">{{
                        __('Tentang') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">{{
                        __('Masuk') }}</a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>