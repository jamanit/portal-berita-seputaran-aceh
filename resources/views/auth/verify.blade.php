@extends('layouts.auth')

@section('content')
<div class="card-body">
    <p class="login-box-msg">{{ __('Verifikasi Alamat Email Anda') }}</p>
    {{ __('Sebelum melanjutkan, periksa email Anda untuk tautan verifikasi.') }}
    {{ __('Jika Anda tidak menerima email') }},

    @if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
    </div>
    @endif

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('klik di sini untuk meminta yang lain')
                    }}</button>
            </div>
        </div>
    </form>
</div>
@endsection