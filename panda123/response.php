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
	if($_POST['jenis']=="isicbTag"){
		$query=mysqli_query($conn,"select * from tag_bahasa");
		$kalimat="";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<option value='".$row['tag_id']."'>".$row['tag_nama']."<option>";
		}
		echo $kalimat;
	}
	if($_POST['jenis']=="isicbJurusan"){
		$query = mysqli_query($conn,"select * from jurusan_bahasa");
		$kalimat="";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<option value='".$row['jurusan_id']."'>".$row['jurusan_nama']."</option>";
		}
		echo $kalimat;
	}
	if($_POST['jenis']=="isicbParentKontenTag"){
		$jenisKonten=$_POST['jenisKonten'];
		if($jenisKonten==0){
			$query=mysqli_query($conn,"select * from agenda_bahasa");
			$kalimat="";
			while($row=mysqli_fetch_assoc($query)){
				$kalimat.="<option value='".$row['agenda_bahasa_id']."'>".$row['agenda_judul']."</option>";
			}
			echo $kalimat;
		}
		else if($jenisKonten==1){
			$query=mysqli_query($conn,"select * from berita_bahasa");
			$kalimat="";
			while($row=mysqli_fetch_assoc($query)){
				$kalimat.="<option value='".$row['berita_bahasa_id']."'>".$row['berita_judul']."</option>";
			}
			echo $kalimat;
		}
		else if($jenisKonten==2){
			$query=mysqli_query($conn,"select * from media_bahasa");
			$kalimat="";
			while($row=mysqli_fetch_assoc($query)){
				$kalimat.="<option value='".$row['media_bahasa_id']."'>".$row['media_judul']."</option>";
			}
			echo $kalimat;
		}
	}
	if($_POST['jenis']=="isicbKategori"){
		$query=mysqli_query($conn,"select * from kategori_bahasa");
		$kalimat="";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<option value='".$row['kategori_bahasa_id']."'>".$row['kategori_nama']." - ".$row['kategori_nama_pendek']."<option>";
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
				$kalimat.="<td><button class='btn btn-warning btn-block my-4' type='button' onclick='edit(".$row['agenda_bahasa_id'].")'><i class='fa fa-edit'></i></button>";
				$kalimat.="<button class='btn btn-danger btn-block my-4' type='button' onclick='deletes(".$row['agenda_bahasa_id'].")'><i class='fa fa-trash'></i></button></td>";
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
	if($_POST['jenis']=="isitabelKategori"){
		$query = mysqli_query($conn,"select * from kategori_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Nama Kategori</th><th class='th-sm'>Nama Pendek Kategori</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$kalimat.="<td>".$row['kategori_nama']."</td>";
				$kalimat.="<td>".$row['kategori_nama_pendek']."</td>";
				$bahasa=$row['bahasa_id'];
				$q2=mysqli_query($conn,"select * from bahasa where bahasa_id=$bahasa");
				while($r2=mysqli_fetch_assoc($q2)){
					$bahasa=$r2['bahasa_nama'];
				}
				$kalimat.="<td>".$bahasa."</td>";
				$id=$row['kategori_id'];
				$q1=mysqli_query($conn,"select * from kategori where kategori_id='$id'");
				while($r1=mysqli_fetch_assoc($q1)){
					$aktif=$r1['kategori_status'];
				}
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['kategori_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['kategori_bahasa_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelMatkul"){
		$query = mysqli_query($conn,"select * from matkul_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Nama Matkul</th><th class='th-sm'>Deskripsi</th><th class='th-sm'>SKS</th><th class='th-sm'>Jurusan</th><th class='th-sm'>Semester</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$kalimat.="<td>".$row['matkul_nama']."</td>";
				$kalimat.="<td>".$row['matkul_deskripsi']."</td>";
				$id=$row['matkul_id'];
				$q1=mysqli_query($conn,"select * from matkul where matkul_id='$id'");
				while($r1=mysqli_fetch_assoc($q1)){
					$sks=$r1['matkul_sks'];
					$semester=$r1['matkul_semester'];
					$jurusan=$r1['jurusan_id'];
					$aktif=$r1['matkul_status'];
				}
				$bahasa=$row['bahasa_id'];
				$q2=mysqli_query($conn,"select * from bahasa where bahasa_id=$bahasa");
				while($r2=mysqli_fetch_assoc($q2)){
					$bahasa=$r2['bahasa_nama'];
				}
				$kalimat.="<td>".$sks."</td>";
				$q3=mysqli_query($conn,"select * from jurusan_bahasa where jurusan_id='$jurusan'");
				while($r3=mysqli_fetch_assoc($q3)){
					$jurusan=$r3['jurusan_nama'];
				}
				$kalimat.="<td>".$jurusan."</td>";
				$kalimat.="<td>".$semester."</td>";
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td>".$bahasa."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['matkul_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['matkul_bahasa_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelTag"){
		$query = mysqli_query($conn,"select * from tag_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Nama Tag</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$kalimat.="<td>".$row['tag_nama']."</td>";$bahasa=$row['bahasa_id'];
				$q2=mysqli_query($conn,"select * from bahasa where bahasa_id=$bahasa");
				while($r2=mysqli_fetch_assoc($q2)){
					$bahasa=$r2['bahasa_nama'];
				}
				$kalimat.="<td>".$bahasa."</td>";
				$id=$row['tag_id'];
				$q1=mysqli_query($conn,"select * from tag where tag_id='$id'");
				while($r1=mysqli_fetch_assoc($q1)){
					$aktif=$r1['tag_status'];
				}
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['tag_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['tag_bahasa_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelMedia"){
		$query = mysqli_query($conn,"select * from media_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Judul Media</th><th class='th-sm'>Deskripsi Media</th><th class='th-sm'>Foto</th><th class='th-sm'>Sumber Tajuk Media</th><th class='th-sm'>Halaman Sumber Media</th><th class='th-sm'>Tanggal Sumber Media</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$kalimat.="<td>".$row['media_judul']."</td>";
				$kalimat.="<td>".$row['media_deskripsi']."</td>";
				$bahasa=$row['bahasa_id'];
				$q2=mysqli_query($conn,"select * from bahasa where bahasa_id=$bahasa");
				while($r2=mysqli_fetch_assoc($q2)){
					$bahasa=$r2['bahasa_nama'];
				}
				$id=$row['media_id'];
				$q1=mysqli_query($conn,"select * from media where media_id='$id'");
				while($r1=mysqli_fetch_assoc($q1)){
					$kalimat.="<td>".$r1['media_foto']."</td>";
					$kalimat.="<td>".$r1['media_sumber_tajuk']."</td>";
					$kalimat.="<td>".$r1['media_sumber_hal']."</td>";
					$kalimat.="<td>".$r1['media_sumber_tgl']."</td>";
					$aktif=$r1['media_status'];
				}
				$kalimat.="<td>".$bahasa."</td>";
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['media_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['media_bahasa_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelTestimoni"){
		$query = mysqli_query($conn,"select * from testimoni_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Nama</th><th class='th-sm'>Profil</th><th class='th-sm'>Testimoni</th><th class='th-sm'>Foto</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$id=$row['testimoni_id'];
				$q1=mysqli_query($conn,"select * from testimoni where testimoni_id='$id'");
				while($r1=mysqli_fetch_assoc($q1)){
					$kalimat.="<td>".$r1['testimoni_nama']."</td>";
					$foto=$r1['testimoni_foto'];
					$aktif=$r1['testimoni_status'];
				}
				$kalimat.="<td>".$row['testimoni_profil']."</td>";
				$kalimat.="<td>".$row['testimoni_text']."</td>";
				$kalimat.="<td>".$foto."</td>";
				$bahasa=$row['bahasa_id'];
				$q2=mysqli_query($conn,"select * from bahasa where bahasa_id=$bahasa");
				while($r2=mysqli_fetch_assoc($q2)){
					$bahasa=$r2['bahasa_nama'];
				}
				$kalimat.="<td>".$bahasa."</td>";
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['testimoni_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['testimoni_bahasa_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelKontenTag"){
		$query = mysqli_query($conn,"select * from konten");
		$kalimat="<thead><tr><th class='th-sm'>Parent</th><th class='th-sm'>Jenis</th><th class='th-sm'>Tag</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$aktif=$row['konten_status'];
				$jenis=$row['konten_nama'];
				$id=$row['konten_id'];
				$q1=mysqli_query($conn,"select * from konten_tag where konten_id='$id'");
				while($r1=mysqli_fetch_assoc($q1)){
					$parentId=$r1['konten_parent'];
					$tag_id=$r1['tag_id'];
				}
				if($jenis=='agenda'){
					$q2=mysqli_query($conn,"select * from agenda_bahasa where agenda_bahasa_id='$parentId'");
					while($r2=mysqli_fetch_assoc($q2)){
						$judul=$r2['agenda_judul'];
					}
				}
				else if($jenis=='berita'){
					$q2=mysqli_query($conn,"select * from berita_bahasa where berita_bahasa_id='$parentId'");
					while($r2=mysqli_fetch_assoc($q2)){
						$judul=$r2['berita_judul'];
					}
				}
				else{
					$q2=mysqli_query($conn,"select * from media_bahasa where media_bahasa_id='$parentId'");
					while($r2=mysqli_fetch_assoc($q2)){
						$judul=$r2['media_judul'];
					}
				}
				$kalimat.="<td>".$judul."</td>";
				$kalimat.="<td>".$jenis."</td>";
				$q3=mysqli_query($conn,"select * from tag_bahasa where tag_bahasa_id='$tag_id'");
				while($r3=mysqli_fetch_assoc($q3)){
					$tags = $r3['tag_nama'];
				}
				$kalimat.="<td>".$tags."</td>";
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['konten_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['konten_id'].")'>Delete</button></td>";
			$kalimat.="</tr>";
		}
		$kalimat.="</tbody></table>";
		echo $kalimat;
	}
	if($_POST['jenis']=="isitabelOrg"){
		$query = mysqli_query($conn,"select * from org_bahasa");
		$kalimat="<thead><tr><th class='th-sm'>Nama</th><th class='th-sm'>Deskripsi</th><th class='th-sm'>Kategori</th><th class='th-sm'>Foto</th><th class='th-sm'>Bahasa</th><th class='th-sm'>Status Aktif</th><th class='th-sm'>Action</th></tr></thead><tbody>";
		while($row=mysqli_fetch_assoc($query)){
			$kalimat.="<tr>";
				$kalimat.="<td>".$row['org_nama']."</td>";
				$kalimat.="<td>".$row['org_deskripsi']."</td>";
				$org_id=$row['org_id'];
				$q1=mysqli_query($conn,"select * from org where org_id='$org_id'");
				while($r1=mysqli_fetch_assoc($q1)){
					$kategori_id=$r1['kategori_id'];
					$foto=$r1['org_foto'];
					$aktif=$r1['org_status'];
				}
				$q2=mysqli_query($conn,"select * from kategori_bahasa where kategori_id='$kategori_id'");
				while($r2=mysqli_fetch_assoc($q2)){
					$namaKategori = $r2['kategori_nama'];
				}
				$kalimat.="<td>".$namaKategori."</td>";
				$kalimat.="<td>".$foto."</td>";
				$bahasa=$row['bahasa_id'];
				$q3=mysqli_query($conn,"select * from bahasa where bahasa_id=$bahasa");
				while($r3=mysqli_fetch_assoc($q3)){
					$bahasa=$r3['bahasa_nama'];
				}
				$kalimat.="<td>".$bahasa."</td>";
				$kalimat.="<td>".$aktif."</td>";
				$kalimat.="<td><button class='btn btn-info btn-block my-4' type='button' onclick='edit(".$row['org_bahasa_id'].")'>Edit</button>";
				$kalimat.="<button class='btn btn-info btn-block my-4' type='button' onclick='deletes(".$row['org_bahasa_id'].")'>Delete</button></td>";
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
	if($_POST['jenis']=="AddKategori"){
		$bahasa		=$_POST['bahasa'];
		$nama 		=$_POST['nama'];
		$pendek		=$_POST['pendek'];
		$aktif		=$_POST['aktif'];
		if(isset($_SESSION['editKategori'])){
			$nomer = $_SESSION['editKategori'];
			mysqli_query($conn,"update kategori set kategori_status='$aktif' where kategori_id='$nomer'");
			mysqli_query($conn,"update kategori_bahasa set bahasa_id='$bahasa',kategori_nama='$nama',kategori_nama_pendek='$pendek' where kategori_bahasa_id='$nomer'");
			unset($_SESSION['editKategori']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into kategori(kategori_status) values ('$aktif')");
			$q3=mysqli_query($conn,"select * from kategori where kategori_id=(select max(kategori_id) from kategori)");
			while($r3=mysqli_fetch_assoc($q3)){
				$kategori_id=$r3['kategori_id'];
			}
			$q2=mysqli_query($conn,"insert into kategori_bahasa(kategori_id,bahasa_id,kategori_nama,kategori_nama_pendek) values('$kategori_id','$bahasa','$nama','$pendek')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddMatkul"){
		$bahasa		=$_POST['bahasa'];
		$aktif 		=$_POST['aktif'];
		$nama		=$_POST['nama'];
		$deskripsi	=$_POST['deskripsi'];
		$jurusan	=$_POST['jurusan'];
		$semester	=$_POST['semester'];
		$sks	=$_POST['sks'];
		if(isset($_SESSION['editMatkul'])){
			$nomer = $_SESSION['editMatkul'];
			mysqli_query($conn,"update matkul set matkul_sks='$sks',matkul_semester='$semester',jurusan_id='$jurusan',matkul_status='$aktif' where matkul_id='$nomer'");
			mysqli_query($conn,"update matkul_bahasa set matkul_nama='$nama',matkul_deskripsi='$deskripsi',bahasa_id='$bahasa' where matkul_bahasa_id='$nomer'");
			unset($_SESSION['editMatkul']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into matkul(matkul_sks,matkul_semester,jurusan_id,matkul_status) values('$sks','$semester','$jurusan','$aktif')");
			$q3=mysqli_query($conn,"select * from matkul where matkul_id=(select max(matkul_id) from matkul)");
			while($r3=mysqli_fetch_assoc($q3)){
				$matkul_id=$r3['matkul_id'];
			}
			$q2=mysqli_query($conn,"insert into matkul_bahasa(matkul_id,matkul_nama,matkul_deskripsi,bahasa_id) values('$matkul_id','$nama','$deskripsi','$bahasa')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddTag"){
		$bahasa		=$_POST['bahasa'];
		$aktif 		=$_POST['aktif'];
		$nama		=$_POST['nama'];
		if(isset($_SESSION['editTag'])){
			$nomer = $_SESSION['editTag'];
			mysqli_query($conn,"update tag set tag_status='$aktif' where tag_id='$nomer'");
			mysqli_query($conn,"update tag_bahasa set tag_nama='$nama',bahasa_id='$bahasa' where tag_bahasa_id='$nomer'");
			unset($_SESSION['editTag']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into tag(tag_status) values('$aktif')");
			$q3=mysqli_query($conn,"select * from tag where tag_id=(select max(tag_id) from tag)");
			while($r3=mysqli_fetch_assoc($q3)){
				$tag_id=$r3['tag_id'];
			}
			$q2=mysqli_query($conn,"insert into tag_bahasa(tag_id,tag_nama,bahasa_id) values('$tag_id','$nama','$bahasa')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddMedia"){
		$bahasa		=$_POST['bahasa'];
		$aktif 		=$_POST['aktif'];
		$judul		=$_POST['judul'];
		$deskripsi	=$_POST['deskripsi'];
		$file		=$_POST['file'];
		$sumbertajukmedia=$_POST['sumbertajukmedia'];
		$halaman	=$_POST['halaman'];
		$tanggal	=$_POST['tanggal'];
		if(isset($_SESSION['editMedia'])){
			$nomer = $_SESSION['editMedia'];
			mysqli_query($conn,"update media set media_foto='$file', media_sumber_tgl='$tanggal',media_sumber_tajuk='$sumbertajukmedia',media_sumber_hal='$halaman',media_status='$aktif' where media_id='$nomer'");
			mysqli_query($conn,"update media_bahasa set media_judul='$judul',bahasa_id='$bahasa',media_deskripsi='$deskripsi' where media_bahasa_id='$nomer'");
			unset($_SESSION['editMedia']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into media(media_foto,media_tanggal,media_sumber_tajuk,media_sumber_hal,media_sumber_tgl,media_status) values('$file',now(),'$sumbertajukmedia','$halaman','$tanggal','$aktif')");
			$q3=mysqli_query($conn,"select * from media where media_id=(select max(media_id) from media)");
			while($r3=mysqli_fetch_assoc($q3)){
				$media_id=$r3['media_id'];
			}
			$q2=mysqli_query($conn,"insert into media_bahasa(media_id,bahasa_id,media_judul,media_deskripsi) values('$media_id','$bahasa','$judul','$deskripsi')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddTestimoni"){
		$bahasa		=$_POST['bahasa'];
		$aktif 		=$_POST['aktif'];
		$nama		=$_POST['nama'];
		$profil		=$_POST['profil'];
		$file		=$_POST['file'];
		$testimoni	=$_POST['testimoni'];
		if(isset($_SESSION['editTestimoni'])){
			$nomer = $_SESSION['editTestimoni'];
			mysqli_query($conn,"update testimoni set testimoni_nama='$nama', testimoni_foto='$file',testimoni_status='$aktif' where testimoni_id='$nomer'");
			mysqli_query($conn,"update testimoni_bahasa set bahasa_id='$bahasa',testimoni_profil='$profil',testimoni_text='$testimoni' where testimoni_bahasa_id='$nomer'");
			unset($_SESSION['editTestimoni']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into testimoni(testimoni_nama,testimoni_foto,testimoni_status) values('$nama','$file','$aktif')");
			$q3=mysqli_query($conn,"select * from testimoni where testimoni_id=(select max(testimoni_id) from testimoni)");
			while($r3=mysqli_fetch_assoc($q3)){
				$testimoni_id=$r3['testimoni_id'];
			}
			$q2=mysqli_query($conn,"insert into testimoni_bahasa(testimoni_id,bahasa_id,testimoni_profil,testimoni_text) values('$testimoni_id','$bahasa','$profil','$testimoni')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddKontenTag"){
		$aktif 		=$_POST['aktif'];
		$jenisKonten=$_POST['jenisKonten'];
		$parent		=$_POST['parent'];
		$tag		=$_POST['tag'];
		if(isset($_SESSION['editKontenTag'])){
			$nomer = $_SESSION['editKontenTag'];
			mysqli_query($conn,"update konten set konten_nama='$jenisKonten', konten_status='$aktif'where konten_id='$nomer'");
			mysqli_query($conn,"update konten_tag set konten_parent='$parent',tag_id='$tag' where konten_id='$nomer'");
			unset($_SESSION['editKontenTag']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into konten(konten_nama,konten_status) values('$jenisKonten','$aktif')");
			$q3=mysqli_query($conn,"select * from konten where konten_id=(select max(konten_id) from konten)");
			while($r3=mysqli_fetch_assoc($q3)){
				$konten_id=$r3['konten_id'];
			}
			$q2=mysqli_query($conn,"insert into konten_tag(konten_id,konten_parent,tag_id) values('$konten_id','$parent','$tag')");
			echo "ADD";
		}
	}
	if($_POST['jenis']=="AddOrg"){
		$bahasa	= $_POST['bahasa'];
		$aktif	= $_POST['aktif'];
		$kategori = $_POST['kategori'];
		$foto	= $_POST['file'];
		$nama	= $_POST['nama'];
		$deskripsi=$_POST['deskripsi'];
		if(isset($_SESSION['editOrg'])){
			$nomer = $_SESSION['editOrg'];
			mysqli_query($conn,"update org set kategori_id='$kategori',org_foto='$foto',org_status='$status' where org_id='$nomer'");
			mysqli_query($conn,"update org_bahasa set bahasa_id='$bahasa',org_nama='$nama',org_deskripsi='$deskripsi' where org_id='$nomer'");
			unset($_SESSION['editOrg']);
			echo "ADD";
		}
		else{
			$q1=mysqli_query($conn,"insert into org(kategori_id,org_foto,org_status) values('$kategori','$foto','$aktif')");
			$q3=mysqli_query($conn,"select * from org where org_id=(select max(org_id) from org)");
			while($r3=mysqli_fetch_assoc($q3)){
				$org_id=$r3['org_id'];
			}
			$q2=mysqli_query($conn,"insert into org_bahasa(org_id,bahasa_id,org_nama,org_deskripsi) values('$org_id','$bahasa','$nama','$deskripsi')");
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
	if($_POST['jenis']=="DeleteKategori"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from kategori_bahasa where kategori_bahasa_id='$nomer'");
		mysqli_query($conn,"delete from kategori where kategori_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteMatkul"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from matkul_bahasa where matkul_bahasa_id='$nomer'");
		mysqli_query($conn,"delete from matkul where matkul_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteTag"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from tag_bahasa where tag_bahasa_id='$nomer'");
		mysqli_query($conn,"delete from tag where tag_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteMedia"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from media_bahasa where media_bahasa_id='$nomer'");
		mysqli_query($conn,"delete from media where media_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteTestimoni"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from testimoni_bahasa where testimoni_bahasa_id='$nomer'");
		mysqli_query($conn,"delete from testimoni where testimoni_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteKontenTag"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from konten_tag where konten_id='$nomer'");
		mysqli_query($conn,"delete from konten where konten_id='$nomer'");
		echo "Sukses";
	}
	if($_POST['jenis']=="DeleteOrg"){
		$nomer		=$_POST['nomer'];
		mysqli_query($conn,"delete from org_bahasa where org_id='$nomer'");
		mysqli_query($conn,"delete from org where org_id='$nomer'");
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
	if($_POST['jenis']=="EditKategori"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from kategori_bahasa where kategori_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['nama']=$r1['kategori_nama'];
			$arr['pendek']=$r1['kategori_nama_pendek'];
			$arr['bahasa']=$r1['bahasa_id'];
		}
		$q2 = mysqli_query($conn,"select * from kategori where kategori_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['aktif']=$r2['kategori_status'];
		}
		$_SESSION['editKategori']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditMatkul"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from matkul_bahasa where matkul_bahasa_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['nama']=$r1['matkul_nama'];
			$arr['deskripsi']=$r1['matkul_deskripsi'];
			$arr['bahasa']=$r1['bahasa_id'];
		}
		$q2 = mysqli_query($conn,"select * from matkul where matkul_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['sks']=$r2['matkul_sks'];
			$arr['semester']=$r2['matkul_semester'];
			$arr['jurusan']=$r2['jurusan_id'];
			$arr['aktif']=$r2['matkul_status'];
		}
		$_SESSION['editMatkul']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditTag"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from tag_bahasa where tag_bahasa_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['nama']=$r1['tag_nama'];
			$arr['bahasa']=$r1['bahasa_id'];
		}
		$q2 = mysqli_query($conn,"select * from tag where tag_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['aktif']=$r2['tag_status'];
		}
		$_SESSION['editTag']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditMedia"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from media_bahasa where media_bahasa_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['judul']=$r1['media_judul'];
			$arr['deskripsi']=$r1['media_deskripsi'];
			$arr['bahasa']=$r1['bahasa_id'];
		}
		$q2 = mysqli_query($conn,"select * from media where media_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['foto']=$r2['media_foto'];
			$arr['sumbertajuk']=$r2['media_sumber_tajuk'];
			$arr['halaman']=$r2['media_sumber_hal'];
			$arr['tanggal']=$r2['media_sumber_tgl'];
			$arr['aktif']=$r2['media_status'];
		}
		$_SESSION['editMedia']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditTestimoni"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from testimoni_bahasa where testimoni_bahasa_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['testimoni']=$r1['testimoni_text'];
			$arr['profil']=$r1['testimoni_profil'];
			$arr['bahasa']=$r1['bahasa_id'];
		}
		$q2 = mysqli_query($conn,"select * from testimoni where testimoni_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['nama']=$r2['testimoni_nama'];
			$arr['foto']=$r2['testimoni_foto'];
			$arr['aktif']=$r2['testimoni_status'];
		}
		$_SESSION['editTestimoni']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditKontenTag"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from konten_tag where konten_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['parent']=$r1['konten_parent'];
			$arr['tag']=$r1['tag_id'];
		}
		$q2 = mysqli_query($conn,"select * from konten where konten_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$jenisKonten=$r2['konten_nama'];
			if($jenisKonten=='agenda'){
				$jenisKonten=0;
			}
			else if($jenisKonten=='berita'){
				$jenisKonten=1;
			}
			else{
				$jenisKonten=2;
			}
			$arr['jenis']=$jenisKonten;
			$arr['aktif']=$r2['konten_status'];
		}
		$_SESSION['editKontenTag']=$nomer;
		echo json_encode($arr);
	}
	if($_POST['jenis']=="EditOrg"){
		$nomer		=$_POST['nomer'];
		$arr[]		=array();
		$q1 = mysqli_query($conn,"select * from org_bahasa where org_bahasa_id='$nomer'");
		while($r1=mysqli_fetch_assoc($q1)){
			$arr['bahasa']=$r1['bahasa_id'];
			$arr['nama']=$r1['org_nama'];
			$arr['deskripsi']=$r1['org_deskripsi'];
		}
		$q2 = mysqli_query($conn,"select * from org where org_id='$nomer'");
		while($r2=mysqli_fetch_assoc($q2)){
			$arr['kategori']=$r2['kategori_id'];
			$arr['org_foto']=$r2['org_foto'];
			$arr['aktif']=$r2['org_status'];
		}
		$_SESSION['editOrg']=$nomer;
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