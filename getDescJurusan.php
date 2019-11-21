<?php 
    require_once("helpers/koneksi.php");
    $idMatkul = $_POST['idMatkul'];
    $query = "SELECT * FROM jurusan_bahasa WHERE jurusan_id = '$idMatkul'";
    $res = mysqli_query($conn, $query)->fetch_assoc();
?>

<h3><?= $res['jurusan_nama']; ?></h3>
<div id="carouselExampleFade" class="carousel slide carousel-fade mb-3" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg"
                alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark secondary-color mb-3">

<div class="container">

  <!-- Collapse button -->
  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

    <!-- Links --> 
    <ul class="navbar-nav">

      <li class="nav-item active nav-tentang">
        <a class="nav-link" id="btnTentang" href="">Tentang</a>
      </li>
      <li class="nav-item nav-detail">
        <a class="nav-link" id="btnDetail" href="">Mata Kuliah</a>
      </li>

    </ul>
    <!-- Links -->

  </div>
  <!-- CTA -->

</div>

</nav>
<!--/.Navbar-->

<?php
    echo "<div id='tentang'>";
    echo $res['jurusan_deskripsi'];
    echo "</div>";

    $queryMatkul = "SELECT * FROM matkul m JOIN matkul_bahasa mb ON mb.matkul_id = m.matkul_id WHERE m.jurusan_id = '$idMatkul' ORDER BY m.matkul_semester";
    $res = mysqli_query($conn, $queryMatkul);
    $data = [];
    while($row = mysqli_fetch_assoc($res)){
        $data[] = $row;
    }
    $matkul = [];

    foreach($data as $row){
        $matkul[$row['matkul_semester']][$row['matkul_id']] = $row;
    }
?>

<div id="detailMatkul">
    <?php foreach($matkul as $key => $semester){ ?>
    <h2>Semester <?= $key ?></h2>
    <table class="table table-striped">
        <tr>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Deskripsi</th>
        </tr>
        <?php foreach($semester as $matkul){ ?>
            <tr>
                <td><?= $matkul['matkul_nama']; ?></td>
                <td><?= $matkul['matkul_sks']; ?></td>
                <td><?= $matkul['matkul_deskripsi']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>
</div>

<script>
    $("#detailMatkul").hide();

    $("#btnTentang").click(function(e){
        e.preventDefault();
        $(".nav-tentang").addClass("active");
        $(".nav-detail").removeClass("active");
        $("#tentang").fadeIn();
        $("#detailMatkul").hide();
    });

    $("#btnDetail").click(function(e){
        e.preventDefault();
        $(".nav-tentang").removeClass("active");
        $(".nav-detail").addClass("active");
        $("#detailMatkul").fadeIn();
        $("#tentang").hide();
    });
</script>