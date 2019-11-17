<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
?>
<head>
	<title>MATKUL</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../assets/css/style2.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/mdb.lite.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/mdb.lite.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<script src='../assets/js/jquery-3.4.1.min.js'></script>
	<script src='../assets/js/mdb.min.js'></script>
	<script src='../assets/js/popper.min.js'></script>
	
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css"/>
	<script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>
</head>
<body>
	<h1 style='text-align:center;'>MATKUL</h1>
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
		<textarea id="tbDeskripsiAgenda" class="form-control"></textarea>
		Jurusan<br>
		<select id='cbJurusan' class="browser-default custom-select">
		</select>
		<label for="tbSemester">Semester</label>
		<input type="text" id="tbSemester" class="form-control"><br>
		<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
		<br>
		<table id="tbMatkul" class="table table-striped" cellspacing="0" width="100%">
		</table>
	</div>
</body>
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
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteKategori",nomer:ambil},
			function(result){
				//alert(result);
				isitabelKategori();
			}
		);
	}
	function edit(e){
		var ambil = e;
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