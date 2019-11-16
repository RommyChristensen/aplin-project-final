<?php

require_once("helpers/koneksi.php");
$query = "SELECT * FROM agenda a JOIN agenda_bahasa ab ON ab.agenda_id = a.agenda_id ORDER BY a.agenda_tgl LIMIT 3";
$res = mysqli_query($conn, $query);

$query_testimoni = "SELECT * FROM testimoni t JOIN testimoni_bahasa tb ON tb.testimoni_id = t.testimoni_id LIMIT 3";
$res_testimoni = mysqli_query($conn, $query_testimoni);
include "tpl/header.php";

?>
    <nav class="navbar navbar-trans fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
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
            <h3 class="text-center mb-5">Latest news</h3>

            <div class="row">
                <?php
                    while($news = mysqli_fetch_assoc($res)){
                ?>
                <div class="col-md-4 mb-4">
                    <!--Card-->
                    <div class="card hoverable wow fadeInLeft">

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
                <h3 class="mb-4 pb-2 text-white">Testimoni Mahasiswa</h3>

                <div class="wrapper-carousel-fix">
                    <!-- Carousel Wrapper -->
                    <div id="carousel-example-1"
                        class="carousel no-flex testimonial-carousel slide carousel-slide wow fadeIn"
                        data-ride="carousel" data-interval="false">
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <?php
                                $i = 0;
                                while($row = mysqli_fetch_assoc($res_testimoni)){
                                $active = ($i == 0) ? "active" : "";
                            ?>
                            <div class="carousel-item <?= $active ?>">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                                            class="rounded-circle img-fluid" alt="First sample avatar image">
                                    </div>
                                    <!--Content-->
                                    <p class="text-white">
                                        <i class="fas fa-quote-left"></i>
                                        <?= $row['testimoni_text'] ?>
                                    </p>
                                    <h4 class="font-weight-bold text-white"><?= $row['testimoni_nama'] ?></h4>
                                    <h6 class="font-weight-bold text-white my-3"><?= $row['testimoni_profil'] ?></h6>
                                    <!--Review-->
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star blue-text"> </i>
                                    <i class="fas fa-star-half-alt blue-text"> </i>
                                </div>
                            </div>
                            <?php
                                $i++;
                                }
                            ?>
                        </div>
                        <!--Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
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

    <div class="container my-5">
        <section class="p-md-3 mx-md-5">
            <h3 class="mb-4 pb-2">Jurusan</h3>
            <div class="row mb-5 d-flex align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header white">
                            <h4 class="font-weight-bold mb-0">S1 Teknik Informatika</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Bidang ini mempelajari bagaimana teknologi informasi mengubah pola hidup manusia.
                                Mahasiswa akan belajar memanfaatkan komputasi untuk problem solving menggunakan
                                teknologi informasi yang sangat dinamis dan terus berkembang.
                            </p>
                            <a class="blue-text font-weight-bold" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="view overlay rounded z-depth-1">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid"
                            alt="Sample project image" />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5 d-flex align-items-center justify-content-end">
                <div class="col-md-6 col-lg-4">
                    <div class="view overlay rounded z-depth-1">
                        <img src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" class="img-fluid"
                            alt="Sample project image" />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header white">
                            <h4 class="font-weight-bold mb-0">S1 Sistem Informasi Bisnis</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Sistem Informasi Bisnis adalah program studi yang menggabungkan Information Technology
                                (IT) dan dunia Bisnis. Sarjana Sistem Informasi Bisnis akan dibekali dengan pengetahuan
                                mengenai proses bisnis dari skala retail hingga manufaktur , sehingga tidak hanya mampu
                                memberikan solusi berbasis Tecnologi yang efektif dan efisien tetapi juga mampu
                                merancang proses bisnis yang inovatif serta dapat mendesain aplikasi berskala menengah,
                                hingga besar.
                            </p>
                            <a class="blue-text font-weight-bold" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header white">
                            <h4 class="font-weight-bold mb-0">S1 Desain Komunikasi Visual</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Desain Komunikasi Visual (DKV) iSTTS berfokus pada 3 pilar utama yaitu Seni, Teknologi,
                                dan Bisnis. Kurikulum Program Studi selalu mengakomodasi kebutuhan dunia desain visual
                                yang selalu berkembang, sehingga lulusan DKV STTS mampu bersaing dalam pasar global
                                khususnya dunia industri kreatif.
                            </p>
                            <a class="blue-text font-weight-bold" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="view overlay rounded z-depth-1">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" class="img-fluid"
                            alt="Sample project image" />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include "tpl/footer.php"; ?>