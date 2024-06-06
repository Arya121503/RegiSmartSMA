@extends('layouts.authapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-4">
            <div class="p-5 rounded-3 custom-table-bg">
                <div class="mb-3 text-center">
                    <h4 class="portal-login-title text-dark">Portal Login</h4>
                    <p class="text-dark">Selamat datang di layanan RegiSmartSMA</p>
                </div>
                <hr>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <hr>
                    <div class="d-grid">
                        <button type="submit" class="btn d-flex align-items-center justify-content-center custom-btn">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <a href="{{ route('register') }}" class="text-success">Klik Disini untuk mendapatkan Akun Pendaftaran!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
