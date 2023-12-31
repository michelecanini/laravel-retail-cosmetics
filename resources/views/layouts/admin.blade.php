<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Title -->
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,800&display=swap" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
        <!-- Vite -->
        @vite(['resources/js/app.js'])
    </head>

    <body>

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm navbar-sticky-top">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                        <div>
                            <!--logo-->
                            <div>Retail Cosmetics</div>
                            <!--mobile-logo
                            <img src="./img/mobile-logo.png" alt="logo" class="mobile_logo"> -->
                        </div>
                        <!--config('app.name', 'Laravel') -->
                    </a>                     

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">           
                        @if (session('success'))
                            <div class="alert alert-success" onclick="this.style.display='none';" style="position: absolute; top: 0%; left: 50%; transform: translateX(-50%);">
                                {{ session('success') }}
                            </div>
                        @endif
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto" style="margin-right: 70px;">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('admin') }}">{{__('Dashboard')}}</a>
                                    <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profilo')}}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                        
                    </div>
                </div>
            </nav>

            <!-- Main -->
            <main>
                <!-- Sidebat Left -->
                <div class="sidebar bg-dark">
                    <div class="top_sidebar">
                    <section>                  
                        <!-- menu-top-sidebar-->
                        <ul>
                            <li><a href="{{ url('admin') }}"><i class="fa-solid fa-house" style="color: #ffffff;"></i><span>Dashboard</span></a></li>
                            <li><a href="{{ route('admin.perfumes.index') }}"><i class="fa-solid fa-flask" style="color: #ffffff;"></i><span>Profumi</span></a></li>
                            <li><a href="{{ url('profile') }}"><i class="fa-solid fa-user" style="color: #ffffff;"></i><span>Profilo</span></a></li>
                        </ul>
                    </section>
                    </div>
                </div>
                @yield('content')
            </main>
        </div>
    </body>

</html>