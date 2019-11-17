<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
?>
<head>
	<title>TAG</title>
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
	<h1 style='text-align:center;'>TAG</h1>
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
		<label for="tbNamaTag">Nama Tag</label>
		<input type="text" id="tbNamaTag" class="form-control"><br>
		<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
		<br>
		<table id="tbTag" class="table table-striped" cellspacing="0" width="100%">
		</table>
	</div>
</body>
<script language='javascript'>
	isicbBahasa();
	isitabelTag();
	function isicbBahasa(){
		$.post("response.php",
			{jenis:"isicbBahasa"},
			function(result){
				$("#cbBahasa").html(result);
			}
		);
	}
	function isitabelTag(){
		$.post("response.php",
			{jenis:"isitabelTag"},
			function(result){
				$("#tbTag").html(result);
				$('#tbTag').DataTable();
			}
		);
	}
	function add(){
		var bahasa = $("#cbBahasa").val();
		var aktif = $("#cbAktif").val();
		var nama = $("#tbNamaTag").val();
		if(bahasa!="" && aktif!="" && nama!=""){
			$.post("response.php",
				{jenis:"AddTag",nama:nama,aktif:aktif,bahasa:bahasa},
				function(result){
					//alert(result);
					$("#btnAdd").html(result);
					isitabelTag();
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
			{jenis:"DeleteTag",nomer:ambil},
			function(result){
				//alert(result);
				isitabelTag();
			}
		);
	}
	function edit(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"EditTag",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				var nama=array['nama'];
				$("#tbNamaTag").val(nama);
				$("#btnAdd").html("SAVE");
			}
		);
	}
</script>