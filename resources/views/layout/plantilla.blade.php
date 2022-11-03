<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') - Laravel App</title>
    <meta charset="UTF-8">
    {{--  <meta name="viewport" content="width=device-width, initial-scale=1.0">  --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  <link rel="icon" type="image/png" href="img/favicon.jpg">  --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{--  <!-- iconos  -->  --}}
    {{--  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->  --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
    {{--  <!-- barra de navegacion -->  --}}
    <section class="container-fluid" style="background-color: purple;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="d-flex flex-grow-1">
                    <span class="w-100 d-lg-none d-block">{{-- <!-- hidden spacer to center brand on mobile --> --}}</span>
                    <a class="navbar-brand d-none d-lg-inline-block fuente" href="index.html" style="color: white; font-size: 2em;">
                        App
                    </a>
                    <a class="navbar-brand-two mx-auto d-lg-none d-inline-block fuente" href="index.html" style="color: white; font-size: 2em;">
                        App
                    </a>
                    <div class="w-100 text-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        @if( auth()->check())
                            <li class="nav-item">
                              <p style="color: #fff">
                                Bienvenido <b>{{ auth()->user()->nombre }} </b>
                              </p>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logout.destroy') }}" class="nav-link text-white m-2 menu-item">Log Out</a>
                            </li>
                        @else   
                            <li class="nav-item">
                                <a href=" {{ route('login.index') }} " class="nav-link text-white m-2 menu-item nav-active">Log In</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register.index') }}" class="nav-link text-white m-2 menu-item">Register</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </section>
    {{--  <!-- barra de navegacion -->  --}}
    @yield('content')
</body>
</html>