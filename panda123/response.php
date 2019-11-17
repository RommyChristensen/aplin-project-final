<?php
	session_start();
	require_once("../helpers/koneksi.php");
	if($_POST['jenis']=="login"){
		$_SESSION['adminLogin']="admin";
		echo "Sukses";
	}
	if($_POST['jenis']=="isicbBahasa"){
		$query = mysqli_query($conn,"select * from bahasa");
		$kalimat="";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<option value='".$row['bahasa_id']."'>".$row['bahasa_nama']."</option>";
		}
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelAgenda"){
		$query = mysqli_query($conn,"select * from agenda_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Judul</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Foto</th><th class='th-sm'>Lokasi</th><th class='th-sm'>Deskripsi</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$bahasa = $row['bahasa_id'];
				$q1=mysqli_query($conn,"select * from bahasa where bahasa_id='$bahasa'");
				while($r1=mysqli_fetch_assoc($q1)){$bahasa=$r1['bahasa_nama'];}
				$kalimat.="<td>".$row['agenda_judul']."</td>";
				$kalimat.="<td>".$bahasa."</td>";
				$agendaId=$row['agenda_id'];
				$q2=mysqli_query($conn,"select * from agenda where agenda_id='$agendaId'");
				while($r2=mysqli_fetch_assoc($q2)){
					$kalimat.="<td>".$r2['agenda_foto']."</td>";
					$kalimat.="<td>".$r2['agenda_lokasi']."</td>";
					$aktif=$r2['agenda_status'];
				}
				$kalimat.="<td>".$row['agenda_deskripsi']."</td>";
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['agenda_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['agenda_bahasa_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelBerita"){
		$query = mysqli_query($conn,"select * from berita_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Judul</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Foto</th><th class='th-sm'>Deskripsi</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$bahasa = $row['bahasa_id'];
				$q1=mysqli_query($conn,"select * from bahasa where bahasa_id='$bahasa'");
				while($r1=mysqli_fetch_assoc($q1)){$bahasa=$r1['bahasa_nama'];}
				$kalimat.="<td>".$row['berita_judul']."</td>";
				$kalimat.="<td>".$bahasa."</td>";
				$beritaId=$row['berita_id'];
				$q2=mysqli_query($conn,"select * from berita where berita_id='$beritaId'");
				while($r2=mysqli_fetch_assoc($q2)){
					$kalimat.="<td>".$r2['berita_foto']."</td>";
					$aktif=$r2['berita_status'];
				}
				$kalimat.="<td>".$row['berita_deskripsi']."</td>";
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['berita_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['berita_bahasa_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelDosen"){
		$query = mysqli_query($conn,"select * from dosen");
		$kalimat="<thead><tr><th class='th-sm'>Nama Dosen</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$kalimat.="<td>".$row['dosen_nama']."</td>";
				$kalimat.="<td>".$row['dosen_status']."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['dosen_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['dosen_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelJurusan"){
		$query = mysqli_query($conn,"select * from jurusan_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Nama Jurusan</th><th class='th-sm'>Deskripsi Jurusan</th><th class='th-sm'>Website Jurusan</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$kalimat.="<td>".$row['jurusan_nama']."</td>";
				$kalimat.="<td>".$row['jurusan_deskripsi']."</td>";
				$id=$row['jurusan_id'];
				$q1=mysqli_query($conn,"select * from jurusan where jurusan_id='$id'");
				while($r1=mysqli_fetch_assoc($q1)){
					$website=$r1['jurusan_website'];
					$aktif=$r1['jurusan_status'];
				}
				$kalimat.="<td>".$website."</td>";
				$kalimat.="<td>".$aktif."</td>";
				$bahasa=$row['bahasa_id'];
				$q2=mysqli_query($conn,"select * from bahasa where bahasa_id=$bahasa");
				while($r2=mysqli_fetch_assoc($q2)){
					$bahasa=$r2['bahasa_nama'];
				}
				$kalimat.="<td>".$bahasa."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['jurusan_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['jurusan_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="AddAgenda"){
		$bahasa		=$_POST['bahasa'];
		$judul 		=$_POST['judul'];
		$deskripsi	=$_POST['deskripsi'];
		$foto		=$_POST['file'];
		$lokasi		=$_POST['lokasi'];
		$aktif		=$_POST['aktif'];
		if(isset($_SESSION['editAgenda'])){
			$nomer = $_SESSION['editAgenda'];
			mysqli_query($conn,"update agenda set agenda_foto='$foto',agenda_lokasi='$lokasi',agenda_status='$aktif' where agenda_id='$nomer'");
			mysqli_query($conn,"update agenda_bahasa set bahasa_id='$bahasa',agenda_judul='$judul',agenda_deskripsi='$deskripsi' where agenda_bahasa_id='$nomer'");
			unset($_SESSION['editAgenda']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into agenda(agenda_foto,agenda_tgl,agenda_status,agenda_lokasi) values ('$foto',now(),'$aktif','$lokasi')");
			$q3=mysqli_query($conn,"select * from agenda where agenda_id=(select max(agenda_id) from agenda)");
			while($r3=mysqli_fetch_assoc($q3)){
				$agenda_id=$r3['agenda_id'];
			}
			//echo $agenda_id;
			$q2=mysqli_query($conn,"insert into agenda_bahasa(agenda_id,bahasa_id,agenda_judul,agenda_deskripsi) values('$agenda_id','$bahasa','$judul','$deskripsi')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddBerita"){
		$bahasa		=$_POST['bahasa'];
		$judul 		=$_POST['judul'];
		$deskripsi	=$_POST['deskripsi'];
		$foto		=$_POST['file'];
		$aktif		=$_POST['aktif'];
		if(isset($_SESSION['editBerita'])){
			$nomer = $_SESSION['editBerita'];
			mysqli_query($conn,"update berita set berita_foto='$foto',berita_status='$aktif' where berita_id='$nomer'");
			mysqli_query($conn,"update berita_bahasa set bahasa_id='$bahasa',berita_judul='$judul',berita_deskripsi='$deskripsi' where berita_bahasa_id='$nomer'");
			unset($_SESSION['editBerita']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into berita(berita_foto,berita_tanggal,berita_status) values ('$foto',now(),'$aktif')");
			$q3=mysqli_query($conn,"select * from berita where berita_id=(select max(berita_id) from berita)");
			while($r3=mysqli_fetch_assoc($q3)){
				$berita_id=$r3['berita_id'];
			}
			$q2=mysqli_query($conn,"insert into berita_bahasa(berita_id,bahasa_id,berita_judul,berita_deskripsi) values('$berita_id','$bahasa','$judul','$deskripsi')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddDosen"){
		$nama		=$_POST['nama'];
		$aktif 		=$_POST['aktif'];
		if(isset($_SESSION['editDosen'])){
			$nomer = $_SESSION['editDosen'];
			mysqli_query($conn,"update dosen set dosen_nama='$nama',dosen_status='$aktif' where dosen_id='$nomer'");
			unset($_SESSION['editDosen']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into dosen(dosen_nama,dosen_status) values('$nama','$aktif')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddJurusan"){
		$bahasa		=$_POST['bahasa'];
		$id 		=$_POST['id'];
		$nama 		=$_POST['nama'];
		$aktif 		=$_POST['aktif'];
		$deskripsi	=$_POST['deskripsi'];
		$website	=$_POST['website'];
		if(isset($_SESSION['editJurusan'])){
			$nomer = $_SESSION['editJurusan'];
			mysqli_query($conn,"update jurusan set jurusan_website='$website',jurusan_status='$aktif' where jurusan_id='$nomer'");
			mysqli_query($conn,"update jurusan_bahasa set bahasa_id='$bahasa',jurusan_nama='$nama',jurusan_deskripsi='$deskripsi' where jurusan_id='$nomer'");
			unset($_SESSION['editJurusan']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into jurusan(jurusan_id,jurusan_website,jurusan_status)values('$id','$website','$aktif')");
			$q2=mysqli_query($conn,"insert into jurusan_bahasa(jurusan_id,jurusan_nama,jurusan_deskripsi,bahasa_id) values('$id','$nama','$deskripsi','$bahasa')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="DeleteAgenda"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from agenda_bahasa where agenda_bahasa_id='$nomer'");
		mysqli_query($conn,"delete from agenda where agenda_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteBerita"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from berita_bahasa where berita_bahasa_id='$nomer'");
		mysqli_query($conn,"delete from berita where berita_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteDosen"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from dosen where dosen_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteJurusan"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from jurusan_bahasa where jurusan_id='$nomer'");
		mysqli_query($conn,"delete from jurusan where jurusan_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="EditAgenda"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from agenda where agenda_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['aktif']=$r1['agenda_status'];
			$arr['foto']=$r1['agenda_foto'];
			$arr['lokasi']=$r1['agenda_lokasi'];
		}
		$q2 = mysqli_query($conn,"select * from agenda_bahasa where agenda_bahasa_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['bahasa']=$r2['bahasa_id'];
			$arr['judul']=$r2['agenda_judul'];
			$arr['deskripsi']=$r2['agenda_deskripsi'];
		}
		$_SESSION['editAgenda']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditBerita"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from berita where berita_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['foto']=$r1['berita_foto'];
			$arr['aktif']=$r1['berita_status'];
		}
		$q2 = mysqli_query($conn,"select * from berita_bahasa where berita_bahasa_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['bahasa']=$r2['bahasa_id'];
			$arr['judul']=$r2['berita_judul'];
			$arr['deskripsi']=$r2['berita_deskripsi'];
		}
		$_SESSION['editBerita']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditDosen"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from dosen where dosen_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['nama']=$r1['dosen_nama'];
			$arr['aktif']=$r1['dosen_status'];
		}
		$_SESSION['editDosen']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditJurusan"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from jurusan_bahasa where jurusan_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['nama']=$r1['jurusan_nama'];
			$arr['deskripsi']=$r1['jurusan_deskripsi'];
			$arr['bahasa']=$r1['bahasa_id'];
		}
		$q2 = mysqli_query($conn,"select * from jurusan where jurusan_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['website']=$r2['jurusan_website'];
			$arr['aktif']=$r2['jurusan_status'];
		}
		$_SESSION['editJurusan']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="cekJurusanAda"){
		$id=$_POST['id'];
		$query=mysqli_query($conn,"select * from jurusan_bahasa where jurusan_id='$id'");
		if(mysqli_num_rows($query)==0){
			echo "0";
		}
		else{
			echo "1";
		}
	}
?>