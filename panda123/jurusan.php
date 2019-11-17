<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
?>
<head>
	<title>JURUSAN</title>
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
	<h1 style='text-align:center;'>JURUSAN</h1>
	<div class='container'>
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
		<table id="tbJurusan" class="table table-striped" cellspacing="0" width="100%">
		</table>
	</div>
</body>
<script language='javascript'>
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
		var judul = $("#tbJudulAgenda").val();
		var deskripsi = $("#tbDeskripsiAgenda").val();
		var file = $("#tbFile").val();
		var lokasi = $("#tbLokasi").val();
		if(bahasa!="" && judul!="" && deskripsi!=""){
			if(file==""){
				file=" ";
			}
			if(lokasi==""){
				lokasi=" ";
			}
			$.post("response.php",
				{jenis:"AddAgenda",bahasa:bahasa,judul:judul,deskripsi:deskripsi,file:file,lokasi:lokasi},
				function(result){
					alert(result);
					$("#btnAdd").html(result);
					isitabelAgenda();
				}
			);
		}
		else{
			alert("Bahasa, Judul, dan Deskripsi harus terisi");
		}
	}
	function deletes(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteAgenda",nomer:ambil},
			function(result){
				//alert(result);
				isitabelAgenda();
			}
		);
	}
	function edit(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"EditAgenda",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var judul = array['judul'];
				$("#tbJudulAgenda").val(judul);
				var desc = array['deskripsi'];
				$("#tbDeskripsiAgenda").val(desc);
				var lokasi = array['lokasi'];
				$("#tbLokasi").val(lokasi);
				var foto = array['foto'];
				$("#btnAdd").html("SAVE");
				$("#tbFile").val(foto);
			}
		);
	}
</script>