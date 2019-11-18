<?php require_once("helpers/koneksi.php"); ?>
<?php include "tpl/header.php"; ?>
<?php include "tpl/white-navbar.php"; ?>
<?php
    $desc_ukk = mysqli_query($conn, "SELECT * FROM org_bahasa WHERE org_bahasa_id = 24")->fetch_assoc();
?>
<!-- Intro -->
<div class="card card-intro purple-gradient">

    <div class="card-body white-text rgba-black-light text-center">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <p class="h2 mb-2">
                    Aktivitas Mahasiswa
                </p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

</div>
<!-- Intro -->


<!-- HAI ROMMY!!, YOUR CODE GOES DOWN HERE -->

<div class="row">
    <div class="col-md-3">
        <div class="container my-5">
            <ul class="list-group">
                <li class="list-group-item purple" id="ukm">
                    <a href="" id="btnUkm" class="white-text">Unit Kegiatan Mahasiswa</a>
                </li>
                <li class="list-group-item" id="ukk">
                    <a href="" id="btnUkk" class="black-text">Unit Kegiatan Kerohanian</a>
                </li>
                <li class="list-group-item" id="hima">
                    <a href="" id="btnHima" class="black-text">Himpunan Mahasiswa</a>
                </li>
                <li class="list-group-item" id="bem">
                    <a href="" id="btnBem" class="black-text">Badan Eksekutif Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div id="pgukm" class="container my-5">
            <!--Section: Content-->
            <section class="dark-grey-text text-center">
                <!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">UNIT KEGIATAN MAHASISWA (UKM)</h3>
                <hr class="w-header">
                <!-- Section description -->
                <p class="lead text-muted mx-auto mt-4 pt-2 mb-5">
                    UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian,
                    setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian
                    besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.
                </p>

                <!--First row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-3 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable purple-gradient">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-camera-retro fa-2x text-muted white-text"></i></p>
                                <h5 class="white-text mb-0">Focaloid</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-3 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable purple-gradient">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-hiking fa-2x text-muted white-text"></i></p>
                                <h5 class="white-text mb-0">Mapala</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-3 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable purple-gradient">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-chess-pawn fa-2x text-muted white-text"></i></p>
                                <h5 class="white-text mb-0">Catur</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-3 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable purple-gradient">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-theater-masks fa-2x text-muted white-text"></i></p>
                                <h5 class="white-text mb-0">Teater</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                </div>
                <!--First row-->
                <!--First row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-2 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-basketball-ball fa-2x text-muted"></i></p>
                                <h5 class="black-text mb-0">Basket</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-2 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-guitar fa-2x text-muted"></i></p>
                                <h5 class="black-text mb-0">Band</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-2 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-walking fa-2x text-muted"></i></p>
                                <h5 class="black-text mb-0">Dance</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-2 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-fist-raised fa-2x text-muted"></i></p>
                                <h5 class="black-text mb-0">Taekwondo</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-2 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-table-tennis fa-2x text-muted"></i></p>
                                <h5 class="black-text mb-0">Tenis Meja</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-2 mb-4">
                        <!-- Card -->
                        <a href="#!" class="card hoverable">
                            <!-- Card content -->
                            <div class="card-body my-4">
                                <p><i class="fas fa-running fa-2x text-muted"></i></p>
                                <h5 class="black-text mb-0">Badminton</h5>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->
                </div>
                <!--First row-->
            </section>
        </div>

        <div id="pgukk" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">

                <!-- Section heading -->
                <h3 class="font-weight-bold mb-4 pb-2">Unit Kegiatan Kerohanian (UKK)</h3>
                <hr class="w-header">
                <!-- Section description -->
                <p class="mx-auto mb-5 lead text-muted mt-4 pt-2">UKK adalah organisasi bentukan mahasiswa lainnya lagi yang berhubungan dengan agama yang dianut mahasiswa. Organisasi ini sepenuhnya didukung oleh kampus, mengingat iSTTS merupakan salah satu kampus swasta yang menghargai kebebasan beragama.</p>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mb-4">
                        <div class="card card-image"
                            style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg);">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div>
                                    <h3 class="py-3 font-weight-bold">
                                        <strong>ISTTS For Jesus (IFJ)</strong>
                                    </h3>
                                    <p class="pb-3">
                                        <?= $desc_ukk['org_deskripsi']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 mb-4">
                        <div class="card card-image"
                            style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg);">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div>
                                    <h3 class="py-3 font-weight-bold">
                                        <strong>Keluarga Mahasiswa Katolik (KMK)</strong>
                                    </h3>
                                    <p class="pb-3">
                                        <?= $desc_ukk['org_deskripsi']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 mb-4">
                        <div class="card card-image"
                            style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20%2847%29.jpg);">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div>
                                    <h3 class="py-3 font-weight-bold">
                                        <strong>Unit Kegiatan Kerohanian Islam (UKKI)</strong>
                                    </h3>
                                    <p class="pb-3">
                                        <?= $desc_ukk['org_deskripsi']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 mb-4">
                        <div class="card card-image"
                            style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg);">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div>
                                    <h3 class="py-3 font-weight-bold">
                                        <strong>Kumpulan Mahasiswa Buddha (KMB)</strong>
                                    </h3>
                                    <p class="pb-3">
                                        <?= $desc_ukk['org_deskripsi']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!--Section: Content-->
        </div>

        <div id="pghima" class="container my-5">
            <!--Section: Content-->
            <section class="dark-grey-text text-center">
                <!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Himpunan Mahasiswa (HIMA)</h3>
                <hr class="w-header">
                <!-- Section description -->
                <p class="lead text-muted mx-auto mt-4 pt-2 mb-5">
                    Himpunan Mahasiswa merupakan organisasi yang terbentuk dari program studi. Organisasi ini secara struktural berada di bawah BEM. Kegiatan yang banyak dilakukan oleh organisasi ini adalah seminar dan kunjungan. Beberapa pabrik dan industri sudah pernah dikunjungi oleh HIMA, begitu sebutannya. Hima pun tidak terkungkung dalam lingkup kampus. Mereka juga menjalin kerja sama dengan pihak-pihak luar, terutama saat akan menyelenggarakan event-event besar.
                </p>
                <div class="container my-5">
                    <section class="p-md-3 mx-md-5 text-lg-left">
                        <div class="row d-flex justify-content-center">
                            <h2 class="font-weight-bold pb-4">Events</h2>
                            </div>
                            <div class="row text-center d-flex justify-content-center mt-4">
                            <div class="col-lg-4 col-md-6 mb-5">
                                <i class="far fa-chart-bar indigo-text fa-3x mb-4"></i>
                                <h4 class="font-weight-bold mb-4">ITRC</h4>
                                <p class="text-muted px-2 mb-lg-0">
                                    Diadakan oleh HIMAFOR stts, acara ini merupakan ajang lomba
                                    robotik tingkat nasional dan sudah diikuti oleh puluhan tim dari seluruh Indonesia
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5">
                                <i class="fa fa-home pink-text fa-3x mb-4"></i>
                                <h4 class="font-weight-bold mb-4">Carding Competition</h4>
                                <p class="text-muted px-2 mb-lg-0">
                                    Acara yang dibawahi oleh HIMA DKV dan Despro, merupakan lomba membuat
                                    aneka macam produk seperti membuat packaging dari barang
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5">
                                <i class="fa fa-home pink-text fa-3x mb-4"></i>
                                <h4 class="font-weight-bold mb-4">Kunjungan Industri</h4>
                                <p class="text-muted px-2 mb-lg-0">
                                    Kegiatan yang rutin diadakan di tiap program studi, mengunjungi banyak
                                    perusahaan dan mempelajari hal baru disana.
                                </p>
                            </div>
                        </div>
                    </section>
                    </div>
            </section>
        </div>

        <div id="pgbem" class="container my-5">
            <!--Section: Content-->
            <section class="dark-grey-text text-center">
                <!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">BADAN EKSEKUTIF MAHASISWA (BEM)</h3>
                <hr class="w-header">
                <!-- Section description -->
                <p class="lead text-muted mx-auto mt-4 pt-2 mb-5">
                Badan Eksekutif Mahasiswa (BEM) iSTTS merupakan badan perwakilan dari mahasiswa seluruh jurusan dalam usaha menyalurkan dan memperjuangkan aspirasi mahasiswa kepada pihak iSTTS. BEM juga merupakan sebuah badan yang memprakarsai dan mengoraganisir segala macam kegiatan mahasiswa di iSTTS yang bersifat umum dan tidak berbau akademis. Di samping itu BEM merupakan badan yang menyalurkan minat dan bakat yang disukai oleh mahasiswa iSTTS.
                </p>
                <div class="container my-5">
                    <section class="p-md-3 mx-md-5 text-lg-left">
                        <div class="row d-flex justify-content-center">
                            <h2 class="font-weight-bold pb-4">Events</h2>
                            </div>
                            <div class="row text-center d-flex justify-content-center mt-4">
                            <div class="col-lg-4 col-md-6 mb-5">
                                <i class="far fa-chart-bar indigo-text fa-3x mb-4"></i>
                                <h4 class="font-weight-bold mb-4">Eagle Cup</h4>
                                <p class="text-muted px-2 mb-lg-0">
                                    Eagle Cup adalah ajang lomba sport yang diadakan tiap tahun
                                    menjelang 17 agustus dan diikuti oleh semua mahasiswa baik baru
                                    maupun lama.
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5">
                                <i class="fa fa-home pink-text fa-3x mb-4"></i>
                                <h4 class="font-weight-bold mb-4">Upacara 17 Agustus</h4>
                                <p class="text-muted px-2 mb-lg-0">
                                    Upacara rutin diadakan setiap tanggal 17 Agustus dan wajib dihadiri oleh
                                    mahasiswa baru, kepanitiaan pekan kampus serta para asisten.
                                </p>
                            </div>
                        </div>
                    </section>
                    </div>
            </section>
        </div>
    </div>
</div>

<!-- HAPPY CODING!!! KEEP FIGHTING!!! -->

<?php include "tpl/footer.php"; ?>
<script>

$(document).ready(function () {
    $("#pgukk").hide();
    $("#pgbem").hide();
    $("#pghima").hide();
    $("#btnUkm").click(function (e) {
        e.preventDefault();
        cekColor("#ukk", "#btnUkk");
        cekColor("#hima", "#btnHima");
        cekColor("#bem", "#btnBem");

        $("#ukm").addClass("purple");
        $("#btnUkm").addClass("white-text");
        showFragment("#pgukm");
    });
    $("#btnHima").click(function (e) {
        e.preventDefault();
        cekColor("#ukk", "#btnUkk");
        cekColor("#ukm", "#btnUkm");
        cekColor("#bem", "#btnBem");

        $("#hima").addClass("purple");
        $("#btnHima").addClass("white-text");
        showFragment("#pghima");
    });
    $("#btnBem").click(function (e) {
        e.preventDefault();
        cekColor("#ukk", "#btnUkk");
        cekColor("#hima", "#btnHima");
        cekColor("#ukm", "#btnUkm");

        $("#bem").addClass("purple");
        $("#btnBem").addClass("white-text");
        showFragment("#pgbem");
    });
    $("#btnUkk").click(function (e) {
        e.preventDefault();
        cekColor("#ukm", "#btnUkm");
        cekColor("#hima", "#btnHima");
        cekColor("#bem", "#btnBem")

        $("#ukk").addClass("purple");
        $("#btnUkk").addClass("white-text");
        showFragment("#pgukk");
    });
});

function cekColor(id, id2){
    if($(id).hasClass("purple")){
        $(id).removeClass("purple");
        $(id2).removeClass("white-text");
        $(id2).addClass("black-text");
        return true;
    }

    if($(id2).hasClass("white-text")){
        $(id2).removeClass("white-text");
        $(id2).addClass("black-text");
    }
    return false;
}

function showFragment(id){
    $("#pgukk").hide();
    $("#pgukm").hide();
    $("#pgbem").hide();
    $("#pghima").hide();

    $(id).fadeIn();
}

</script>
</body>
</html>