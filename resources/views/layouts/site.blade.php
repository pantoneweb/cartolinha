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
                                <img src="img/main-logo.png" width="85" height="75"/>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav" style="color: #FFFFFF !important;">
                                <li><a href="#" style="color: #FFFFFF !important;"><b>HOME</b></a></li>
                                <li><a href="#" style="color: #FFFFFF !important;"><b>TIMES</b></a></li>
                                <li><a href="#" style="color: #FFFFFF !important;"><b>ESCALAÇÃO</b></a></li>
                                <li><a href="#" style="color: #FFFFFF !important;"><b>RESULTADOS</b></a></li>
                                <li><a href="#" style="color: #FFFFFF !important;"><b>SHOP </b></a></li>
                                <li><a href="#" style="color: #FFFFFF !important;"><b>BLOG</b></a></li>
                                <li><a href="#" style="color: #FFFFFF !important;"><b>LOGIN</b></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <section class="carosal-area"
             style="background-position: center bottom; background-repeat: no-repeat; min-height: 600px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client owl-carousel owl-theme">
                        <div class="item">
                            <div class="text">
                                <h3>ESCALE SEU TIME AGORA</h3>
                                <p>O sentimento pelo o futebol é como uma paixão intensa que aumenta a cada dia que
                                    passa. Futebol <BR> para sempre será a minha paixão. Monte seu time com os craques
                                    do brasileirão.</p>
                                <h5><a href="/login">ESCALE AGORA</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="text">
                                <h3>FAÇA PARTE DO NOSSO TIME</h3>
                                <p>Conecte-se a milhares de outros usuários</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="events_section_area">
        <h2>RODADAS</h2>
        <div class="container">
            <div class="row">
                @foreach($departures as $departure)
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <div class="row">
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-center">
                                    <img class="img-fluid rounded" style="width: auto !important; height: 80px;"
                                         src="{{\Illuminate\Support\Facades\Storage::url("team/{$departure->home_team->photo}")}}"
                                         lazy="loaded">
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-top: 40px;">
                                    VS
                                </div>
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-center">
                                    <img class="img-fluid rounded" style="width: auto !important; height: 80px;"
                                         src="{{\Illuminate\Support\Facades\Storage::url("team/{$departure->guest_team->photo}")}}"
                                         lazy="loaded">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <h3>{{ $departure->home_team->name }} X {{ $departure->guest_team->name }}</h3>
                            <hr>
                            <p>
                                <span class="event_left"><i class="material-icons">access_time</i>21:00</span>
                                <span class="event_right"><i class="material-icons">location_on</i>Vila Belmiro</span>
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

    <div class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                    <div class="block">
                        <p><i class="material-icons">favorite</i></p>
                        <p class="counter-wrapper"><span class="fb"></span></p>
                        <p class="text-block">APAIXONADOS</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                    <div class="block">
                        <p><i class="material-icons">language</i></p>
                        <p class="counter-wrapper"><span class="code"></span></p>
                        <p class="text-block">ESCALAÇÔES</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                    <div class="block">
                        <p><i class="material-icons">person_add</i></p>
                        <p class="counter-wrapper"><span class="bike"></span></p>
                        <p class="text-block">USUÁRIOS</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                    <div class="block">
                        <p><i class="material-icons">people</i></p>
                        <p class="counter-wrapper"><span class="coffee"></span></p>
                        <p class="text-block">PARTIDAS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="our_activity">
        <h2>NOTÍCIA DO MUNDO DO ESPORTE</h2>
        <p>O sentimento pelo o futebol é como uma paixão intensa que aumenta a cada dia que
            passa. Futebol <BR> para sempre será a minha paixão. Monte seu time com os craques
            do brasileirão.</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="single-Promo">
                        <div class="promo-icon">
                            <i class="material-icons">near_me</i>
                        </div>
                        <br>
                        <h2 class="text-center"><a href="#">Notícia</a></h2>
                        <br>
                        <p>O sentimento pelo o futebol é como uma paixão intensa que aumenta a cada dia que
                            passa...
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="single-Promo">
                        <div class="promo-icon">
                            <i class="material-icons">near_me</i>
                        </div>
                        <br>
                        <h2 class="text-center"><a href="#">Notícia</a></h2>
                        <br>
                        <p>O sentimento pelo o futebol é como uma paixão intensa que aumenta a cada dia que
                            passa...
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="single-Promo">
                        <div class="promo-icon">
                            <i class="material-icons">near_me</i>
                        </div>
                        <br>
                        <h2 class="text-center"><a href="#">Notícia</a></h2>
                        <br>
                        <p>O sentimento pelo o futebol é como uma paixão intensa que aumenta a cada dia que
                            passa...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.site-partials.footer-carousel')
    @include('layouts.site-partials.footer')
</div>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/animationCounter.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/active.js"></script>
</body>

</html>