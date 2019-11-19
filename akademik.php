<?php
    require_once("helpers/koneksi.php");
    include "tpl/header.php";
    include "tpl/white-navbar.php";
?>

<!-- Intro -->
<div class="card card-intro purple-gradient">

    <div class="card-body white-text rgba-black-light text-center">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <p class="h5 mb-2">
                    AKADEMIK
                </p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

</div>
<!-- Intro -->

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-3">
            <div class="list-group" id="list-tab" role="tablist">
                <h4 class="text-center my-3">DIPLOMA 3</h4>
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                    href="#list-home" role="tab" aria-controls="home">D3 - Sistem Informasi</a>
                <h4 class="text-center my-3">STRATA 1</h4>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                    href="#infor" role="tab" aria-controls="profile">S1 - Teknik Informatika</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                    href="#sib" role="tab" aria-controls="messages">S1 - Sistem Informasi Bisnis</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                    href="#dkv" role="tab" aria-controls="settings">S1 - Desain Komunikasi Visual</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                    href="#list-profile" role="tab" aria-controls="profile">S1 - Teknik Industri</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                    href="#list-messages" role="tab" aria-controls="messages">S1 - Teknik Elektro</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                    href="#list-settings" role="tab" aria-controls="settings">S1 - Desain Produk</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <?php
                        $query = "SELECT * FROM jurusan_bahasa WHERE jurusan_bahasa_id = 1";
                        $res = mysqli_query($conn, $query)->fetch_assoc();
                        echo $res['jurusan_deskripsi'];
                    ?>
                </div>
                <div class="tab-pane fade" id="infor" role="tabpanel" aria-labelledby="list-profile-list">
                    infor
                </div>
                <div class="tab-pane fade" id="sib" role="tabpanel" aria-labelledby="list-messages-list">
                    sib
                </div>
                <div class="tab-pane fade" id="dkv" role="tabpanel" aria-labelledby="list-settings-list">
                    dkv
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "tpl/footer.php"; ?>
</body>
</html>