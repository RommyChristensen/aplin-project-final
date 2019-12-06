<?php
    require_once("helpers/koneksi.php");
    include "tpl/header.php";
    include "tpl/white-navbar.php";

    $query = "SELECT * FROM berita b JOIN berita_bahasa bb ON bb.berita_id = b.berita_id LIMIT 10";
    $res = mysqli_query($conn, $query);
    $berita = [];
    while($row = mysqli_fetch_assoc($res)){
        $berita[] = $row;
    }

    $selectAllTags = "SELECT * FROM berita_bahasa bb 
                      LEFT JOIN konten_tag kt ON kt.konten_parent = bb.berita_id
                      LEFT JOIN berita b ON b.berita_id = bb.berita_id";
    $result = mysqli_query($conn, $selectAllTags)->fetch_assoc();

    // echo "<pre>";
    // print_r($berita);
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

<div class="container-fluid mt-5">
  <div class="row mx-5">
  <div id="page">
    <ul class="pagination">

    </ul>
  </div>
  <div id="info"></div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <!--Section: Content-->
      <section class="dark-grey-text z-depth-1 py-5 px-5 mb-5">

        <!-- Section heading -->
        <h2 class="text-center font-weight-bold mb-4 pb-2">Berita Terbaru</h2>
        <!-- Section description -->
        <p class="text-center mx-auto w-responsive mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
          porro a pariatur veniam.</p>

        <div id="konten-berita"></div>

      </section>
      <!--Section: Content-->
      
    </div>
    <div class="col-md-4">
    <section class="dark-grey-text z-depth-1 py-5 px-5 mb-5">
      
      <!-- Section heading -->
      <h2 class="text-center font-weight-bold mb-4 pb-2">Media</h2>
      <!-- Section description -->
      
    </section>      
    </div>
  </div>

</div>

<?php include "tpl/footer.php"; ?>

<script>

let paginate = page => {
  $(function() {
    $.ajax({
      method: 'post',
      url: 'getBeritaInfo.php',
      success: function(result){
        let dataSize = result;
        let dataLimit = (dataSize / 10) + 1;

        $('#page').Pagination({
          size: dataSize,
          pageShow: 5,
          page: page,
          limit: 10,
        }, function(obj){
          let currPage = obj.page;

          $.ajax({
            method: 'post',
            url: 'getBerita.php',
            data: {currPage: currPage},
            success: function(result){
              $("#konten-berita").html(result);
            }
          });
        });
      }
    });
  });
}

$(document).ready(function(){
  paginate(1);

  $(document).on("click", ".btn-read-more", function(){
    let id = $(this).attr("id");
    window.location = './beritaDetail.php?id=' + id;
  });
});
</script>
</body>
</html>