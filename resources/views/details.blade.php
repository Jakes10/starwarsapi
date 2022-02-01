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
                        <form method="GET" action="details" >
                            @csrf

                        <a href="/" class="nav-link">All Decks</a>
                        </form>
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
    {{--    {{print_r($response)}}--}}
    {{--    <div class="page-banner home-banner">--}}
    {{--        <div class="container h-100">--}}
    {{--            <div class="row align-items-center h-100">--}}
    {{--                <div class="col-lg-6 py-3 wow fadeInUp">--}}
    {{--                    <h1 class="mb-4">Great Companies are built on great Products</h1>--}}
    {{--                    <p class="text-lg mb-5">Ignite the most powerfull growth engine you have ever built for your company</p>--}}

    {{--                    <a href="#" class="btn btn-outline border text-secondary">More Info</a>--}}
    {{--                    <a href="#" class="btn btn-primary btn-split ml-2">Watch Video <div class="fab"><span class="mai-play"></span></div></a>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-6 py-3 wow zoomIn">--}}
    {{--                    <div class="img-place">--}}
    {{--                        <img src="../assets/img/bg_image_1.png" alt="">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</header>

<main>


    <div class="page-section">
        <div class="container">
            {{--            <div class="text-center wow fadeInUp">--}}
            {{--                <div class="subhead">Our Blog</div>--}}
            {{--                <h2 class="title-section">Read Latest News</h2>--}}
            {{--                <div class="divider mx-auto"></div>--}}
            {{--            </div>--}}

            <div class="row mt-5">

                <div class="col-lg-3 col-md-6 col-sm-12 py-3 ">
                    <div class="card-blog">
                        <div class="header">
                            <img class="card-header-img" height="20px" width="20px" src="../assets/img/star/Card.svg" alt="">
{{--                            <h5 class="post-title">LUKE SKYWALER</h5>--}}

                        </div>
                        <div class="">
                            <table class="table table-borderless " align="center"  >
                                <thead>
                                <tr style="padding: 0px">
                                    <th style='text-align: left;'>
                                        <img class="table-D"   height="18px" width="18px" src="../assets/img/star/Gender-Male.svg" alt="">
                                        YB23
                                    </th>
                                    <th style='text-align: right;'> Species</th>
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
                                            <p   class="table-des2" >Boohaas</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"  >
                                        <a href="#" class="btn btn-light"  >
                                            <img height="15px" width="15px" src="../assets/img/star/Vehicle.svg" alt="">
                                            <p class="table-des1">VEHICLES</p>
                                            <p class="table-des2">10</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"  >
                                        <a href="#" class="btn btn-light" >
                                            <img  height="15px" width="15px" src="../assets/img/star/Starship.svg" alt="">
                                            <p class="table-des1">STARSHIPS</p>
                                            <p  class="table-des2">0</p>
                                        </a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                            {{--                                <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>--}}
                        </div>
                    </div>
                </div>

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
