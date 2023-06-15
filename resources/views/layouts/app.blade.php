<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UploadFiles') }}</title>

    <!--Css-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <!--Vue-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand text-danger" href="{{ url('/') }}">
                    <h4><strong>{{ config('app.name', 'UploadFiles') }}</strong></h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('get.upload') }}"><img src="{{ asset('img/icons/upload.png') }}" height="24" width="24" /> Subir Arquivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><img src="{{ asset('img/icons/imagens-e-videos.png') }}" height="24" width="24" /> Galeria</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link text-white" href="https://github.com/GabrielOliveira1996" target="_blank"><img src="{{ asset('img/icons/github.png') }}" height="24" width="24" /> Acesse o meu github =)</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

    </div>

</body>

</html>