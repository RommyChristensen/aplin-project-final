<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
	if(!isset($_SESSION['adminLogin'])){
		header("Location:index.php");
	}
?>
<head>
	<title>MEDIA</title>
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
                <li class='active'>
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
					<h1>MEDIA</h1>
					<button onclick='showForm()'>+Media</button>
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
				<label for="tbJudulMedia">Judul Media</label>
				<input type="text" id="tbJudulMedia" class="form-control"><br>
				<label for="tbDeskripsiMedia">Deskripsi Media</label>
				<textarea id="tbDeskripsiMedia" class="form-control"></textarea>
				Foto 
				<div class="custom-file">
				  <input type="file" class="custom-file-input" id="tbFile">
				  <label class="custom-file-label" for="tbFile" data-browse="Browse">Choose File</label>
				</div>
				<label for="tbMediaSumberTajuk">Sumber Tajuk Media</label>
				<input type="text" id="tbMediaSumberTajuk" class="form-control"><br>
				<label for="tbMediaSumberHal">Halaman Sumber Media</label>
				<input type="text" id="tbMediaSumberHal" class="form-control"><br>
				<label for="tbTanggalSumberMedia">Tanggal Sumber Media</label>
				<input type="date" id="tbTanggalSumberMedia" class="form-control"><br>
				<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
				<br>
				</div>
				<table id="tbMedia" class="table table-striped table-responsive" cellspacing="0" width="100%">
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
	isitabelMedia();
	function isicbBahasa(){
		$.post("response.php",
			{jenis:"isicbBahasa"},
			function(result){
				$("#cbBahasa").html(result);
			}
		);
	}
	function isitabelMedia(){
		$.post("response.php",
			{jenis:"isitabelMedia"},
			function(result){
				$("#tbMedia").html(result);
				$('#tbMedia').DataTable();
			}
		);
	}
	function add(){
		var bahasa = $("#cbBahasa").val();
		var aktif = $("#cbAktif").val();
		var judul = $("#tbJudulMedia").val();
		var deskripsi = $("#tbDeskripsiMedia").val();
		var file = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');
		var sumbertajukmedia = $("#tbMediaSumberTajuk").val();
		var halaman = $("#tbMediaSumberHal").val();
		var tanggal = $("#tbTanggalSumberMedia").val();
		if(bahasa!="" && aktif!="" && judul!="" && deskripsi!="" && file!=""){
			if(sumbertajukmedia==""){
				sumbertajukmedia=" ";
			}
			if(halaman==""){
				halaman=0;
			}
			if(tanggal==""){
				tanggal="0000-00-00";
			}
			$.post("response.php",
				{jenis:"AddMedia",bahasa:bahasa,aktif:aktif,judul:judul,deskripsi:deskripsi,file:file,sumbertajukmedia:sumbertajukmedia,halaman:halaman,tanggal:tanggal},
				function(result){
					$("#btnAdd").html(result);
					isitabelMedia();
				}
			);
		}
		else{
			alert("Bahasa, Status Aktif, Judul, Deskripsi, dan Foto harus terisi");
		}
	}
	function deletes(e){
		if(confirm("Anda Yakin ?")==true){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteMedia",nomer:ambil},
			function(result){
				//alert(result);
				isitabelMedia();
			}
		);
		}
	}
	function edit(e){
		var ambil = e;
		$("#forms").fadeIn();
		$(document).scrollTop(10);
		$.post("response.php",
			{jenis:"EditMedia",nomer:ambil},
			function(result){
				//alert(result);
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				var judul=array['judul'];
				$("#tbJudulMedia").val(judul);
				var deskripsi=array['deskripsi'];
				$("#tbDeskripsiMedia").val(deskripsi);
				var sumbertajuk=array['sumbertajuk'];
				$("#tbMediaSumberTajuk").val(sumbertajuk);
				var halaman=array['halaman'];
				$("#tbMediaSumberHal").val(halaman);
				var tanggal=array['tanggal'];
				$("#btnAdd").html("SAVE");
			}
		);
	}
</script>