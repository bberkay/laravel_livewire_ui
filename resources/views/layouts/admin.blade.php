<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- LiveWire Styles -->
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <!-- Profile -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                {{ ucfirst(Auth::user()->username) }}
                            </a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Logout -->
                        <li class = "nav-item">
                            <a class="nav-link" href="{{ route('admin.logout.submit') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('navbar.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout.submit') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li class = "nav-item">
                            <a class="nav-link" href="#">
                                /
                            </a>
                        </li>
                        <!-- Language -->
                        @if (App::getLocale() == 'en')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('setlanguage', ['locale' => 'tr']) }}">{{ __('navbar.turkish') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('setlanguage', ['locale' => 'en']) }}">{{ __('navbar.english') }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- LiveWire Scripts -->
    @livewireScripts
</body>
</html>
