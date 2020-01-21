
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>


    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/style_index.css')}}">
    <link rel="stylesheet" href="{{asset('resources/sass/app.scss')}}">
    <!-- Custom styles for this template -->


</head>
<body>
<nav class="mb-5 navbar navbar-expand-lg text-white">
    <a id="Logo" class=" text-white navbar-brand" href="#">PoizdaTYT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="navbarSupportedContent-333">

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
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<section id="TextRow" class="not-adaptive">
    <div class="row col-12 justify-content-center ">
    <h1 class="h4 mb-4 " style="font-size: 55px">Купити залізничні квитки просто</h1>
    </div>
</section>
<section class="not-adaptive ">
    <div id="SearchRow" class="row justify-content-center" >
        <form id="SearchField" class="text-center col-7  p-5 mt-5" action="/train_choose" method="post">
            @csrf
            <div class="form-row mb-4">
                <div class="col  mr-5">

                <!-- <input name="depart" type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Відправна точка">-->
                    <select class="browser-default custom-select custom-select-lg mb-3" name="depart" id="">
                        @foreach($stations as $station)
                            <option value="{{$station->name}}">{{$station->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <i class="far fa-compass" aria-hidden="true" onclick=""></i>
                </div>
                <div class="col mr-3 ml-5">
                    <!-- Last name -->
                <!--<input name="arrive" type="text" id="defaultRegisterFormLastName" autocomplete="on"  class="form-control" placeholder="Кінцева точка">-->
                    <select class="browser-default custom-select custom-select-lg mb-3" name="arrive" id="">
                        @foreach($stations as $station)
                            <option value="{{$station->name}}">{{$station->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row justify-content-end" >
                <button id="btn" class="btn-warning" type="submit"><strong>Замовити</strong></button>;
            </div>

        </form>
    </div>
</section>



</body>
</html>
