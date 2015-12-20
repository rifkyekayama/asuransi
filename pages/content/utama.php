<?php 
	session_start();
	include('../layouts/head.php');
	include('../includes/includes.php');
	$con = connection();

	$dataAgen = mysqli_query($con, 'SELECT * FROM agen');
	$jumAgen = mysqli_num_rows($dataAgen);

	$dataNasabah = mysqli_query($con, 'SELECT * FROM nasabah');
	$jumNasabah = mysqli_num_rows($dataNasabah);

	$dataPenjualan = mysqli_query($con, 'SELECT * FROM penjualan');
	$jumPenjualan = mysqli_num_rows($dataPenjualan);
?>
	
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Dashboard
				<small> Sistem</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- Default box -->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title"></h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body center">
							<center>
								<h3><b>SELAMAT DATANG <?php echo '<font color="red">'.strtoupper($_SESSION['nama_adm']).'</font>'; ?> DI SISTEM INFORMASI ASURANSI SEBAGAI <?php echo '<font color="red">'.strtoupper($_SESSION['jabatan_adm']).'</font>';?></b></h3>
							</center>
						</div><!-- /.box-body -->
					</div><!-- /.box -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3><?php echo $jumAgen; ?></h3>
							<p>Jumlah Agen</p>
						</div>
							<div class="icon">
						<i class="fa fa-users"></i>
						</div>
						<a href="lihat_data_latih.php" class="small-box-footer">
							More info <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div><!-- ./col -->
				<div class="col-lg-4 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?php echo $jumNasabah; ?></h3>
							<p>Jumlah Nasabah</p>
						</div>
							<div class="icon">
						<i class="fa fa-user"></i>
						</div>
						<a href="lihat_data_latih.php" class="small-box-footer">
							More info <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3><?php echo $jumPenjualan; ?></h3>
							<p>Jumlah Transaksi</p>
						</div>
							<div class="icon">
						<i class="fa fa-money"></i>
						</div>
						<a href="lihat_data_latih.php" class="small-box-footer">
							More info <i class="fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div><!-- ./col -->
			</div>
		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->

<?php include('../layouts/footer.php'); ?>