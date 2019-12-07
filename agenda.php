<?php
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

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-4 pb-2">Event Yang Akan Datang</h3>
    <!-- Section description -->
    <!--<p class="w-responsive mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla sint occaecat cupidatat non proident, sunt culpa
    qui officia deserunt est laborum.</p>-->

  	<!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-6 col-md-12 mb-4">

        <!-- Featured news -->
        <div class="single-news">

          <!-- Image -->
          <div class="view overlay rounded z-depth-1-half mb-4">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/1.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Data -->
          <div class="news-data d-flex justify-content-between">
            <a href="#!" class="deep-orange-text">
              <h6 class="font-weight-bold">
				<?php
					$query = mysqli_query($conn,"select * from agenda_bahasa where bahasa_id=1 order by agenda_id desc limit 1");
					while($row=mysqli_fetch_assoc($query)){
						$idMax=$row['agenda_id'];
					}
					$q1 = mysqli_query($conn,"select * from konten where konten_nama='agenda'");
					$kalimat="";
					while($r1=mysqli_fetch_assoc($q1)){
						$konten_id=$r1['konten_id'];
						$q2=mysqli_query($conn,"select * from konten_tag where konten_id=$konten_id and konten_parent='$idMax'");
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
			<input type='hidden' id='tbHidden' value="<?php echo $idMax;?>">
            <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>
			<?php 
				$query = mysqli_query($conn,"select * from agenda_bahasa where bahasa_id=1 order by agenda_id desc limit 1");
				while($row=mysqli_fetch_assoc($query)){
					$idMax=$row['agenda_id'];
					
					$q2=mysqli_query($conn,"select * from agenda where agenda_id='$idMax'");
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
          <h3 class="font-weight-bold dark-grey-text mb-3">
			<?php 
				$query = mysqli_query($conn,"select * from agenda_bahasa where bahasa_id=1 order by agenda_id desc limit 1");
				while($row=mysqli_fetch_assoc($query)){
					$idAgenda=$row['agenda_id'];
				}
				echo "<a href='agendadetail.php?agendaid=".$idAgenda."'>";
				echo $judul;
			?>
		  </a></h3>
          <p class="dark-grey-text">
			<?php echo $desk;?>
		  </p>

        </div>
        <!-- Featured news -->

      </div>
      <!-- Grid column -->
	  

      <!-- Grid column -->
      <div class="col-lg-6 col-md-12 mb-4">
			<div id="page">
    <ul class="pagination">

    </ul>
  </div>
 <div id="konten-agenda"></div> 
 

      </div>
      <!--Grid column-->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>

<?php 
    include "tpl/footer.php";
?>
<script>

var idMax= $("#tbHidden").val();
let paginate = page => {
  $(function() {
    $.ajax({
      method: 'post',
      url: 'getAgendaInfo.php',
      success: function(result){
        let dataSize = result;
        let dataLimit = (dataSize / 10) + 1;

        $('#page').Pagination({
          size: dataSize,
          pageShow: 5,
          page: page,
          limit: dataLimit,
        }, function(obj){
          let currPage = obj.page;
          $.ajax({
            method: 'post',
            url: 'getAgenda.php',
            data: {currPage: currPage,idMax:idMax},
            success: function(result){
              $("#konten-agenda").html(result);
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
    window.location = './agendadetail.php?agendaid=' + id;
  });
});
</script>
</body>
</html>