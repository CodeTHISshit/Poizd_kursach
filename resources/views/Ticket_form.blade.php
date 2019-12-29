<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <title>Білет</title>
</head>
<body>
<nav class="mb-5 navbar navbar-expand-lg text-dark">
    <a id="Logo" class=" text-dark navbar-brand" href="/">PoizdaTYT</a>
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
@foreach($wagons as $wagon)
<div class="row">
    <div class="container col-3">
        <!-- Default form contact -->
        <form class=" border border-black p-5 shadow" action="/train_choose/place_choose/Ticket_form/Succses_send" method="post">

            <p class="h4 mb-4">Замовити білет</p>

            <!-- Name -->


            <input  name="FIO" type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="ПІБ" value="{{$fio ?? ''}}">


            <input type="password" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Паспорт">

            <input type="text" disabled id="defaultContactFormEmail" class="form-control mb-4" placeholder="Номер Поїзда" value="{{$train_num ?? ''}}">

            <input type="text" disabled id="defaultContactFormEmail" class="form-control mb-4" placeholder="Вагон" value="{{$wagon->vagon ?? ''}}">

            <input type="text" disabled id="defaultContactFormEmail" class="form-control mb-4" placeholder="Тип Місця" value="{{$wagon->place_type ?? ''}}">

            <input type="number" disabled id="defaultContactFormEmail" class="form-control mb-4" placeholder="Номер Місця" value="{{$wagon->place ?? ''}}">

            <input type="number" disabled id="defaultContactFormEmail" class="form-control mb-4" placeholder="Ціна" value="{{$price ?? '0'}}">


            <!-- Subject -->
            <label>Привілегії</label>
            <select class="browser-default custom-select mb-4">
                <option value="" disabled>Виберіть привілегію</option>
                <option value="1" selected>Депутат</option>
                <option value="2">Ветеран</option>
                <option value="3">Інвалід</option>
                <option value="4">Пенсіонер</option>
            </select>




            <!-- Copy -->
            <div class="custom-control custom-checkbox mb-4">
                <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                <label class="custom-control-label" for="defaultContactFormCopy">Надіслати копію на почту</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit">Send</button>

        </form>
        <!-- Default form contact -->

    </div>
</div>
@endforeach
</body>
</html>
