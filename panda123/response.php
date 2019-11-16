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
		$kalimat="<thead><tr><th class='th-sm'>Judul</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Foto</th><th class='th-sm'>Lokasi</th><th class='th-sm'>Deskripsi</th><th class='th-sm'>Action</th></tr></thead><tbody>";
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
				}
				$kalimat.="<td>".$row['agenda_deskripsi']."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['agenda_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['agenda_bahasa_id'].")'>Delete</button></td>";
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
		if(isset($_SESSION['editAgenda'])){
			$nomer = $_SESSION['editAgenda'];
			mysqli_query($conn,"update agenda set agenda_foto='$foto',agenda_lokasi='$lokasi' where agenda_id='$nomer'");
			mysqli_query($conn,"update agenda_bahasa set bahasa_id='$bahasa',agenda_judul='$judul',agenda_deskripsi='$deskripsi' where agenda_bahasa_id='$nomer'");
			unset($_SESSION['editAgenda']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into agenda(agenda_foto,agenda_tgl,agenda_status,agenda_lokasi) values ('$foto',now(),'1','$lokasi')");
			$q3=mysqli_query($conn,"select * from agenda where agenda_id=(select max(agenda_id) from agenda)");
			while($r3=mysqli_fetch_assoc($q3)){
				$agenda_id=$r3['agenda_id'];
			}
			//echo $agenda_id;
			$q2=mysqli_query($conn,"insert into agenda_bahasa(agenda_id,bahasa_id,agenda_judul,agenda_deskripsi) values('$agenda_id','$bahasa','$judul','$deskripsi')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="DeleteAgenda"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from agenda_bahasa where agenda_bahasa_id='$nomer'");
		mysqli_query($conn,"delete from agenda where agenda_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="EditAgenda"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from agenda where agenda_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
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
?>