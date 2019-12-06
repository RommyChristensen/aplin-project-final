<?php require_once("helpers/koneksi.php");?>
<?php include "tpl/header.php";?>
<?php include "tpl/white-navbar.php";?>
<!-- Intro -->
<div class="card card-intro purple-gradient">
    <div class="card-body white-text rgba-black-light text-center">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <p class="h2 mb-2">
                    TESTIMONI
                </p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

</div>
<!-- Intro -->


<!-- HAI MOON!!, YOUR CODE GOES DOWN HERE -->

<div class="row" style='margin:5%;'>
    <?php
		$query = mysqli_query($conn,"select * from testimoni_bahasa where bahasa_id=1");
		$kalimat="";
		while($row=mysqli_fetch_assoc($query)){
			$id=$row['testimoni_id'];
			$q2=mysqli_query($conn,"select * from testimoni where testimoni_id='$id'");
			while($r2=mysqli_fetch_assoc($q2)){
				$nama=$r2['testimoni_nama'];
			}
			$profil=$row['testimoni_profil'];
			$text = $row['testimoni_text'];
			$kalimat.="<div class='col-md-4 mb-5'><div class='card'><!-- Card image -->
						<div class='view overlay'>
						<img class='card-img-top' src='https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg' alt='Card image cap'>
						<a href='#!'>
						<div class='mask rgba-white-slight'></div>
						</a>
						</div>	
						<!-- Card content -->
						<div class='card-body'>
							<!-- Title -->
							<h3 class='card-title'><b>".$nama."<b></h3>
							<h6><i>$profil</i></h6>
							<!-- Text -->
							<p class='card-text'>
							<h6>".$text."</h6>
							</p>
						</div>
						</div>
						</div>";
		}
		echo $kalimat;
	?>
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