<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom Background Image Style -->
    <style>
        body {
            background-image: url('{{ Vite::asset('resources/images/ppdb.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .portal-login-title {
            font-size: 2rem; /* sesuaikan ukuran teks dengan kebutuhan Anda */
            font-weight: bold; /* membuat teks menjadi tebal (bold) */
        }
        .custom-btn {
            background-color: green;
            color: white;
        }
        .custom-table-bg {
            background-color: rgb(225, 241, 244) !important;
            color: white;
            padding: 20px;
            border: none !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4">
                <div class="p-5 rounded-3 custom-table-bg">
                    <div class="mb-3 text-center">
                        <h4 class="portal-login-title">Portal Registration</h4>
                        <p>Selamat datang di layanan RegiSmartSMA</p>
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
