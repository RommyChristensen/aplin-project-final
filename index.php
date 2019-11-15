<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .intro-2 {
            background: url("./assets/img/header-intro.jpg") no-repeat center center;
            background-size: cover;
        }

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #4285F4;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        html,
        body,
        header,
        .view {
            height: 100%;
        }

        .btn-rounded{
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href=""><img src="assets/img/logo_stts.png" width="200" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Agenda</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">News</a>
                            <a class="dropdown-item" href="#">Events</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aktivitas Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Akademik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dosen</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bahasa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="view intro-2" style="">
        <div class="full-bg-img">
            <div class="mask rgba-blue-slight flex-center">
                <div class="container text-center white-text wow fadeInUp">
                    <h2>This Navbar is fixed and transparent</h2>
                    <br>
                    <h5>It will always stay visible on the top, even when you scroll down</h5>
                    <p>Navbar's background will switch from transparent to solid color while scrolling down</p>
                    <br>
                    <p>Full page intro with background image will be always displayed in full screen mode, regardless of
                        device </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">


        <!--Section: Content-->
        <section class="">

            <!-- Section heading -->
            <h3 class="text-center font-weight-bold mb-5">Latest news</h3>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-4 mb-4">
                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(49).jpg"
                                class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><strong>Card title</strong></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's
                                content.
                            </p>
                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
                                27/08/2019</p>
                            <p class="font-small grey-text mb-0">Anna Smith</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a class="btn btn-primary btn-sm">read more <i
                                        class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(33).jpg"
                                class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><strong>Card title</strong></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's
                                content.
                            </p>
                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
                                27/08/2019</p>
                            <p class="font-small grey-text mb-0">Anna Smith</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a class="btn btn-primary btn-sm">read more <i
                                        class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(84).jpg"
                                class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><strong>Card title</strong></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's
                                content.
                            </p>
                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
                                27/08/2019</p>
                            <p class="font-small grey-text mb-0">Anna Smith</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a class="btn btn-primary btn-sm">read more <i
                                        class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->

            </div>

            <div class="text-center mt-4 mb-5">
                <a class="btn blue-gradient btn-rounded" href="#!">Browse all News <i
                        class="fa fa-angle-right"></i></a>
            </div>

        </section>
        <!--Section: Content-->

        


    </div>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
</body>

</html>