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
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .portal-login-title {
            font-size: 2rem;
            font-weight: bold;
        }

        .custom-btn {
            background-color: green !important;
            color: white;
        }

        .custom-table-bg {
            background-color: rgb(225, 241, 244) !important;
            color: white;
            padding: 20px;
            border: none !important;
        }

        nav.navbar {
            background-color:rgb(225, 241, 244) !important;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        footer {
            background-color:rgb(225, 241, 244) !important;
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 1000;
            padding: 0.5px;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('beranda') }}">RegiSmartSMA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pendaftaran') }}">Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center">&copy; 2003 - 2024 RegiSmartSMA. SIAP PPDB Online Real Time Online. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
