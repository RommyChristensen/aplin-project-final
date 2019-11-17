<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
?>
<head>
	<title>AGENDA</title>
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
	<h1 style='text-align:center;'>AGENDA</h1>
	<div class='container'>
		Bahasa<br>
		<select id='cbBahasa' class="browser-default custom-select">
		</select>
		<br><br>
		<!-- Default input -->
		<label for="tbJudulAgenda">Judul Agenda</label>
		<input type="text" id="tbJudulAgenda" class="form-control">
		<br>
		<!-- Default input -->
		<label for="tbDeskripsiAgenda">Deskripsi Agenda</label>
		<textarea id="tbDeskripsiAgenda" class="form-control"></textarea>
		Foto 
		<div class="custom-file">
		  <input type="file" class="custom-file-input" id="tbFile">
		  <label class="custom-file-label" for="tbFile" data-browse="Browse">Choose File</label>
		</div>
		<label for="tbLokasi">Lokasi</label>
		<input type="text" id="tbLokasi" class="form-control"><br>
		Status Aktif<br>
		<select id='cbAktif' class="browser-default custom-select">
			<option value='1'>Aktif</option>
			<option value='0'>Non Aktif</option>
		</select>
		<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
		<br>
		<table id="tbAgenda" class="table table-striped" cellspacing="0" width="100%">
		</table>
	</div>
</body>
<script language='javascript'>
	isicbBahasa();
	isitabelAgenda();
	function isicbBahasa(){
		$.post("response.php",
			{jenis:"isicbBahasa"},
			function(result){
				$("#cbBahasa").html(result);
			}
		);
	}
	function isitabelAgenda(){
		$.post("response.php",
			{jenis:"isitabelAgenda"},
			function(result){
				$("#tbAgenda").html(result);
				$('#tbAgenda').DataTable();
			}
		);
	}
	function add(){
		var bahasa = $("#cbBahasa").val();
		var judul = $("#tbJudulAgenda").val();
		var deskripsi = $("#tbDeskripsiAgenda").val();
		var file = $("#tbFile").val();
		var lokasi = $("#tbLokasi").val();
		var aktif=$("#cbAktif").val();
		if(bahasa!="" && judul!="" && deskripsi!="" && aktif!=""){
			if(file==""){
				file=" ";
			}
			if(lokasi==""){
				lokasi=" ";
			}
			$.post("response.php",
				{jenis:"AddAgenda",bahasa:bahasa,judul:judul,deskripsi:deskripsi,file:file,lokasi:lokasi,aktif:aktif},
				function(result){
					//alert(result);
					$("#btnAdd").html(result);
					isitabelAgenda();
				}
			);
		}
		else{
			alert("Bahasa, Judul, Deskripsi, dan Status Aktif harus terisi");
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
				//alert(result);
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
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