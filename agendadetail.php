<?php
	if(isset($_GET['agendaid'])){
		$idAgenda=$_GET['agendaid'];
	}
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
                    AGENDA
                </p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>

</div>
<!-- Intro -->

<div class="container my-5">

  <!--Section: Content-->
  <section class="magazine-section dark-grey-text">

  	<!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-12 col-md-12 mb-4">

        <!-- Featured news -->
        <div class="single-news">

        <!-- Image -->
        <div style='margin:auto;' style='width:100%;'>
			<img class="img-fluid mx-auto" src="assets/iSTTS.jpg" style='width:35%;height:50%;background-position:center;' alt="Sample image">
		</div>
		<!-- Data -->
          <div class="news-data d-flex justify-content-between">
            <a href="#!" class="deep-orange-text">
              <h6 class="font-weight-bold">
				<?php
					$query = mysqli_query($conn,"select * from agenda_bahasa where bahasa_id=1 and agenda_id='$idAgenda'");
					
					$q1 = mysqli_query($conn,"select * from konten where konten_nama='agenda'");
					$kalimat="";
					while($r1=mysqli_fetch_assoc($q1)){
						$konten_id=$r1['konten_id'];
						$q2=mysqli_query($conn,"select * from konten_tag where konten_id=$konten_id and konten_parent='$idAgenda'");
						while($r2=mysqli_fetch_assoc($q2)){
							$tag_id=$r2['tag_id'];
							$q3=mysqli_query($conn,"select * from tag_bahasa where tag_id='$tag_id'");
							while($r3=mysqli_fetch_assoc($q3)){
								$kalimat.="#";
								$kalimat.=$r3['tag_nama'];
								$kalimat.=" ";
							}
						}
					}
					echo $kalimat;
				?>
			  </h6>
            </a>
            <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>
			<?php 
				$query = mysqli_query($conn,"select * from agenda_bahasa where bahasa_id=1 and agenda_id='$idAgenda'");
				while($row=mysqli_fetch_assoc($query)){
					$q2=mysqli_query($conn,"select * from agenda where agenda_id='$idAgenda'");
					while($r2=mysqli_fetch_assoc($q2)){
						$tanggal= $r2['agenda_tgl'];
					}
					$judul=$row['agenda_judul'];
					$desk=$row['agenda_deskripsi'];
				}
				echo $tanggal;
			?></p>
          </div>

          <!-- Excerpt -->
          <h3 class="font-weight-bold dark-grey-text mb-3"><a>
			<?php echo $judul;?>
		  </a></h3>
          <p class="dark-grey-text">
			<?php echo $desk;?>
		  </p>

        </div>
        <!-- Featured news -->

      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>

<?php 
    include "tpl/footer.php";
?>

</body>
</html>