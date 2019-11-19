<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
?>
<head>
	<title>MATKUL</title>
	<?php include "fileinclude.php";?>
</head>
<body>
	<?php include "navbar.php"; ?>
	<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>DATABASE</h3>
                <strong>DB</strong>
            </div>
            <ul class="list-unstyled components">
                <li>
					<a href="adminsite.php">
                        <i class="fas fa-home"></i>
                        HOME
                    </a>
				</li>
				<li>
                    <a href="agenda.php">
                        <i class="fas fa-calendar"></i>
                        Agenda
                    </a>
				</li>
				<li>
                    <a href="berita.php">
                        <i class="fas fa-copy"></i>
                        Berita
                    </a>
					<a href="dosen.php">
                        <i class="fas fa-user"></i>
                        Dosen
                    </a>
                </li>
                <li>
                    <a href="jurusan.php">
                        <i class="fas fa-university"></i>
                        Jurusan
                    </a>
                </li>
                <li>
                    <a href="kategori.php">
                        <i class="fas fa-tags"></i>
                        Kategori
                    </a>
                </li>
				<li>
                    <a href="kontentag.php">
                        <i class="fas fa-tags"></i>
                        Konten Tag
                    </a>
                </li>
				<li  class='active'>
                    <a href="matkul.php">
                        <i class="fas fa-book"></i>
                        Mata Kuliah
                    </a>
                </li>
                <li>
                    <a href="media.php">
                        <i class="fas fa-tablet"></i>
                        Media
                    </a>
                </li>
				<li>
                    <a href="organisasi.php">
                        <i class="fas fa-user-circle"></i>
                        Organisasi
                    </a>
                </li>
				<li>
                    <a href="tag.php">
                        <i class="fas fa-tags"></i>
                        Tag
                    </a>
                </li>
				<li>
                    <a href="testimoni.php">
                        <i class="fas fa-comment"></i>
                        Testimoni
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>See More</span>
                    </button>
					<h1>MATA KULIAH</h1>
                </div>
            </nav>
			<div class='container'>
				Bahasa<br>
				<select id='cbBahasa' class="browser-default custom-select">
				</select>
				<br>
				Status Aktif<br>
				<select id='cbAktif' class="browser-default custom-select">
					<option value='1'>Aktif</option>
					<option value='0'>Non Aktif</option>
				</select>
				<!-- Default input -->
				<label for="tbNamaMatkul">Nama Matkul</label>
				<input type="text" id="tbNamaMatkul" class="form-control"><br>
				<label for="tbDeskripsiMatkul">Deskripsi Matkul</label>
				<textarea id="tbDeskripsiMatkul" class="form-control"></textarea>
				SKS<br>
				<select id='cbSKS' class="browser-default custom-select">
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='6'>6</option>
				</select>
				Jurusan<br>
				<select id='cbJurusan' class="browser-default custom-select">
				</select>
				Semester<br>
				<select id='cbSemester' class="browser-default custom-select">
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
					<option value='5'>5</option>
					<option value='6'>6</option>
					<option value='7'>7</option>
					<option value='8'>8</option>
				</select>
				<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
				<br>
				<table id="tbMatkul" class="table table-striped table-responsive" cellspacing="0" width="100%">
				</table>
			</div>
        </div>
    </div>
</body>
<?php include "fileinclude2.php";?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#sidebarCollapse').on('click', function () {
			$('#sidebar').toggleClass('active');
		});
	});
</script>
<script language='javascript'>
	isicbBahasa();
	isicbJurusan();
	isitabelMatkul();
	function isicbBahasa(){
		$.post("response.php",
			{jenis:"isicbBahasa"},
			function(result){
				$("#cbBahasa").html(result);
			}
		);
	}
	function isicbJurusan(){
		$.post("response.php",
			{jenis:"isicbJurusan"},
			function(result){
				$("#cbJurusan").html(result);
			}
		);
	}
	function isitabelMatkul(){
		$.post("response.php",
			{jenis:"isitabelMatkul"},
			function(result){
				$("#tbMatkul").html(result);
				$('#tbMatkul').DataTable();
			}
		);
	}
	function add(){
		var bahasa = $("#cbBahasa").val();
		var aktif = $("#cbAktif").val();
		var nama = $("#tbNamaMatkul").val();
		var deskripsi = $("#tbDeskripsiMatkul").val();
		var jurusan = $("#cbJurusan").val();
		var semester = $("#cbSemester").val();
		var sks = $("#cbSKS").val();
		if(bahasa!="" && aktif!="" && nama!="" && deskripsi!="" && jurusan!="" && semester!="" && sks!=""){
			$.post("response.php",
				{jenis:"AddMatkul",bahasa:bahasa,aktif:aktif,nama:nama,deskripsi:deskripsi,jurusan:jurusan,semester:semester,sks:sks},
				function(result){
					$("#btnAdd").html(result);
					isitabelMatkul();
				}
			);
		}
		else{
			alert("Semua Field Harus terisi");
		}
	}
	function deletes(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteMatkul",nomer:ambil},
			function(result){
				//alert(result);
				isitabelMatkul();
			}
		);
	}
	function edit(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"EditMatkul",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				var nama=array['nama'];
				$("#tbNamaMatkul").val(nama);
				var deskripsi=array['deskripsi'];
				$("#tbDeskripsiMatkul").val(deskripsi);
				var sks=array['sks'];
				$("#cbSKS option[value="+sks+"]").attr('selected','selected');
				var jurusan=array['jurusan'];
				$("#cbJurusan option[value="+jurusan+"]").attr('selected','selected');
				var semester=array['semester'];
				$("#cbSemester option[value="+semester+"]").attr('selected','selected');
				$("#btnAdd").html("SAVE");
			}
		);
	}
</script>