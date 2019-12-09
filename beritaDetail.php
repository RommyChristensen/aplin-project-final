<?php
    require_once("helpers/koneksi.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM berita_bahasa bb LEFT JOIN berita b ON b.berita_id = bb.berita_id WHERE bb.berita_id = $id";
    $result = mysqli_query($conn, $query)->fetch_assoc();

    include "tpl/header.php";
    include "tpl/white-navbar.php";

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
?>

<div class="container mt-5">


  <!--Section: Content-->
  <section class="mx-md-5 dark-grey-text">

  	<!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12">

        <!-- Card -->
        <div class="card card-cascade wider reverse">

          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(142).jpg" alt="Sample image">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body card-body-cascade text-center">

            <!-- Title -->
            <h3 class="font-weight-bold"><a><?= $result['berita_judul']; ?></a></h3>
            <!-- Data -->
            <p>Written by <a><strong>Admin</strong></a>, <?= $result['berita_tanggal']; ?></p>

          </div>
          <!-- Card content -->

        </div>
        <!-- Card -->

        <!-- Excerpt -->
        <div class="mt-5">
            <p><?= $result['berita_deskripsi']; ?></p>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="mb-5 mt-4">

  </section>
  <!--Section: Content-->


</div>

<?php include "tpl/footer.php"; ?>
</body>
</html>