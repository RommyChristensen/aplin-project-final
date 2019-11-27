<?php
	session_start();
	require_once("../helpers/koneksi.php");
	if(!isset($_SESSION['adminLogin'])){
		header("Location:index.php");
	}
?>
<head>
	<title>KATEGORI</title>
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
                <li  class='active'>
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
				<li>
                    <a href="org.php">
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
					<h1>KATEGORI</h1>
					<button onclick='showForm()'>+Kategori</button>
                </div>
            </nav>
			<div class='container'>
				<div id='forms'>
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
				<label for="tbNamaKategori">Nama Kategori</label>
				<input type="text" id="tbNamaKategori" class="form-control"><br>
				<label for="tbSingkatanKategori">Nama Pendek Kategori</label>
				<input type="text" id="tbSingkatanKategori" class="form-control"><br>
				<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
				<br>
				</div>
				<table id="tbKategori" class="table table-striped" cellspacing="0" width="100%">
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
		$("#forms").hide();
	});
</script>
<script language='javascript'>
	function showForm(){
		$("#forms").fadeToggle();
	}
	isicbBahasa();
	isitabelKategori();
	function isicbBahasa(){
		$.post("response.php",
			{jenis:"isicbBahasa"},
			function(result){
				$("#cbBahasa").html(result);
			}
		);
	}
	function isitabelKategori(){
		$.post("response.php",
			{jenis:"isitabelKategori"},
			function(result){
				$("#tbKategori").html(result);
				$('#tbKategori').DataTable();
			}
		);
	}
	function add(){
		var bahasa = $("#cbBahasa").val();
		var aktif = $("#cbAktif").val();
		var nama = $("#tbNamaKategori").val();
		var pendek = $("#tbSingkatanKategori").val();
		if(bahasa!="" && aktif!="" && nama!="" && pendek!=""){
			$.post("response.php",
				{jenis:"AddKategori",nama:nama,aktif:aktif,pendek:pendek,bahasa:bahasa},
				function(result){
					//alert(result);
					$("#btnAdd").html(result);
					isitabelKategori();
				}
			);
		}
		else{
			alert("Semua Field Harus terisi");
		}
	}
	function deletes(e){
		if(confirm("Anda Yakin ?")==true){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteKategori",nomer:ambil},
			function(result){
				//alert(result);
				isitabelKategori();
			}
		);
		}
	}
	function edit(e){
		var ambil = e;
		$("#forms").fadeToggle();
		$(document).scrollTop(10);
		$.post("response.php",
			{jenis:"EditKategori",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				var nama=array['nama'];
				$("#tbNamaKategori").val(nama);
				var pendek = array['pendek'];
				$("#tbSingkatanKategori").val(pendek);
				$("#btnAdd").html("SAVE");
			}
		);
	}
</script>