
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/place_choose_index.css')}}">
    <?php include '\SOFT\OSPanel\domains\poizd\resources\views\php_func\DB_insertV.php';?>
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
<div class="row">
    <div class="container">

        <table class="table table-striped table-responsive-md btn-table">

    <thead>

    <tr>
        <th>#</th>
        <th>Тип місця</th>
        <th>Номер місця</th>
        <th>Ціна</th>
        <th>Купити</th>
    </tr>
    </thead>

    <tbody>
@foreach($places as $place)
    @if($place->place_info==0)


        <tr>
        <th scope="row" >{{$place->id}}</th>
        <td>{{$place->vagon_type}}</td>
        <td>{{$place->place}}</td>
        <td></td>
        <td>
            <button id="{{$place->id}}" type="button" onclick="location.href='https://poizd/train_choose/place_choose/Ticket_form?place='+this.id" class="btn btn-outline-primary btn-sm m-0 waves-effect">Купити</button>
        </td>

    </tr>

    @endif
@endforeach
    </tbody>

</table>

    </div>
    </div>



<script type="text/javascript">
function place_choose() {
    var data = [
        document.getElementById("2").innerHTML,
        document.getElementById("3").innerHTML,
        document.getElementById("4").innerHTML//далее сколько нужно
    ];
    document.getElementById("data").value = JSON.stringify(data);
}
}



</script>

</body>

</html>






