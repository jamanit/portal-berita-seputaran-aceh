@extends('layouts.auth')

@section('content')
<div class="card-body">
    <p class="login-box-msg">{{ __('Konfirmasi Password') }}</p>
    {{ __('Harap konfirmasi password Anda sebelum melanjutkan.') }}

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" placeholder="Password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Konfirmasi Password') }}</button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Lupa Password Kamu?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection