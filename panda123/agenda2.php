<?php
	session_start();
	require_once("../helpers/koneksi.php");
	if(!isset($_SESSION['adminLogin'])){
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AGENDA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<script src='../assets/js/jquery-3.4.1.min.js'></script>
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css"/>
	<script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>
	<style>
        .form-hidden {
            display: none;
        }
    </style>
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
		<header class="main-header">
		  <a href="../index.html" class="logo">
			<span class="logo-mini">iSTTS</span>
			<span class="logo-lg">iSTTS</span>
		  </a>
		  <nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="agenda2.php" class="sidebar-toggle" data-toggle="push-menu" role="button">
			  <span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
			  <ul class="nav navbar-nav">
				<!-- User Account Menu -->
				<li class="dropdown user user-menu">
				  <!-- Menu Toggle Button -->
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<!-- The user image in the navbar-->
					<img src="../assets/logoINF.png" class="user-image" alt="User Image">
					<!-- hidden-xs hides the username on small devices so only the image appears. -->
					<span class="hidden-xs">Admin</span>
				  </a>
				  <ul class="dropdown-menu">
					<!-- The user image in the menu -->
					<li class="user-header">
					  <img src="../assets/logoINF.png" class="img-circle" alt="User Image">
					  <p>
						Admin
					  </p>
					</li>
					  <!-- /.row -->
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
					  <form method="post">
						<div class="pull-right">
						  <button type="submit" class="btn btn-danger btn-flat" name="btnLogout">Sign Out</button>
						</div>
					  </form>
					</li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </nav>
		</header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
		  <!-- sidebar: style can be found in sidebar.less -->
		  <section class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
			  <div class="pull-left image">
				<img src="../assets/logoINF.png" class="img-circle" alt="User Image">
			  </div>
			  <div class="pull-left info">
				<p>Admin</p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i>Online</a>
			  </div>
			</div>
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu" data-widget="tree">
			  <!-- Optionally, you can add icons to the links -->
			  <li><a href="agenda2.php"><i class="fa fa-calendar"></i> <span>Agenda</span></a></li>
			</ul>
			<!-- /.sidebar-menu -->
		  </section>
		  <!-- /.sidebar -->
		</aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Hello, Admin!
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../assets/index.php"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active">Events
                    </li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        List Events
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">
                        <table id="tbAgenda" class="table table-responsive table-hover table-striped table-bordered">
						</table>
                    </div>
                    <div class="box-footer text-center">
                        <button id="btnShowAddForm" class="btn btn-flat btn-success">Add New Event</button>
                    </div>
                </div>
                <div id="formAddEvent" class="box box-info form-hidden">
                    <div class="box-header with-border">
                        Add Agenda
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body form-horizontal">
							<div class="form-group">
                                <label class="col-sm-2 control-label">Bahasa</label>
                                <div class="col-sm-10">
                                    <select id='cbBahasa' class="form-control">
									</select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Judul Agenda</label>
                                <div class="col-sm-10">
                                    <input type="text" id="tbJudulAgenda" class="form-control">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Deskripsi Agenda</label>
                                <div class="col-sm-10">
                                    <textarea id="tbDeskripsiAgenda" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <input type="text" name="tbLokasi" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" name="tbFile" class="form-control" />
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Status Aktif</label>
                                <div class="col-sm-10">
                                    <select id='cbAktif' class="form-control">
										<option value='1'>Aktif</option>
										<option value='0'>Non Aktif</option>
									</select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-center">
                                <button type="button" name="btnAdd" class="btn btn-flat btn-info" onclick='add()'>ADD</button>
                                <button type="button" name="btnCancel" class="btn btn-flat btn-danger" onclick='closeForm()'>Cancel</button>
                            </div>
                        </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Made with love :)
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019 <a href="../assets/index.php">iSTTS</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- REQUIRED JS SCRIPTS -->
    <script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            //$('#tbAgenda').DataTable();
            //$('.datepicker').datepicker();

            $("#btnShowAddForm").click(function () {
                $('#formAddEvent').removeClass("form-hidden");
            });
        });
    </script>
</body>
</html>
<script language='javascript'>
	isicbBahasa();
	isitabelAgenda();
	function closeForm(){
		$('#formAddEvent').addClass("form-hidden");
	}
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
		var file = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');
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
					$("#tbAgenda").html("");
					isitabelAgenda();
				}
			);
		}
		else{
			alert("Bahasa, Judul, Deskripsi, dan Status Aktif harus terisi");
		}
	}
	function deletes(e){
		if(confirm("Anda Yakin ?")==true){
			var ambil = e;
			$.post("response.php",
				{jenis:"DeleteAgenda",nomer:ambil},
				function(result){
					$("#tbAgenda").html("");
					isitabelAgenda();
				}
			);
		}
	}
	function edit(e){
		var ambil = e;
		$.post("response.php",
			{jenis:"EditAgenda",nomer:ambil},
			function(result){
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
				//alert(foto);
				$("#btnAdd").html("SAVE");
				//$('input[type=file]').val(foto);
				$("#tbFile").val(foto);
			}
		);
	}
</script>