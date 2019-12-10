<?php
    require_once("helpers/koneksi.php");
    include "tpl/header.php";
    if(isset($_SESSION['bahasa'])){
        include "tpl/navbarID.php";
        $bahasa=2;
      }else{
        include "tpl/white-navbar.php";
        $bahasa=1;
      }
?>

<!-- Intro -->
<div class="card card-intro purple-gradient">

    <div class="card-body white-text rgba-black-light text-center">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <p class="h5 mb-2">
                    <?php
                      if(isset($_SESSION['bahasa'])){
                        echo "Academics";
                      }else{
                        echo "Akademik";
                      }
                    ?>
                </p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

</div>
<!-- Intro -->

<div class="container-fluid my-5 mx-3">
    <div class="row">
        <div class="col-3">
            <div class="list-group z-depth-1" id="list-tab" role="tablist">
                <h4 class="text-center py-3">DIPLOMA 3</h4>
                <a class="list-group-item list-group-item-action active" id="d3" data-toggle="list"
                    href="#list-home" role="tab" aria-controls="home" value="01">D3 - Sistem Informasi</a>
                <h4 class="text-center py-3">STRATA 1</h4>
                <a class="list-group-item list-group-item-action" id="pinfor" data-toggle="list"
                    href="#infor" role="tab" aria-controls="profile" value="11">S1 - Teknik Informatika</a>
                <a class="list-group-item list-group-item-action" id="psib" data-toggle="list"
                    href="#sib" role="tab" aria-controls="messages" value="18">S1 - Sistem Informasi Bisnis</a>
                <a class="list-group-item list-group-item-action" id="pdkv" data-toggle="list"
                    href="#dkv" role="tab" aria-controls="settings" value="17">S1 - Desain Komunikasi Visual</a>
                <a class="list-group-item list-group-item-action" id="pindustri" data-toggle="list"
                    href="#industri" role="tab" aria-controls="profile" value="12">S1 - Teknik Industri</a>
                <a class="list-group-item list-group-item-action" id="pelektro" data-toggle="list"
                    href="#elektro" role="tab" aria-controls="messages" value="10">S1 - Teknik Elektro</a>
                <a class="list-group-item list-group-item-action" id="pdespro" data-toggle="list"
                    href="#despro" role="tab" aria-controls="settings" value="14">S1 - Desain Produk</a>
                <h4 class="text-center py-3">STRATA 2</h4>
                <a class="list-group-item list-group-item-action" id="ps2ti" data-toggle="list"
                    href="#s2ti" role="tab" aria-controls="settings" value="21">S2 - Teknologi Informasi</a>
                <h4 class="text-center py-3">Program Internasional</h4>
                <a class="list-group-item list-group-item-action" id="pbit" data-toggle="list"
                    href="#bit" role="tab" aria-controls="settings" value="02">Bachelor of Information Technology</a>
            </div>
        </div>
        
        <div class="col-8 z-depth-1 mx-5 py-3">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "tpl/footer.php"; ?>

<script>
    let getDescJurusan = (idMatkul) => {
        $.ajax({
            url: "getDescJurusan.php",
            data: {idMatkul : idMatkul},
            method: "post",
            success: function(res){
                $(".tab-pane").html(res);
            }
        });
    }
    $(document).ready(function(){
        $.ajax({
            url: "getDescJurusan.php",
            data: {idMatkul : "01"},
            method: "post",
            success: function(res){
                $(".tab-pane").html(res);
            }
        });

        $(".list-group-item").click(function(){
            let id = $(this).attr("value");
            getDescJurusan(id);
        });
    });
</script>

</body>
</html>