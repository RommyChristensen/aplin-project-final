<?php

require_once("helpers/koneksi.php");
$query = "SELECT * FROM agenda a JOIN agenda_bahasa ab ON ab.agenda_id = a.agenda_id ORDER BY a.agenda_tgl LIMIT 3";
$res = mysqli_query($conn, $query);

$query_testimoni = "SELECT * FROM testimoni t JOIN testimoni_bahasa tb ON tb.testimoni_id = t.testimoni_id LIMIT 3";
$res_testimoni = mysqli_query($conn, $query_testimoni);
include "tpl/header.php";
if(isset($_SESSION['bahasa'])){
    include "tpl/idxEN.php";
    $bahasa=2;
  }else{
    include "tpl/idxID.php";
    $bahasa=1;
  }
?>
    

    <div class="view intro-2" style="">
        <div class="full-bg-img">
            <div class="mask rgba-blue-slight flex-center">
                <div class="container text-center white-text wow fadeInUp">
                    <h1 class="font-weight-bold">Institut Sains dan Teknologi Terpadu Surabaya</h1>
                    <br>
                    <h5>iSTTS pada mulanya dikenal dengan Institut Teknisi Elektro Surabaya (ITES) yang didirikan pada tanggal 1 Maret 1979. ITES berlokasi di jalan Bali no. 17 Surabaya dan dibawah naungan Yayasan Perguruan Tinggi Teknik Nusantara.</h5>
                    <button class="btn teal accent-3" style="color: #1e38cc;">Take a Tour</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">


        <!--Section: Content-->
        <section class="">

            <!-- Section heading -->
            <div class="text-center mt-4 mb-5">
                <h3 class="text-center mb-5">Agenda Terbaru</h3>
                <a class="btn purple-gradient btn-rounded" href="agenda.php">Lihat Semua Agenda <i class="fa fa-angle-right"></i></a>
            </div>
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
                            <p class="card-text mb-3">
                                <?= substr($news['agenda_deskripsi'], 0, 300); ?>...
                            </p>
                            <p class="font-small"><i class="far fa-clock-o"></i>
                                Published on
                                <span
                                    class="font-weight-bold dark-grey-text"><?= date_format(date_create($news['agenda_tgl']), "d M, Y") ?></span>
                            </p>
                            <p class="font-small grey-text mb-0"><i class="fa fa-map"></i> ISTTS</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a
                                    class="btn btn-outline-default waves-effect btn-sm" href="agendadetail.php?agendaid=<?=$news['agenda_id']?>">selengkapnya <i class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->

                </div>
                <?php
                    }

                ?>
            </div>

        </section>
        <!--Section: Content-->
    </div>

    <div class="row aqua-gradient">
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
        <section class="p-md-3 mx-md-5" id="section1">
            <h3 class="mb-4 pb-2">Jurusan</h3>
            <div class="btn-group mb-3" data-toggle="buttons">
                <button class="btn bg-custom page1">
                    Page 1
                </button>
                <button class="btn bg-custom page2">
                    Page 2
                </button>
            </div>
            <div class="row mb-5 d-flex align-items-center wow fadeInLeft">
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
                    <div class="view overlay rounded d-flex justify-content-center">
                        <img src="assets/img/logo-infor.png" class="img-fluid mt-1"
                            alt="Sample project image" />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5 d-flex align-items-center justify-content-end wow fadeInRight">
                <div class="col-md-6 col-lg-4">
                    <div class="view overlay rounded z-depth-1 d-flex justify-content-center">
                        <img src="assets/img/logo-sib.jpg" class="img-fluid"
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
            <div class="row d-flex align-items-center wow fadeInLeft">
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
                        <img src="assets/img/logo-dkv.png" class="img-fluid"
                            alt="Sample project image" />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-md-3 mx-md-5" id="section2">
            <h3 class="mb-4 pb-2">Jurusan</h3>
            <div class="btn-group mb-3" data-toggle="buttons">
                <button class="btn bg-custom page1">
                    Page 1
                </button>
                <button class="btn bg-custom page2">
                    Page 2
                </button>
            </div>
            <div class="row mb-5 d-flex align-items-center wow fadeInLeft">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header white">
                            <h4 class="font-weight-bold mb-0">S1 Teknik Industri</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Teknik Industri (Industrial Engineering) adalah ilmu teknik yang mencakup bidang perencanaan, desain, instalasi, perbaikan, dan pengembangan sistem terintegrasi yang terdiri dari sumber daya manusia, material, energi, peralatan, dan informasi. Di iSTTS, setiap sarjana Teknik Industri dipersiapkan sebagai industrial system designer, industrial problem analyzer, industrial problem solver, dan &nbsp;technopreneur yang handal memanfaatkan teknologi terkini dalam menghadapi dinamika bisnis global.</p>
                            </p>
                            <a class="blue-text font-weight-bold" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="view overlay rounded d-flex justify-content-center">
                        <img src="assets/img/logo-industri.jpg" class="img-fluid mt-1"
                            alt="Sample project image" />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5 d-flex align-items-center justify-content-end wow fadeInRight">
                <div class="col-md-6 col-lg-4">
                    <div class="view overlay rounded z-depth-1 d-flex justify-content-center">
                        <img src="assets/img/logo-despro.jpeg" class="img-fluid"
                            alt="Sample project image" />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header white">
                            <h4 class="font-weight-bold mb-0">S1 Desain Produk</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Desain Produk iSTTS adalah Program Studi yang memadukan desain dan teknologi otomasi untuk menghasilkan produk yang tidak hanya menarik secara tampilan, tetapi memiliki fungsi smart product.
                            </p>
                            <a class="blue-text font-weight-bold" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center wow fadeInLeft">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header white">
                            <h4 class="font-weight-bold mb-0">S1 Teknik Elektro</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Program studi S1 Teknik Elektro iSTTS mampu menghasilkan sumber daya manusia yang menguasai teknologi Elektronika dan Komputer agar berperan dalam peningkatan mutu kehidupan di tingkat Nasional maupun Internasional.
                            </p>
                            <a class="blue-text font-weight-bold" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="view overlay rounded z-depth-1">
                        <img src="assets/img/logo-default.png" class="img-fluid"
                            alt="Sample project image" />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div>
        <section class="grey lighten-2 py-5">
            
            <div class="flex-center">
            <!--First row-->
            <div class="row">
                <div class="col-md-12">
                    <h3>Annual Events</h3>
                </div>
                <!--First column-->
                <div class="col-md-3 flex-center">
                <img src="assets/img/pk.png" width="250" class="img-fluid wow fadeIn" data-wow-delay=".2s">
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-3 flex-center">
                <img src="assets/img/bunkasai.jpg" width="180" class="img-fluid wow fadeIn" data-wow-delay=".3s">
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-md-3 flex-center">
                <img src="assets/img/dies.png" width="180" class="img-fluid wow fadeIn" data-wow-delay=".4s">
                </div>
                <!--/Third column-->

                <!--Fourth column-->
                <div class="col-md-3 flex-center">
                <img src="assets/img/kartini.png" width="200" class="img-fluid wow fadeIn" data-wow-delay=".5s">
                </div>
                <!--/Fourth column-->

            </div>
            <!--/First row-->

            </div>
            
        </section>
    </div>

<?php include "tpl/footer.php"; ?>

</body>
</html>