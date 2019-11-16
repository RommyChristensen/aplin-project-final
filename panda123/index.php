<?php
	session_start();
	require_once("../helpers/koneksi.php");
	if(isset($_GET['mode'])){
		if($_GET['mode']==0){
			unset($_SESSION['adminLogin']);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../assets/css/style2.css" rel="stylesheet">
</head>
<body style='width:50%;margin:auto;margin-top:10%;'>

<!-- HAI MONICA!!, YOUR CODE GOES DOWN HERE -->

    <p class="h4 mb-4">LOGIN</p>
    <!-- Email -->
    <input type="text" name='tbUsername' id="tbUsername" class="form-control mb-4" placeholder="Username">

    <!-- Password -->
    <input type="password" name='tbPassword' id="tbPassword" class="form-control mb-4" placeholder="Password">
    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="button" id='btnLogin' onclick='login()'>LOGIN</button>

<!-- HAPPY CODING!!! KEEP FIGHTING!!! -->
    
</body>
</html>
<script language='javascript'>
	function login(){
		var username=$("#tbUsername").val();
		var password=$("#tbPassword").val();
		if(username=="admin" && password=="admin"){
			$.post("response.php",
				{jenis:"login"},
				function(result){
					if(result=="Sukses"){
						window.location="adminsite.php";
					}
				}
			);
		}
		else{
			alert("Username & password salah");
		}
	}
</script>