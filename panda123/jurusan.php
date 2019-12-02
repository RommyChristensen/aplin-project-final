<?php
	session_start();
	require_once("../helpers/koneksi.php");
	if(!isset($_SESSION['adminLogin'])){
		header("Location:index.php");
	}
?>
<head>
	<title>JURUSAN</title>
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
                <li class='active'>
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
					<h1>JURUSAN</h1>
					<button onclick='showForm()'>+Jurusan</button>
                </div>
            </nav>
			<div class='container'>
				<div id='forms'>
				Bahasa<br>
				<select id='cbBahasa' class="browser-default custom-select">
				</select>
				<br><br>
				<!-- Default input -->
				<label for="tbJurusanID">ID Jurusan</label>
				<input type="text" id="tbJurusanID" class="form-control">
				<br>
				<label for="tbNamaJurusan">Nama Jurusan</label>
				<input type="text" id="tbNamaJurusan" class="form-control">
				<br>
				Status Aktif<br>
				<select id='cbAktif' class="browser-default custom-select">
					<option value='1'>Aktif</option>
					<option value='0'>Non Aktif</option>
				</select>
				<!-- Default input -->
				<label for="tbDeskripsiJurusan">Deskripsi Jurusan</label>
				<textarea id="tbDeskripsiJurusan" class="form-control"></textarea>
				<label for="tbWebsiteJurusan">Website</label>
				<input type="text" id="tbWebsiteJurusan" class="form-control"><br>
				<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
				<br>
				</div>
				<table id="tbJurusan" class="table table-striped table-responsive" cellspacing="0" width="100%">
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
	isitabelJurusan();
	function isicbBahasa(){
		$.post("response.php",
			{jenis:"isicbBahasa"},
			function(result){
				$("#cbBahasa").html(result);
			}
		);
	}
	function isitabelJurusan(){
		$.post("response.php",
			{jenis:"isitabelJurusan"},
			function(result){
				$("#tbJurusan").html(result);
				$('#tbJurusan').DataTable();
			}
		);
	}
	function add(){
		var bahasa = $("#cbBahasa").val();
		var id = $("#tbJurusanID").val();
		var nama = $("#tbNamaJurusan").val();
		var aktif = $("#cbAktif").val();
		var deskripsi = $("#tbDeskripsiJurusan").val();
		var website = $("#tbWebsiteJurusan").val();
		//alert(id);
		if(bahasa!="" && id!="" && nama!="" && aktif!="" && deskripsi!=""){
			$.post("response.php",
				{jenis:"cekJurusanAda",id:id},
				function(result){
					if(result=="0"){
						if(website==""){
							website=" ";
						}
						$.post("response.php",
							{jenis:"AddJurusan",bahasa:bahasa,id:id,nama:nama,aktif:aktif,deskripsi:deskripsi,website:website},
							function(result){
								//alert(result);
								$("#btnAdd").html(result);
								isitabelJurusan();
							}
						);
					}
					else{
						alert("Jurusan dengan ID tersebut sudah ada");
					}
				}
			);
		}
		else{
			alert("Bahasa, ID, Nama, Status Aktif, dan Deskripsi harus terisi");
		}
		$("#tbJurusanID").attr('readonly',false);
	}
	function deletes(e){
		if(confirm("Anda Yakin ?")==true){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteJurusan",nomer:ambil},
			function(result){
				//alert(result);
				isitabelJurusan();
			}
		);
		}
	}
	function edit(e){
		var ambil = e;
		$("#forms").fadeIn();
		$(document).scrollTop(10);
		$.post("response.php",
			{jenis:"EditJurusan",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				$("#tbJurusanID").val(ambil+"(edit)");
				var nama = array['nama'];
				$("#tbNamaJurusan").val(nama);
				var deskripsi = array['deskripsi'];
				$("#tbDeskripsiJurusan").val(deskripsi);
				var website = array['website'];
				$("#tbWebsiteJurusan").val(website);
				$("#btnAdd").html("SAVE");
				$("#tbJurusanID").attr('readonly','readonly');
			}
		);
	}
</script>