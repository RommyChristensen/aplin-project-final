<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
?>
<head>
	<title>DOSEN</title>
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
	<h1 style='text-align:center;'>DOSEN</h1>
	<div class='container'>
		<!-- Default input -->
		<label for="tbNamaDosen">Nama Dosen</label>
		<input type="text" id="tbNamaDosen" class="form-control">
		<br>
		Status Aktif<br>
		<select id='cbAktif' class="browser-default custom-select">
			<option value='1'>Aktif</option>
			<option value='0'>Non Aktif</option>
		</select>
		<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
		<br>
		<table id="tbDosen" class="table table-striped" cellspacing="0" width="100%">
		</table>
	</div>
</body>
<script language='javascript'>
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
	function add(){
		var nama = $("#tbNamaDosen").val();
		var aktif = $("#cbAktif").val();
		if(nama!="" && aktif!=""){
			$.post("response.php",
				{jenis:"AddDosen",nama:nama,aktif:aktif},
				function(result){
					//alert(result);
					$("#btnAdd").html(result);
					isitabelDosen();
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
			{jenis:"DeleteDosen",nomer:ambil},
			function(result){
				//alert(result);
				isitabelDosen();
			}
		);
	}
	function edit(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"EditDosen",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var nama=array['nama'];
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				$("#tbNamaDosen").val(nama);
				$("#btnAdd").html("SAVE");
			}
		);
	}
</script>