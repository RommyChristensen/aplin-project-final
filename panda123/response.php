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
		$kalimat="<thead><tr><th class='th-sm'>Bahasa</th><th class='th-sm'>Judul</th>
					<th class='th-sm'>Deskripsi</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$bahasa = $row['bahasa_id'];
				$q1=mysqli_query($conn,"select * from bahasa where bahasa_id='$bahasa'");
				while($r1=mysqli_fetch_assoc($q1)){$bahasa=$r1['bahasa_nama'];}
				$kalimat.="<td>".$bahasa."</td>";
				$kalimat.="<td>".$row['agenda_judul']."</td>";
				$kalimat.="<td>".$row['agenda_deskripsi']."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['agenda_bahasa_id']."-".$row['agenda_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='delete(".$row['agenda_bahasa_id']."-".$row['agenda_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
?>