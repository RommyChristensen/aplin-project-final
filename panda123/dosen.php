<?php
	session_start();
	require_once("../helpers/koneksi.php");
	if(!isset($_SESSION['adminLogin'])){
		header("Location:index.php");
	}
?>
<head>
	<title>DOSEN</title>
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
				</li>
				<li class='active'>
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
					<h1>DOSEN</h1>
					<button onclick='showForm()'>+Dosen</button>
                </div>
            </nav>
			<div class='container'>
				<!-- Default input -->
				<div id='forms'>
				<label for="tbNamaDosen">Nama Dosen</label>
				<input type="text" id="tbNamaDosen" class="form-control">
				<label for="tbKeteranganDosen">Keterangan Dosen</label>
				<input type="text" id="tbKeteranganDosen" class="form-control">
				<label for="tbEmailDosen">Email Dosen</label>
				<input type="text" id="tbEmailDosen" class="form-control">
				<br>
				Status Aktif<br>
				<select id='cbAktif' class="browser-default custom-select">
					<option value='1'>Aktif</option>
					<option value='0'>Non Aktif</option>
				</select>
				<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
				<br>
				</div>
				<table id="tbDosen" class="table table-striped" cellspacing="0" width="100%">
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
	isitabelDosen();
	function isitabelDosen(){
		$.post("response.php",
			{jenis:"isitabelDosen"},
			function(result){
				$("#tbDosen").html(result);
				$('#tbDosen').DataTable();
			}
		);
	}
	function isValidEmailAddress(emailAddress) {
		var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
		return pattern.test(emailAddress);
	}
	function add(){
		var nama = $("#tbNamaDosen").val();
		var keterangan = $("#tbKeteranganDosen").val();
		var email = $("#tbEmailDosen").val();
		var aktif = $("#cbAktif").val();
		if(nama!="" && aktif!="" && email!="" && keterangan!=""){
			if(isValidEmailAddress(email)){
				$.post("response.php",
					{jenis:"AddDosen",nama:nama,aktif:aktif,email:email,keterangan:keterangan},
					function(result){
						//alert(result);
						$("#btnAdd").html(result);
						isitabelDosen();
					}
				);
			}
			else{
				alert("Cek format email");
			}
		}
		else{
			alert("Semua field harus terisi");
		}
	}
	function deletes(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteDosen",nomer:ambil},
			function(result){
				//alert(result);
				isitabelDosen();
			}
		);
	}
	function edit(e){
		var ambil = e;
		$("#forms").fadeIn();
		$(document).scrollTop(10);
		$.post("response.php",
			{jenis:"EditDosen",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var nama=array['nama'];
				var aktif=array['aktif'];
				var keterangan=array['ket'];
				var email=array['email'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				$("#tbNamaDosen").val(nama);
				$("#tbKeteranganDosen").val(keterangan);
				$("#tbEmailDosen").val(email);
				$("#btnAdd").html("SAVE");
			}
		);
	}
</script>