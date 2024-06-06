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
            font-size: 2rem;
            /* sesuaikan ukuran teks dengan kebutuhan Anda */
            font-weight: bold;
            /* membuat teks menjadi tebal (bold) */
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
    </style>
</head>

<body>


    @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
