@extends('layouts.auth')

@section('content')
<div class="card-body">
    <p class="login-box-msg">{{ __('Atur Ulang Password') }}</p>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Kirim tautan atur ulang Password')
                    }}</button>
            </div>
        </div>
    </form>
</div>
@endsection