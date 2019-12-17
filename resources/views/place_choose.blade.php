
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

</head>
<body>

<nav class="mb-5 navbar navbar-expand-lg text-dark">
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
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="row justify-content-center">
    <table id="table" class="col-6">
        <tr>
            @foreach($places_2 as $place_2)

                @if($place_2->place_info==0)
                    <th id="{{$place_2->id}}" class="place" onclick="SelectPlace(this.id,{{$place_2->place}})" title="Верхнє місце">{{$place_2->place}}</th>

                @else
                    <th id="{{$place_2->id}}" class="place"  title="Верхнє місце" style="background:#b8bdd3">{{$place_2->place}}</th>

                @endif
            @endforeach


        </tr>
        <tr>
            @foreach($places_1 as $place_1)

                @if($place_1->place_info==0)
                    <th id="{{$place_1->id}}" class="place" onclick="SelectPlace(this.id,{{$place_1->place}})" title="Нижнє місце">{{$place_1->place}}</th>

                @else
                    <th id="{{$place_1->id}}" class="place " title="Нижнє місце" style="background: #b8bdd3">{{$place_1->place}}</th>

                @endif
            @endforeach



        </tr>
    </table>

</div>
<div class="row mt-5 justify-content-center ">
    <div class="legend text-black-50 col-6">
        <div class="legend-help  ">
         <div class="legend-info">
             <div class="legend-squer-white" onclick="SelectPlace(this.id)"></div>
              <span>Вільне місце</span>
          </div>
          <div class="legend-info">
             <div class="legend-squer-black"></div>
             <span>Зайняте місце</span>
         </div>
          <div class="legend-info">
                <div class="legend-squer-green"></div>
                <span>Вибране місце</span>
         </div>
        </div>
        <div  class="legend-text">
            <p  class="">Парні номери — верхні місця</p>
            <p  class="">Непарні номери — нижні місця</p>
        </div>
    </div>
</div>
<div class="row justify-content-center mt-5">
    <ul id="list" class="passenger-list col-5">
    </ul>
</div>


<script type="text/javascript">




   let click=false;

        function SelectPlace(val,place) {

        var els = document.getElementsByName("DeleteX");
        let elem = document.getElementById(val);
        let style = getComputedStyle(elem);
        if (click===false) {
            elem.style.backgroundColor = '#02c082';

            var tr = document.getElementById('list').innerHTML += "<li class=\"passenger\">\n" +
                "            <div class=\"passenger-info\">\n" +
                "                <span class=\"passenger-counter \" style=\"font-size: 18px\"><!----><?php echo $_SESSION["passenger"]?><!----></span>\n" +
                "                <span class=\"passenger-info-span\"><!----><!---->Потяг 081Л, <!----></span>\n" +
                "                <span  class=\"passenger-info-span\">вагон 7,</span>\n" +
                "                <span  class=\"passenger-info-span\">місце "+place+"  </span>\n" +
                "\n" +
                "            </div>\n" +
                "            <div class=\"passenger-price\">\n" +
                "                <span class=\"passenger-price-span\"><strong> 1000 грн </strong></span>\n" +
                "\n" +
                "            </div>\n" +
                "            <button name=\"DeleteX\" onclick=\"this.name\" >X</button>\n" +
                "        </li>";
            //click++;
            click=true;

        } else if (click===true) {
            elem.style.backgroundColor = "white";

            click = false;
        }


        var els = document.getElementsByName("DeleteX");
        els.forEach(function (item) {
            item.addEventListener("click", function () {
                item.parentNode.parentNode.removeChild(item.parentNode);

            });
        });
    }


</script>

</body>

</html>





>
