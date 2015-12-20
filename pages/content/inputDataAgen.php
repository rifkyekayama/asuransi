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
				Edit Data
				<small> Agen</small>
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
							<h3 class="box-title">Edit Data Agen</h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body">
							<form action="inputDataAgen.php" method="POST" id="formDataNasabah">
								<div class="box-body">
									<div class="form-group">
										<label for="ia">ID Agen</label>
										<input type="number" name="ia" id="ia" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="n">Nama</label>
										<input type="text" name="n" id="n" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="t">Tempat Lahir</label>
										<input type="text" name="t" id="t" class="form-control" required>
									</div>
									<div class="form-group">
										<label for="tgl">Tanggal Lahir</label>
										<input type="text" name="tgl" id="tgl" class="form-control tglLahir" required>
									</div>
									<div class="form-group">
										<label for="a">Alamat</label>
										<textarea class="form-control" name="a" id="a" rows="3" placeholder="Alamat ..."></textarea>
									</div>
									<div class="form-group">
										<label for="jkl">Jenis Kelamin</label><br>
										<input type="radio" name="jkl" id="optionsRadios1" value="Laki-laki"> Laki-laki<br>
										<input type="radio" name="jkl" id="optionsRadios1" value="Perempuan"> Perempuan</input>	<br>
									</div>
									<div class="form-group">
										<label>Status</label>
										<select class="form-control" name="s" required>
											<option value="default" selected>-- Pilih Pekerjaan --</option>
											<option value="Menikah" >Menikah</option>
											<option value="Belum Menikah"  >Belum Menikah</option>
											<option value="POLRI/TNIi"  >POLRI/TNI</option>
										</select>
									</div>
									<div class="form-group">
										<label>Pendidikan</label>
										<select class="form-control" name="p" required>
											<option value="default" selected>-- Pilih Penghasilan Perbulan --</option>
											<option value="SD" >SD</option>
											<option value="SMP">SMP</option>
											<option value="SMA/Sederajat">SMA/Sederajat</option>
											<option value="S1">S1</option>
											<option value="S2" >S2</option>
											<option value="S3" >S3</option>
										</select>
									</div>
									<div class="form-group">
										<label for="telp">Telp/ No HP</label>
										<input type="number" name="telp" id="telp" class="form-control" required>
									</div>
								</div><!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="submitDataAgen" id="submitDataAgen" class="btn btn-primary" value="default">Submit</button>
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

	if(isset($_POST['submitDataAgen'])){
		$ia  = $_POST['ia'];
		$n  = $_POST['n'];

		$t   = $_POST['t'];
		$tgl  = date('Y-m-d', strtotime($_POST['tgl']));

		$a   = $_POST['a'];

		$jkl = $_POST['jkl'];

		$s  = $_POST['s'];
		$p = $_POST['p'];

		$telp = $_POST['telp'];

		$sql = "INSERT INTO agen (nama_a,temlah_a,tgllahir_a,almt_a,jkl_a, stat_a,pend_a,telp_a) 
		VALUES ('$n','$t','$tgl','$a','$jkl','$s','$p','$telp')";

		if (mysqli_query($con, $sql)) {
			echo "<script>alert('Data Berhasil Disimpan');";
			echo "document.location.href='lihatDataAgen.php'";
			echo "</script>";
		} else {
			echo "<script>alert('Data Gagal Disimpan');";
			echo "document.location.href='lihatDataAgen.php'";
			echo "</script>";
		}

	}
?>