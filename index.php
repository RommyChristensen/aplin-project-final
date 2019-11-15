<?php
require_once("helpers/koneksi.php");
$query = "SELECT * FROM agenda a JOIN agenda_bahasa ab ON ab.agenda_id = a.agenda_id ORDER BY a.agenda_tgl LIMIT 3";
$res = mysqli_query($conn, $query);
// require_once("helpers/dashboard-helper.php");
// $news_data = getLatestNews()->fetch_all(MYSQLI_ASSOC);
// print_r($res);
?>
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

        .btn-rounded {
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
                <?php
                    while($news = mysqli_fetch_assoc($res)){
                ?>
                <div class="col-md-4 mb-4">
                    <!--Card-->
                    <div class="card hoverable wow fadeInUp">

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
                            <h4 class="card-title">
                                <strong><?= substr($news['agenda_judul'], strpos($news['agenda_judul'], "]") + 1) ?></strong>
                            </h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text text-truncate mb-3">
                                deskripsi
                            </p>
                            <p class="font-small"><i class="far fa-clock-o"></i>
                                Published on
                                <span
                                    class="font-weight-bold dark-grey-text"><?= date_format(date_create($news['agenda_tgl']), "d M, Y") ?></span>
                            </p>
                            <p class="font-small grey-text mb-0"><i class="fa fa-map"></i> ISTTS</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a
                                    class="btn btn-primary btn-sm">read more <i class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->

                </div>
                <?php
                    }

                ?>
            </div>

            <div class="text-center mt-4 mb-5">
                <a class="btn blue-gradient btn-rounded" href="#!">Browse all News <i class="fa fa-angle-right"></i></a>
            </div>

        </section>
        <!--Section: Content-->




    </div>

    <div class="row blue-gradient">
        <div class="container mt-5 mb-5">


            <!--Section: Content-->
            <section class="text-center dark-grey-text">

                <!-- Section heading -->
                <h3 class="font-weight-bold mb-4 pb-2 text-white">Testimonials</h3>

                <div class="wrapper-carousel-fix">
                    <!-- Carousel Wrapper -->
                    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade"
                        data-ride="carousel" data-interval="false">
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                            class="rounded-circle img-fluid" alt="First sample avatar image">
                                    </div>
                                    <!--Content-->
                                    <p class="text-white">
                                        <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Quod
                                        eos
                                        id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore
                                        laboriosam labore
                                        sit, aspernatur praesentium iste impedit quidem dolor veniam.
                                    </p>
                                    <h4 class="font-weight-bold">Anna Deynah</h4>
                                    <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
                                    <!--Review-->
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star-half-alt blue-text"> </i>
                                </div>
                            </div>
                            <!--First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                                            class="rounded-circle img-fluid" alt="Second sample avatar image">
                                    </div>
                                    <!--Content-->
                                    <p>
                                        <i class="fas fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut
                                        odit
                                        aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                        nesciunt. Neque
                                        porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                        velit, sed quia
                                        non numquam eius modi tempora incidunt ut labore. </p>
                                    <h4 class="font-weight-bold">Maria Kate</h4>
                                    <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
                                    <!--Review-->
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                </div>
                            </div>
                            <!--Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg"
                                            class="rounded-circle img-fluid" alt="Third sample avatar image">
                                    </div>
                                    <!--Content-->
                                    <p>
                                        <i class="fas fa-quote-left"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus
                                        error sit voluptatem accusantium doloremque laudantium.</p>
                                    <h4 class="font-weight-bold">John Doe</h4>
                                    <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
                                    <!--Review-->
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="far fa-star blue-text"> </i>
                                </div>
                            </div>
                            <!--Third slide-->
                        </div>
                        <!--Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
                            data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
                            data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--Controls-->
                    </div>
                    <!-- Carousel Wrapper -->
                </div>

            </section>
            <!--Section: Content-->


        </div>
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
    <script>
        new WOW().init();
    </script>

</body>

</html>