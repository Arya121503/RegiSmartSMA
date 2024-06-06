@extends('layouts.authapp')

@section('content')
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4">
                <div class="p-5 rounded-3 custom-table-bg">
                    <div class="mb-3 text-center">
                        <h4 class="portal-login-title text-dark">Portal Registration</h4>
                        <p class="text-dark">Selamat datang di layanan RegiSmartSMA</p>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Your Password">
                        </div>
                        <hr>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center custom-btn">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="text-success">Klik Disini untuk Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
