<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            height: 150vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        /*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
        .services .icon-box {
            text-align: center;
            background: #fefefe;
            box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
            padding: 90px 150px;
            transition: all ease-in-out 0.3s;
        }

        .services .icon-box .icon {
            margin: 0 auto;
            width: 64px;
            height: 64px;
            background: #ed502e;
            border-radius: 5px;
            transition: all .3s ease-out 0s;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transform-style: preserve-3d;
            position: relative;
            z-index: 2;
        }

        .services .icon-box .icon i {
            color: #fff;
            font-size: 28px;
        }

        .services .icon-box .icon::before {
            position: absolute;
            content: '';
            left: -8px;
            top: -8px;
            height: 100%;
            width: 100%;
            background: #007bff;
            border-radius: 5px;
            transition: all .3s ease-out 0s;
            transform: translateZ(-1px);
            z-index: 1;
        }

        .services .icon-box h4 {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .services .icon-box h4 a {
            color: #0b2341;
        }

        .footText {
            color: white;
        }

        .services .icon-box p {
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .services .icon-box:hover {
            background: #fff;
            border-color: #007bff;
        }

        .services .icon-box:hover .icon {
            background: #fff;
        }

        .services .icon-box:hover .icon i {
            color: #ed502e;
        }

        .services .icon-box:hover .icon::before {
            background: #f1775d;
        }

        .services .icon-box:hover h4 a,
        .services .icon-box:hover p {
            color: #fff;
        }


        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 50px;
            top: 18px;

        }
        .userbtn
        {
            color: white;
            font-size: 20px;
        }

        .textlinks:hover {
            color: blue;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .bg-1 {
            background: url("vahicle.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .hero-area {
            padding: 100px 0 20px;
        }

        .hero-area .content-block {
            padding-bottom: 150px;
        }

        .hero-area .advance-search {
            background: #fff;
            padding: 40px 15px 25px 15px;
            border-radius: 3px;
            margin-bottom: -50px;
            box-shadow: -1px 3px 6px rgba(0, 0, 0, 0.12);
        }

        .links>a {
            color: #ffffff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .boxdesign:hover {

            background-color: gray;

        }

        .imgdesign {
            transition: all 2s ease-in-out;
        }

        .imgdesign:hover {
            transform: scale(1.8);
        }

        .buttondesign {
            border-radius: 10px;
            width: 100%;
        }
        
        .listdatat{
            list-style-type:none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Online Vehicle Service System</a>

            @if (Route::has('login'))
            
            <div class="form-inline">
                @auth
                <li class="nav-item dropdown listdatat">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle userbtn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </div>
                @else
                <a href="{{ route('login') }}">
                    <lable class="textlinks">Login</lable>
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    <lable class="textlinks">Register</lable>
                </a>
                @endif
                @endauth

            </div>
            @endif
        </div>
    </nav>
    </div>
    </div>

    <!--===============================
=            Hero Area            =
================================-->
    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block">
                        <h1 style="color: #fff; font-size:50px; ">Search your Near Location for Vahicle service</h1>

                    </div>
                    <!-- Advance Search -->
                    <div class="advance-search">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 align-content-center">
                                    <form>
                                        <div class="form-row">

                                            <div class="form-group col-md-12">
                                                <a href="{{url('listservices')}}" class="btn btn-primary buttondesign">
                                                    <h3>Search for service Now</h3>
                                                </a>

                                            </div>
                                            <div class="form-group col-md-2 align-self-center">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        <!-- Container End -->
    </section>

    <!--===================================
=            Client Slider            =
====================================-->

    <!-- ======= List of Services Centers Section ======= -->

    <!-- End Services centers list Section -->

    <br>
    <br></br>
    <br>
    <br></br>
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>OUR SERVICE</h2>
                <p></p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box boxdesign">
                        <br><br>
                        <br>
                        <div class="icon imgdesign"><img src="seachlogo1.png" width="270rem" height="200rem"></div>
                        <br><br>
                        <br>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box boxdesign">
                        <br><br>
                        <br>
                        <div class="icon imgdesign"><img src="servicelogo1.png" width="280rem" height="200rem"></div>
                        <br><br>
                        <br>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box boxdesign">
                        <br><br>
                        <br>
                        <div class="icon imgdesign"><img src="paymentlogo1.png" width="310rem" height="200rem"></div>
                        <br><br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <!-- Footer -->
    <br><br><br>
    <footer class="page-footer bg-primary">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 footText">Copyright Of :
            <a href="#" class="footText">Online Vehicle Service System</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    @yield('content')
</body>

</html>