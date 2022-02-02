<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Star Wars</title>

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
        <div class="container">

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
{{--                        <form method="GET" action="details" >--}}
{{--                            @csrf--}}

                            <a href="{{'home'}}" class="nav-link">All Decks</a>
{{--                        </form>--}}
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="services.html" class="nav-link">Services</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="blog.html" class="nav-link">News</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="contact.html" class="nav-link">Contact</a>--}}
                    {{--                    </li>--}}
                </ul>
                <a href=""  class="navbar-brand">SW-API Deck Builder </a>
                <div class="ml-auto">

                    <a href="#" class="btn btn-outline rounded-pill">Leathon Gregory</a>
                </div>
            </div>
        </div>
    </nav>


</header>
<main>
    <div class="page-section">
        <div class="container">
            <div class="row mt-5">
                <div class="row">
                    <p   class="table-des1" >All Cards &nbsp; > &nbsp;</p>
                    <p   class="table-des1" >{{$person['name']}} Details</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 py-3 ">
                    <div class="wrap">

                        @csrf

                        <div class="card-blog">
                            <div class="header">
                                <img class="card-header-img" height="20px" width="20px" src="../assets/img/star/Card.svg" alt="">
                                <h5 class="post-title">{{$person['name']}}</h5>
                                {{--                                            <h5 class="post-title">details/ {{substr($value['url'], -2, 1)}}</h5>--}}

                            </div>
                            <div class="">
                                <table class="table table-borderless " align="center"  >
                                    <thead>
                                    <tr style="padding: 0px">
                                        <th style='text-align: left;'>

                                            @if($person['gender']=="male")
                                                <img class="table-D"   height="18px" width="18px" src="../assets/img/star/Gender-Male.svg" alt="">
                                            @else
                                                <img class="table-D"   height="18px" width="18px" src="../assets/img/star/Gender-Female.svg" alt="">
                                            @endif
                                            {{$person['birth_year']}}
                                        </th>
                                        <th style='text-align: right;'>
                                            @foreach($person['species'] as $specie)
                                                @foreach($species['results'] as $speciesGiven)
                                                    @if($speciesGiven['url']==$specie)
                                                        {{$speciesGiven['name']}}

                                                        @break
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </th>
                                    </tr>
                                    <tr >
                                        <td colspan="2" class="table-hr"> <hr /> </td>
                                    </tr>
                                    </thead>
                                    <tbody >
                                    <tr>
                                        <td colspan="2"   >
                                            <a href="#" class="btn btn-light" >
                                                <img height="15px" width="15px" src="../assets/img/star/Homeworld.svg" alt="">
                                                <p class="table-des1">HOMEWORLD</p>
                                                @foreach($homeworld['results'] as $home)
                                                    @if($person['homeworld']==$home['url'])
                                                        <p   class="table-des2" >{{$home['name']}}</p>
                                                        @break
                                                    @endif
                                                @endforeach

                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"  >
                                            <a href="#" class="btn btn-light"  >
                                                <img height="15px" width="15px" src="../assets/img/star/Vehicle.svg" alt="">
                                                <p class="table-des1">VEHICLES</p>
                                                <p class="table-des2">{{count($person['vehicles'])}}</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"  >
                                            <a href="#" class="btn btn-light" >
                                                <img  height="15px" width="15px" src="../assets/img/star/Starship.svg" alt="">
                                                <p class="table-des1">STARSHIPS</p>
                                                <p  class="table-des2">{{count($person['starships'])}}</p>
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                                {{--                                <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>--}}
                            </div>
                        </div>
                        </a>

                    </div>
                </div>
                {{--                @endforeach--}}

            </div>
        </div>
    </div>
</main>

<footer class="page-footer">

</footer> <!-- .page-footer -->


{{--<script src="../assets/js/jquery-3.5.1.min.js"></script>--}}

{{--<script src="../assets/js/bootstrap.bundle.min.js"></script>--}}

{{--<script src="../assets/vendor/wow/wow.min.js"></script>--}}

{{--<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>--}}

{{--<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>--}}

{{--<script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>--}}

{{--<script src="../assets/js/google-maps.js"></script>--}}

{{--<script src="../assets/js/theme.js"></script>--}}


</body>
</html>
