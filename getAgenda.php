<?php
    require_once('helpers/koneksi.php');
    $currPage = $_POST['currPage'];
    $offset = ($currPage-1) * 10;
  $idMax=$_POST['idMax'];
  if(isset($_SESSION['bahasa'])){
    $bahasa=2;
  }
  else{
    $bahasa=1;
  }
    $query = mysqli_query($conn,"select * from agenda_bahasa where bahasa_id=$bahasa and agenda_id!='$idMax' order by agenda_id desc");
    $agenda = [];

    while($row = mysqli_fetch_assoc($query)){
        $agenda[] = $row;
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
            <h4 class="font-weight-bold mb-3"><strong><?= $agenda[$i]['agenda_judul']; ?></strong></h4>
            <!-- Excerpt -->
            <p class="dark-grey-text"><?= substr($agenda[$i]['agenda_deskripsi'], 0, 50); ?>...</p>
            <!-- Post data -->
            <p>by <a class="font-weight-bold">Admin</a>, <?php 
				$id=$agenda[$i]['agenda_id'];
				$q2=mysqli_query($conn,"select * from agenda where agenda_id='$id'");
				while($r2=mysqli_fetch_assoc($q2)){
					$tanggal = $r2['agenda_tgl'];
				}
				echo $tanggal;
			?></p>
            <!-- Read more button -->
            <a class="btn btn-primary btn-md mx-0 btn-rounded btn-read-more" id="<?= $agenda[$i]['agenda_id']; ?>">
              <?php
                if(!(isset($_SESSION['bahasa']))){
                  echo "Selengkapnya";
                }
                else{
                  echo "Read More";
                }
              ?>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
        <hr class="my-5">

        <?php } ?>