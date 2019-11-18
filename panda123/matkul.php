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
	<?php include "navbar.php"; ?>
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