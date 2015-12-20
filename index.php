<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AdminLTE 2 | Log in</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.4 -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link href="assets/plugins/Font-Awesome-master/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="assets/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="#"><b>Sistem Informasi</b> Asuransi</a>
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<p class="login-box-msg">Sign in to start your session</p>
				<form action="index.php" method="post">
					<div class="form-group has-feedback">
						<input type="text" name="id_adm" class="form-control" placeholder="Email"/>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" name="password_adm" class="form-control" placeholder="Password"/>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
						</div><!-- /.col -->
					</div>
				</form>
			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->

		<!-- jQuery 2.1.4 -->
		<script src="assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.2 JS -->
		<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>

<?php
	session_start();
	include('pages/includes/includes.php');
	$conn = connection();

	if(isset($_POST['submit'])){
		$id_adm=$_POST['id_adm'];
		$password_adm=$_POST['password_adm'];
		
		if($id_adm==""){
			echo "<script>alert('Log In Gagal NIP belum diisi');";
			echo "document.location.href='index.php'";
			echo "</script>";
		}
		else
		if($password_adm==""){
			echo "<script>alert('Log In Gagal' Password belum diisi);";
			echo "document.location.href='index.php'";
			echo "</script>";
		}		
		$sql = "SELECT * FROM admin WHERE id_adm='$id_adm' and password_adm='$password_adm'";

		$hasil=mysqli_query($conn,$sql);
		$row=mysqli_num_rows($hasil);

		if($row==1){
			$v = mysqli_fetch_array($hasil);
			$_SESSION['id_adm'] = $v['id_adm'];
			$_SESSION['nama_adm'] = $v['nama_adm'];
			$_SESSION['jabatan_adm'] = $v['jabatan_adm'];
			header('location:pages/content/utama.php');
		}else	
		{	
			echo "<script>alert('Log In Gagal NIP dan Password tidak sesuai');";
			echo "document.location.href='index.php'";
			echo "</script>";
		}
	}
?>