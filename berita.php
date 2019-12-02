<?php
    require_once("helpers/koneksi.php");
    include "tpl/header.php";
    include "tpl/white-navbar.php";

    $query = "SELECT * FROM berita b JOIN berita_bahasa bb ON bb.berita_id = b.berita_id";
    $res = mysqli_query($conn, $query);
    $berita = [];
    while($row = mysqli_fetch_assoc($res)){
        $berita[] = $row;
    }

    $selectAllTags = "SELECT * FROM berita_bahasa bb LEFT JOIN konten_tag kt ON kt.konten_parent = bb.berita_id";
    $result = mysqli_query($conn, $selectAllTags)->fetch_assoc();

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
?>

<!-- Intro -->
<div class="card card-intro purple-gradient">
    <div class="card-body white-text rgba-black-light text-center">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <p class="h2 mb-2">
                    BERITA
                </p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

</div>
<!-- Intro -->

<div class="container mt-5">
    <div class="row">
      <div class="col-md-9">
        <!--Section: Content-->
  <section class="dark-grey-text">

<!-- Section heading -->
<h2 class="text-center font-weight-bold mb-4 pb-2">Berita Terbaru</h2>
<!-- Section description -->
<p class="text-center mx-auto w-responsive mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

<!-- Grid row -->
<div class="row align-items-center">

  <!-- Grid column -->
  <div class="col-lg-5 col-xl-4">

    <!-- Featured image -->
    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Sample image">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-7 col-xl-8">

    <!-- Post title -->
    <h4 class="font-weight-bold mb-3"><strong>Title of the news</strong></h4>
    <!-- Excerpt -->
    <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
      quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
      et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
    <!-- Post data -->
    <p>by <a class="font-weight-bold">Jessica Clark</a>, 19/04/2018</p>
    <!-- Read more button -->
    <a class="btn btn-primary btn-md mx-0 btn-rounded">Read more</a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<hr class="my-5">

</section>
<!--Section: Content-->
      </div>
      <div class="col-md-3">
      </div>
    </div>

</div>

<?php include "tpl/footer.php"; ?>

<script>

</script>
</body>
</html>