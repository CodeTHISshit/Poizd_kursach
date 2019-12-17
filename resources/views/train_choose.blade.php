<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/style_index.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/traine_choose_SelectForm.css')}}">
    <title>Document</title>
</head>
<body>
<nav class="mb-5 navbar navbar-expand-lg   text-dark">
    <a id="Logo" class=" text-dark navbar-brand" href="#">PoizdaTYT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
                <a class="nav-link text-dark" href="#">Поїзда
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Автобуси</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="ContactUs.html">Літаки</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Dropdown
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-google-plus-g"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-3" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                     aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Action</a >
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

    @foreach ($users as $user)
@if($user->depart==$depart && $user->arrive==$arrive)

<div class="container mt-5 mb-5 ">
    <div class="trip-card " id="trip-017Л">
        <div class="trip-info">
            <div class="top-wrapper"><!----><!----><!---->
                <h3 class="transport-name">
                    <a class="ng-tns-c25-9" href="/train/017Л">
                        <span class="transport-name-number">{{$user->train_number}}</span>
                        {{$user->depart}} — {{$user->arrive}}
                    </a>
                </h3>
                <div class="transport-properties">
                    <p class="ng-tns-c25-9">{{$user->type}}  </p>
                </div><!---->
                <div class="transport-image-container"><!---->
                    <img class="transport-image" src='/public/img/'>
                    <div class="popularity-wrapper">
                        <p class="popularity-title">Популярность</p>
                        <div class="popularity-stars"><!---->
                            <span class="fas fa-stack">
                                                <i class="fas fa-star popular"></i><!---->
                                            </span>
                            <span class="fa fa-stack">
                                                <i class="fa fa-star popular"></i><!---->
                                            </span>
                            <span class="fa fa-stack">
                                                <i class="fa fa-star popular"></i><!----></span>
                            <span class="fa fa-stack">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star half-popular"></i>
                                            </span>
                            <span class="fa fa-stack">
                                                <i class="fa fa-star"></i><!---->
                                            </span>
                        </div>
                        <p class="popularity-value">3.52</p>
                    </div>
                </div><!---->
                <div class="code-container">
                    <i class="fas fa-qrcode code-icon"></i><!----><!----><!----><!---->
                    <div class="code-title"><!---->Билет отложенной печати
                        <div class="tooltip-legacy">
                            <h4 class="tooltip-legacy-title">Билет отложенной печати</h4>
                            <p class="tooltip-legacy-text">Это документ, который необходимо распечатать после бронирования и обменять его в кассе на любой железнодорожной станции не позднее, чем за 15 минут до отправления поезда</p>
                        </div>
                    </div><!----><!---->
                </div><!---->
            </div><!---->
            <div class="bottom-wrapper"><!----><!----><!---->
                <div class="toggle-route-btn-container">
                    <button class="toggle-route-btn"><!---->Маршрут поезда<!----></button>
                </div><!---->
            </div>
        </div>
        <div class="trip-details">
            <div class="top-wrapper">
                <div class="trip-duration-info"><!----><!---->
                    <div class="time-container">
                        <p class="time-value">{{date("G:i",strtotime($user->departure_time))}}</p>
                        <div class="duration-wrapper">
                            <div class="duration-delimiter"></div>
                            <p class="duration-time"></p>
                            <div class="duration-delimiter"></div>
                        </div>
                        <p class="time-value">{{date("G:i",strtotime($user->time_arrive))}}</p>
                    </div>
                    <div class="date-container">
                        <div class="date-value">
                            {{date("j F, D",strtotime($user->departure_time))}}
                        </div>
                        <div class="date-value">
                            {{date("j F, D",strtotime($user->time_arrive))}}
                        </div>
                    </div><!---->
                </div>
                <div class="trip-stations">
                    <div class="departure-station">
                        <div class="departure-station-name">{{$user->depart}}</div>
                        <div class="departure-station-address"></div>
                    </div>
                    <div class="arrival-station">
                        <div class="arrival-station-name">{{$user->arrive}}</div>
                        <div class="arrival-station-address"></div>
                    </div>
                </div><!---->
            </div>
            <div class="bottom-wrapper">

                <div class="transport-type-info">
                    <div class="wagon-features-container">
                        <span class="wagon-type"><,</span>
                        <span class="wagon-class">  </span>
                        <span class="free-seats">14 мест</span>
                    </div>
                    <div class="wagon-info-container"><!---->
                        <span class="ticket-price"><!---->
                                        <span class="price-value">  </span><!---->
                                        <span class="price-currency">ГРН</span>
                                    </span><!---->
                        <button class="select-type-btn progress-btn"
                                onclick=location="/train_choose/place_choose"  >Выбрать

                        </button>
                    </div>
                </div><!----><!---->
            </div>
        </div><!---->
    </div><!----><!---->
</div>
@endif
    @endforeach
<?php
    function train_id_put($id_train){
        session_start();
        $_SESSION['train_selected']=$id_train;


    }


?>
<script>
    //function train_id_put(value) {
      //  sessionStorage.setItem('train_id_selected',value)
    //}
</script>
</body>
</html>
