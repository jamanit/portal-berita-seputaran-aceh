@extends('layouts.auth')

@section('content')
<div class="card-body">
    <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" placeholder="Password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        {{ __('Ingat saya') }}
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Masuk') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <div class="social-auth-links text-center mt-2 mb-3">
        <!-- <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Masuk dengan Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google mr-2"></i> Masuk dengan Google
        </a> -->
    </div>
    <!-- /.social-auth-links -->

    <p class="mb-1">
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
            {{ __('Lupa password Anda?') }}
        </a>
        @endif
    </p>
    <p class="mb-0">
        @if (Route::has('register'))
        <a href="{{ route('register') }}">{{ __('Registrasi member baru') }}</a>
        @endif
    </p>
    </form>
</div>
@endsection