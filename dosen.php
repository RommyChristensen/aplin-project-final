<?php require_once("helpers/koneksi.php"); ?>
<?php include "tpl/header.php"; ?>
<?php include "tpl/white-navbar.php"; ?>
<!-- Intro -->
<div class="card card-intro purple-gradient">
    <div class="card-body white-text rgba-black-light text-center">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <p class="h2 mb-2">
                    DOSEN
                </p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

</div>
<!-- Intro -->


<!-- HAI MOON!!, YOUR CODE GOES DOWN HERE -->

<div class="row">
    <div class="col-md-3">
        <div class="container my-5">
            <ul class="list-group">
				<li class="list-group-item purple" id="d3infor">
                    <a href="" id="btnD3Infor" class="white-text">D3 Manajemen Informatika</a>
                </li>
                <li class="list-group-item" id="infor">
                    <a href="" id="btnInfor1" class="black-text">S1 Teknik Informatika</a>
                </li>
                <li class="list-group-item" id="infor2">
                    <a href="" id="btnInfor2" class="black-text">S2 Teknologi Informasi</a>
                </li>
                <li class="list-group-item" id="sib">
                    <a href="" id="btnSib" class="black-text">S1 Sistem Informasi Bisnis</a>
                </li>
                <li class="list-group-item" id="elektro">
                    <a href="" id="btnElektro" class="black-text">S1 Teknik Elektro</a>
                </li>
				<li class="list-group-item" id="dkv">
                    <a href="" id="btnDkv" class="black-text">S1 Desain Komunikasi Visual</a>
                </li>
				<li class="list-group-item" id="despro">
                    <a href="" id="btnDespro" class="black-text">S1 Desain Produk</a>
                </li>
				<li class="list-group-item" id="industri">
                    <a href="" id="btnIndustri" class="black-text">S1 Teknik Industri</a>
                </li>
				<li class="list-group-item" id="lain">
                    <a href="" id="btnLain" class="black-text">Lain-lain</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div id="pgD3Infor" class="container my-5">
            <!--Section: Content-->
            <section class="dark-grey-text text-center">
                <!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Dosen D3 Manajemen Informatika</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%D3%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
        </div>

        <div id="pgS1Infor" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">
				<!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Dosen S1 Teknik Informatika</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%S1 Teknik Informatika%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
            <!--Section: Content-->
        </div>
		<div id="pgS2Infor" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">
				<!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Dosen S2 Teknologi Informasi</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%S2 Teknologi Informasi%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
            <!--Section: Content-->
        </div>
        <div id="pgS1Sib" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">
				<!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Dosen S1 Sistem Informasi Bisnis</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%S1 Sistem Informasi Bisnis%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
            <!--Section: Content-->
        </div>
		<div id="pgS1Elektro" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">
				<!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Dosen S1 Teknik Elektro</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%S1 Teknik Elektro%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
            <!--Section: Content-->
        </div>
		<div id="pgS1Dkv" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">
				<!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Dosen S1 Desain Komunikasi Visual</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%S1 Desain Komunikasi Visual%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
            <!--Section: Content-->
        </div>
		<div id="pgS1Despro" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">
				<!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Dosen S1 Desain Produk</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%S1 Desain Produk%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
            <!--Section: Content-->
        </div>
		<div id="pgS1Industri" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">
				<!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Dosen S1 Teknik Industri</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%S1 Teknik Industri%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
            <!--Section: Content-->
        </div>
		<div id="pgLain" class="container my-5">
            <!--Section: Content-->
            <section class="magazine-section dark-grey-text text-center">
				<!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2">Lain-lain</h3>
                <hr class="w-header">
                <!-- Section description -->

                <!--First row-->
                <div class="row">
					<?php
						$query = mysqli_query($conn,"select * from dosen where dosen_status=1 and dosen_keterangan like '%ECC%'");
						$kalimat="";
						while($row=mysqli_fetch_assoc($query)){
							$kalimat.="<div class='col-md-3 mb-4'>
										<a href='#!' class='card hoverable purple-gradient'>
										<div class='card-body my-4'>
										<p><i class='fas fa-camera-retro fa-2x text-muted white-text'></i></p>
										<h6 class='white-text mb-0'>".$row['dosen_nama']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_keterangan']."</h6>
										<h6 class='white-text mb-0'>".$row['dosen_email']."</h6>
										</div>
										</a>
									</div>";
						}
						echo $kalimat;
					?>
				</div>
            </section>
            <!--Section: Content-->
        </div>
    </div>
</div>

<!-- HAPPY CODING!!! KEEP FIGHTING!!! -->

<?php include "tpl/footer.php"; ?>
<script>

$(document).ready(function () {
    $("#pgS1Infor").hide();
    $("#pgS2Infor").hide();
    $("#pgS1Sib").hide();
    $("#pgS1Elektro").hide();
    $("#pgS1Dkv").hide();
    $("#pgS1Despro").hide();
    $("#pgS1Industri").hide();
    $("#pgLain").hide();
    $("#btnD3Infor").click(function (e) {
        e.preventDefault();
        cekColor("#infor", "#btnInfor1");
        cekColor("#infor2", "#btnInfor2");
        cekColor("#sib", "#btnSib");
        cekColor("#elektro", "#btnElektro");
        cekColor("#dkv", "#btnDkv");
        cekColor("#despro", "#btnDespro");
        cekColor("#industri", "#btnIndustri");
        cekColor("#lain", "#btnLain");

        $("#d3infor").addClass("purple");
        $("#btnD3Infor").addClass("white-text");
        showFragment("#pgD3Infor");
    });
    $("#btnInfor1").click(function (e) {
        e.preventDefault();
        cekColor("#d3infor", "#btnD3Infor");
        cekColor("#infor2", "#btnInfor2");
        cekColor("#sib", "#btnSib");
        cekColor("#elektro", "#btnElektro");
        cekColor("#dkv", "#btnDkv");
        cekColor("#despro", "#btnDespro");
        cekColor("#industri", "#btnIndustri");
        cekColor("#lain", "#btnLain");

        $("#infor").addClass("purple");
        $("#btnInfor1").addClass("white-text");
        showFragment("#pgS1Infor");
    });
	$("#btnInfor2").click(function (e) {
        e.preventDefault();
        cekColor("#infor", "#btnInfor1");
        cekColor("#d3infor", "#btnD3Infor");
        cekColor("#sib", "#btnSib");
        cekColor("#elektro", "#btnElektro");
        cekColor("#dkv", "#btnDkv");
        cekColor("#despro", "#btnDespro");
        cekColor("#industri", "#btnIndustri");
        cekColor("#lain", "#btnLain");

        $("#infor2").addClass("purple");
        $("#btnInfor2").addClass("white-text");
        showFragment("#pgS2Infor");
    });
    $("#btnSib").click(function (e) {
        e.preventDefault();
        cekColor("#infor", "#btnInfor1");
        cekColor("#infor2", "#btnInfor2");
        cekColor("#d3infor", "#btnD3Infor");
        cekColor("#elektro", "#btnElektro");
        cekColor("#dkv", "#btnDkv");
        cekColor("#despro", "#btnDespro");
        cekColor("#industri", "#btnIndustri");
        cekColor("#lain", "#btnLain");

        $("#sib").addClass("purple");
        $("#btnSib").addClass("white-text");
        showFragment("#pgS1Sib");
    });
	$("#btnElektro").click(function (e) {
        e.preventDefault();
        cekColor("#infor", "#btnInfor1");
        cekColor("#infor2", "#btnInfor2");
        cekColor("#sib", "#btnSib");
        cekColor("#d3infor", "#btnD3Infor");
        cekColor("#dkv", "#btnDkv");
        cekColor("#despro", "#btnDespro");
        cekColor("#industri", "#btnIndustri");
        cekColor("#lain", "#btnLain");

        $("#elektro").addClass("purple");
        $("#btnElektro").addClass("white-text");
        showFragment("#pgS1Elektro");
    });
	$("#btnDkv").click(function (e) {
        e.preventDefault();
        cekColor("#infor", "#btnInfor1");
        cekColor("#infor2", "#btnInfor2");
        cekColor("#sib", "#btnSib");
        cekColor("#elektro", "#btnElektro");
        cekColor("#d3infor", "#btnD3Infor");
        cekColor("#despro", "#btnDespro");
        cekColor("#industri", "#btnIndustri");
        cekColor("#lain", "#btnLain");

        $("#dkv").addClass("purple");
        $("#btnDkv").addClass("white-text");
        showFragment("#pgS1Dkv");
    });
	$("#btnDespro").click(function (e) {
        e.preventDefault();
        cekColor("#infor", "#btnInfor1");
        cekColor("#infor2", "#btnInfor2");
        cekColor("#sib", "#btnSib");
        cekColor("#elektro", "#btnElektro");
        cekColor("#dkv", "#btnDkv");
        cekColor("#d3infor", "#btnD3Infor");
        cekColor("#industri", "#btnIndustri");
        cekColor("#lain", "#btnLain");

        $("#despro").addClass("purple");
        $("#btnDespro").addClass("white-text");
        showFragment("#pgS1Despro");
    });
	$("#btnIndustri").click(function (e) {
        e.preventDefault();
        cekColor("#infor", "#btnInfor1");
        cekColor("#infor2", "#btnInfor2");
        cekColor("#sib", "#btnSib");
        cekColor("#elektro", "#btnElektro");
        cekColor("#dkv", "#btnDkv");
        cekColor("#despro", "#btnDespro");
        cekColor("#d3infor", "#btnD3Infor");
        cekColor("#lain", "#btnLain");

        $("#industri").addClass("purple");
        $("#btnIndustri").addClass("white-text");
        showFragment("#pgS1Industri");
    });
	$("#btnLain").click(function (e) {
        e.preventDefault();
        cekColor("#infor", "#btnInfor1");
        cekColor("#infor2", "#btnInfor2");
        cekColor("#sib", "#btnSib");
        cekColor("#elektro", "#btnElektro");
        cekColor("#dkv", "#btnDkv");
        cekColor("#despro", "#btnDespro");
        cekColor("#industri", "#btnIndustri");
        cekColor("#d3infor", "#btnD3Infor");

        $("#lain").addClass("purple");
        $("#btnLain").addClass("white-text");
        showFragment("#pgLain");
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
    $("#pgD3Infor").hide();
    $("#pgS1Infor").hide();
    $("#pgS2Infor").hide();
    $("#pgS1Sib").hide();
    $("#pgS1Elektro").hide();
    $("#pgS1Dkv").hide();
    $("#pgS1Despro").hide();
    $("#pgS1Industri").hide();
    $("#pgLain").hide();
    $(id).fadeIn();
}

</script>
</body>
</html>