<?php 
	session_start();
	include('../layouts/head.php'); 
	include('../includes/includes.php');
	$con = connection();
?>
	
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Input Data
				<small> Penjualan</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Examples</a></li>
				<li class="active">Blank page</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- Default box -->
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Input Data Nasabah</h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body">
							<form action="inputDataPenjualan.php" method="POST" id="formDataPenjualan">
								<div class="box-body">
									<div class="form-group">
										<label for="tgl">Tanggal Penjualan</label>
										<input type="text" name="tgl" id="tgl" class="form-control tglLahir" required>
									</div>
									<div class="form-group">
										<label for="ni">No Identitas</label>
										<select class="form-control" name="ni" required>
											<option value="default" selected>-- Pilih No Identitas --</option>
											<?php
												$sql = mysqli_query($con, "SELECT * FROM nasabah ORDER BY noiden_n ASC");
												if(mysqli_num_rows($sql) != 0){
													while($data = mysqli_fetch_array($sql)){
														echo '<option>'.$data['noiden_n'].'</option>';
													}
												}
											?>
										</select>
									</div>
									<div class="form-group">
										<label for="jp">Jumlah Premi</label>
										<input type="number" name="jp" id="jp" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="ma">Masa Asuransi</label>
										<input type="text" name="ma" id="ma" width="2" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="ia">ID Agen</label>
										<select class="form-control" name="ia" required>
											<option value="default" selected>-- Pilih ID Agen --</option>
											<?php
												$sql = mysqli_query($con, "SELECT * FROM agen ORDER BY id_a ASC");
												if(mysqli_num_rows($sql) != 0){
													while($data = mysqli_fetch_array($sql)){
														echo '<option>'.$data['id_a'].'</option>';
													}
												}
											?>
										</select>
									</div>
									<div class="form-group">
										<label>Tipe</label>
										<select class="form-control" name="t" required>
											<option value="default" selected>-- Pilih Tipe --</option>
											<option value="Terikat">Terikat</option>
											<option value="Tidak Terikat">Tidak Terikat</option>
										</select>
									</div>
								</div><!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="submitDataPenjualan" id="submitDataPenjualan" class="btn btn-primary" value="default">Submit</button>
								</div><!-- /.box-footer-->
							</form>
						</div><!-- /.box-body -->
						<div class="box-footer">
							
						</div><!-- /.box-footer-->
					</div><!-- /.box -->
				</div>
			</div>
		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->

<?php 
	include('../layouts/footer.php');

	if(isset($_POST['submitDataPenjualan'])){
		$tgl  = date('Y-m-d', strtotime($_POST['tgl']));
		$ni  = $_POST['ni'];
		$jp  = $_POST['jp'];
		$ma   = $_POST['ma'];
		$ia = $_POST['ia'];

		$t  = $_POST['t'];

		$sql = "INSERT INTO penjualan (tgl_jual,noiden_n,jum_premi,masa_as,id_a, tipe) VALUES ('$tgl','$ni','$jp','$ma','$ia','$t')";

		if (mysqli_query($con, $sql)) {
			echo "<script>alert('Data Berhasil Disimpan');";
			echo "document.location.href='lihatDataPenjualan.php'";
			echo "</script>";
		} else {
			echo "<script>alert('Data Gagal Disimpan');";
			echo "document.location.href='lihatDataPenjualan.php'";
			echo "</script>";
		}
	}
?>