<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
	if(!isset($_SESSION['adminLogin'])){
		header("Location:index.php");
	}
?>
<head>
	<title>ORG</title>
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
				<li>
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
				<li  class='active'>
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
					<h1>ORGANISASI</h1>
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
				Kategori<br>
				<select id='cbKategori' class="browser-default custom-select">
				</select>
				Foto 
				<div class="custom-file">
				  <input type="file" class="custom-file-input" id="tbFile">
				  <label class="custom-file-label" for="tbFile" data-browse="Browse">Choose File</label>
				</div>
				<label for="tbNama">Nama</label>
				<input type="text" id="tbNama" class="form-control"><br>
				<label for="tbDeskripsi">Deskripsi</label>
				<textarea id="tbDeskripsi" class="form-control"></textarea>
				<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
				<br>
				<table id="tbOrg" class="table table-striped table-responsive" cellspacing="0" width="100%">
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
	function isicbBahasa(){
		$.post("response.php",
			{jenis:"isicbBahasa"},
			function(result){
				$("#cbBahasa").html(result);
			}
		);
	}
	isicbKategori();
	function isicbKategori(){
		$.post("response.php",
			{jenis:"isicbKategori"},
			function(result){
				$("#cbKategori").html(result);
			}
		);
	}
	isitabelOrg();
	function isitabelOrg(){
		$.post("response.php",
			{jenis:"isitabelOrg"},
			function(result){
				$("#tbOrg").html(result);
				$('#tbOrg').DataTable();
			}
		);
	}
	function add(){
		var bahasa = $("#cbBahasa").val();
		var aktif = $("#cbAktif").val();
		var kategori = $("#cbKategori").val();
		var file = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');
		var nama = $("#tbNama").val();
		var deskripsi = $("#tbDeskripsi").val();
		if(bahasa!="" && aktif!="" && kategori!="" && file!="" && nama!="" && deskripsi!=""){
			$.post("response.php",
				{jenis:"AddOrg",bahasa:bahasa,aktif:aktif,kategori:kategori,file:file,nama:nama,deskripsi:deskripsi},
				function(result){
					$("#btnAdd").html(result);
					isitabelOrg();
				}
			);
		}
		else{
			alert("Semua field harus terisi");
		}
	}
	function deletes(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteOrg",nomer:ambil},
			function(result){
				//alert(result);
				isitabelOrg();
			}
		);
	}
	function edit(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"EditOrg",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var aktif=array['aktif'];
				alert(aktif);
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				var kategori=array['kategori'];
				$("#cbKategori option[value="+kategori+"]").attr('selected','selected');
				var nama=array['nama'];
				$("#tbNama").val(nama);
				var deskripsi=array['deskripsi'];
				$("#tbDeskripsi").val(deskripsi);
				$("#btnAdd").html("SAVE");
			}
		);
	}
</script>