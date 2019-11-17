<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
?>
<head>
	<title>BERITA</title>
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
	<h1 style='text-align:center;'>BERITA</h1>
	<div class='container'>
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
		<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
		<br>
		<table id="tbBerita" class="table table-striped" cellspacing="0" width="100%">
		</table>
	</div>
</body>
<script language='javascript'>
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
		var file = $("#tbFile").val();
		if(bahasa!="" && judul!="" && deskripsi!=""){
			if(file==""){
				file=" ";
			}
			$.post("response.php",
				{jenis:"AddBerita",bahasa:bahasa,judul:judul,deskripsi:deskripsi,file:file},
				function(result){
					//alert(result);
					$("#btnAdd").html(result);
					isitabelBerita();
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
			{jenis:"DeleteBerita",nomer:ambil},
			function(result){
				//alert(result);
				isitabelBerita();
			}
		);
	}
	function edit(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"EditBerita",nomer:ambil},
			function(result){
				var array = JSON.parse(result);
				var bahasa=array['bahasa'];
				$("#cbBahasa option[value="+bahasa+"]").attr('selected','selected');
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