<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cartolinha</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <header class="header"
            style="    background: linear-gradient(45deg, rgba(255,252,252,0) 0%,rgba(255,252,252,0.33) 50%,rgb(4, 205, 103) 50%,rgb(48, 203, 100) 100%);">
        <section class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <a href="#">
                            <div class="main-logo">
                                <img src="img/main-logo.png" height="65"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav" style="color: #FFFFFF !important;">
                                <li><a href="/" style="color: #FFFFFF !important;"><b>HOME</b></a></li>
                                <li><a href="/results" style="color: #FFFFFF !important;"><b>RESULTADOS</b></a></li>
                                @auth('user')
                                    <li><a href="/user/home" style="color: #FFFFFF !important;"><b>MINHA CONTA</b></a>
                                    </li>
                                    <li>
                                        <a href="/user/logout" style="color: #FFFFFF !important;"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <b>SAIR</b>
                                        </a>
                                        <form id="logout-form" action="/user/logout" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                @endauth
                                @guest
                                    <li><a href="/user/login" style="color: #FFFFFF !important;"><b>LOGIN</b></a></li>
                                    <li><a href="/user/register" style="color: #FFFFFF !important;"><b>REGISTRAR</b></a>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    @yield('content')

    @include('layouts.site-partials.footer')
</div>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/animationCounter.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/active.js"></script>
</body>

</html>