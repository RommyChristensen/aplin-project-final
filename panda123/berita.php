<?php
	session_start();
	require_once("../helpers/koneksi.php");
	if(!isset($_SESSION['adminLogin'])){
		header("Location:index.php");
	}
?>
<head>
	<title>BERITA</title>
	<?php include "fileinclude.php";?>
</head>
<body>
	<?php include "navbar.php";?>
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
				<li class='active'>
                    <a href="berita.php">
                        <i class="fas fa-copy"></i>
                        Berita
                    </a>
				</li>
				<li>
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
					<h1>BERITA</h1>
					<button onclick='showForm()'>+Berita</button>
                </div>
            </nav>
			<div class='container'>
				<div id='forms'>
					Bahasa<br>
					<select id='cbBahasa' class="browser-default custom-select">
					</select>
					<br><br>
					<!-- Default input -->
					<label for="tbJudulBerita">Judul Berita</label>
					<input type="text" id="tbJudulBerita" class="form-control">
					<br>
					<!-- Default input -->
					<label for="tbDeskripsiBerita">Deskripsi Berita</label>
					<textarea id="tbDeskripsiBerita" class="form-control"></textarea>
					Foto 
					<div class="custom-file">
					  <input type="file" class="custom-file-input" id="tbFile">
					  <label class="custom-file-label" for="tbFile" data-browse="Browse">Choose File</label>
					</div>
					Status Aktif<br>
					<select id='cbAktif' class="browser-default custom-select">
						<option value='1'>Aktif</option>
						<option value='0'>Non Aktif</option>
					</select>
					<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
					<br>
				</div>
				<table id="tbBerita" class="table table-striped table-responsive" cellspacing="0" width="100%">
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
	isitabelBerita();
	function isicbBahasa(){
		$.post("response.php",
			{jenis:"isicbBahasa"},
			function(result){
				$("#cbBahasa").html(result);
			}
		);
	}
	function isitabelBerita(){
		$.post("response.php",
			{jenis:"isitabelBerita"},
			function(result){
				$("#tbBerita").html(result);
				$('#tbBerita').DataTable();
			}
		);
	}
	function add(){
		var bahasa = $("#cbBahasa").val();
		var judul = $("#tbJudulBerita").val();
		var deskripsi = $("#tbDeskripsiBerita").val();
		var file = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');
		var aktif=$("#cbAktif").val();
		if(bahasa!="" && judul!="" && deskripsi!="" && aktif!=""){
			if(file==""){
				file=" ";
			}
			$.post("response.php",
				{jenis:"AddBerita",bahasa:bahasa,judul:judul,deskripsi:deskripsi,file:file,aktif:aktif},
				function(result){
					alert(result);
					$("#btnAdd").html(result);
					isitabelBerita();
				}
			);
		}
		else{
			alert("Bahasa, Judul, Deskripsi, dan Status Aktif harus terisi");
		}
	}
	function deletes(e){
		if(confirm("Anda Yakin ?")==true){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteBerita",nomer:ambil},
			function(result){
				//alert(result);
				isitabelBerita();
			}
		);
		}
	}
	function edit(e){
		var ambil = e;
		$("#forms").fadeIn();
		$(document).scrollTop(10);
		$.post("response.php",
			{jenis:"EditBerita",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				var judul = array['judul'];
				$("#tbJudulBerita").val(judul);
				var desc = array['deskripsi'];
				$("#tbDeskripsiBerita").val(desc);
				var foto = array['foto'];
				$("#btnAdd").html("SAVE");
				$("#tbFile").val(foto);
			}
		);
	}
</script>