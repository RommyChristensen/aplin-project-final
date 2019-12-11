<?php
	require_once("helpers/koneksi.php");
	$idMax=$_POST['idMax'];
	$query = mysqli_query($conn,"select * from agenda_bahasa where bahasa_id=1 and agenda_id!='$idMax' order by agenda_id desc");
	
	$kalimat="";
	while($row=mysqli_fetch_assoc($query)){
		$id=$row['agenda_id'];
		$q2=mysqli_query($conn,"select * from agenda where agenda_id='$id'");
		while($r2=mysqli_fetch_assoc($q2)){
			$tanggal=$r2['agenda_tgl'];
		}
		$judul=$row['agenda_judul'];
		$desk=substr($row['agenda_deskripsi'],0,40);
		$kalimat.="<!-- Small news -->
					<div class='single-news mb-4'>
						<!-- Grid row -->
						<div class='row'>
							<!-- Grid column -->
							<div class='col-md-3'>
								<!--Image-->
								<div class='view overlay rounded z-depth-1 mb-4'>
									<img class='img-fluid' src='https://mdbootstrap.com/img/Photos/Others/img%20(29).jpg' alt='Sample image'>
									<a>
										<div class='mask rgba-white-slight'></div>
									</a>
								</div>
							</div>
							<!-- Grid column -->
							<!-- Grid column -->
							<div class='col-md-9'>
								<!-- Excerpt -->
								<p class='font-weight-bold dark-grey-text'>".$judul."</p>
								<p class='font-weight-bold dark-grey-text'>".$tanggal."</p>
								<div class='d-flex justify-content-between'>
									<div class='col-11 text-truncate pl-0 mb-3'>
										<a href='#!' class='dark-grey-text'>".$desk."</a>
									</div>
									<a href='agendadetail.php?agendaid=".$id."'><i class='fas fa-angle-double-right'></i></a>
								</div>
							</div>
							<!-- Grid column -->
						</div>
						<!-- Grid row -->
					</div>
					<!-- Small news -->";
	}
	echo $kalimat;
?>