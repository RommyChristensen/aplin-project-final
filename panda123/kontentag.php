<?php
	session_start();
	require_once("../helpers/koneksi.php");
	//require_once("navbar.php");
	if(!isset($_SESSION['adminLogin'])){
		header("Location:index.php");
	}
?>
<head>
	<title>KONTEN TAG</title>
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
				<li class='active'>
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
					<h1>KONTEN TAG</h1>
					<button onclick='showForm()'>+Konten Tag</button>
                </div>
            </nav>
			<div class='container'>
				<div id='forms'>
				Status Aktif<br>
				<select id='cbAktif' class="browser-default custom-select">
					<option value='1'>Aktif</option>
					<option value='0'>Non Aktif</option>
				</select>
				Jenis Konten<br>
				<select id='cbJenis' class="browser-default custom-select" onchange='isicbParent()'>
					<option value='0' selected='selected'>Agenda</option>
					<option value='1'>Berita</option>
					<option value='2'>Media</option>
				</select>
				Parent Konten<br>
				<select id='cbParent' class="browser-default custom-select">
				</select>
				Tag<br>
				<select id='cbTag' class="browser-default custom-select">
				</select>
				<button class="btn btn-info btn-block my-4" type="button" id='btnAdd' onclick='add()'>ADD</button>
				<br>
				</div>
				<table id="tbKontenTag" class="table table-striped table-responsive" cellspacing="0" width="100%">
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
	isicbParent();
	isicbTag();
	function isicbTag(){
		$.post("response.php",
			{jenis:"isicbTag"},
			function(result){
				$("#cbTag").html(result);
			}
		);
	}
	function isicbParent(){
		var jenisKonten = $("#cbJenis").val();
		$.post("response.php",
			{jenis:"isicbParentKontenTag",jenisKonten:jenisKonten},
			function(result){
				$("#cbParent").html(result);
			}
		);
	}
	isitabelKontenTag();
	function isitabelKontenTag(){
		$.post("response.php",
			{jenis:"isitabelKontenTag"},
			function(result){
				$("#tbKontenTag").html(result);
				$('#tbKontenTag').DataTable();
			}
		);
	}
	function add(){
		var aktif = $("#cbAktif").val();
		var jenisKonten = $("#cbJenis").val();
		if(jenisKonten==0){
			jenisKonten="agenda";
		}
		else if(jenisKonten==1){
			jenisKonten="berita";
		}
		else{
			jenisKonten="media";
		}
		var parent = $("#cbParent").val();
		var tag = $("#cbTag").val();
		if(aktif!="" && jenisKonten!="" && parent!="" && tag!=""){
			$.post("response.php",
				{jenis:"AddKontenTag",aktif:aktif,jenisKonten:jenisKonten,parent:parent,tag:tag},
				function(result){
					$("#btnAdd").html(result);
					isitabelKontenTag();
				}
			);
		}
		else{
			alert("Semua field harus terisi");
		}
	}
	function deletes(e){
		if(confirm("Anda Yakin ?")==true){
		var ambil = e;
		$.post("response.php",
			{jenis:"DeleteKontenTag",nomer:ambil},
			function(result){
				//alert(result);
				isitabelKontenTag();
			}
		);
		}
	}
	function edit(e){
		var ambil = e;
		$("#forms").fadeIn();
		$(document).scrollTop(10);
		$.post("response.php",
			{jenis:"EditKontenTag",nomer:ambil},
			function(result){
				//alert(result);
				var array = JSON.parse(result);
				var aktif=array['aktif'];
				$("#cbAktif option[value="+aktif+"]").attr('selected','selected');
				var jenis=array['jenis'];
				$("#cbJenis option[value="+jenis+"]").attr('selected','selected');
				isicbParent();
				var parent=array['parent'];
				//alert(parent);
				$("#cbParent option[value="+parent+"]").attr('selected','selected');
				var tag=array['tag'];
				$("#cbTag option[value="+tag+"]").attr('selected','selected');
				$("#btnAdd").html("SAVE");
			}
		);
	}
</script>