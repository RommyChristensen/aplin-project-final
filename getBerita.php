<?php
    require_once('helpers/koneksi.php');
    $currPage = $_POST['currPage'];
    $offset = ($currPage-1) * 10;
    $query = "SELECT * FROM berita b JOIN berita_bahasa bb ON bb.berita_id = b.berita_id";
    $res = mysqli_query($conn, $query);
    $berita = [];

    while($row = mysqli_fetch_assoc($res)){
        $berita[] = $row;
    }
?>

<?php for($i = $offset; $i < $offset+10; $i++) { ?>

        <!-- Grid row -->
        <div class="row align-items-center mb-5">

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
            <h4 class="font-weight-bold mb-3"><strong><?= $berita[$i]['berita_judul']; ?></strong></h4>
            <!-- Excerpt -->
            <p class="dark-grey-text"><?= substr($berita[$i]['berita_deskripsi'], 0, 50); ?>...</p>
            <!-- Post data -->
            <p>by <a class="font-weight-bold">Admin</a>, <?= $berita[$i]['berita_tanggal'] ?></p>
            <!-- Read more button -->
            <a class="btn btn-primary btn-md mx-0 btn-rounded btn-read-more" id="<?= $berita[$i]['berita_id']; ?>">Read more</a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
        <hr class="my-5">

        <?php } ?>