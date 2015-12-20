<?php 
	session_start();
	include('../layouts/head.php'); 
	include('../includes/includes.php');
	$con = connection();

	$sql = "SELECT * FROM penjualan where no_polis =".$_GET['id'];
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_array($result);
?>
	
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Edit Data
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
							<h3 class="box-title">Edit Data Nasabah</h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body">
							<form action="editDataPenjualan.php" method="POST" id="formDataPenjualan">
								<div class="box-body">
									<div class="form-group">
										<label for="np">No Polis</label>
										<input type="text" name="np" id="np" class="form-control" value="<?php echo $data['no_polis']; ?>" required>
									</div>
									<div class="form-group">
										<label for="tgl">Tanggal Penjualan</label>
										<input type="text" name="tgl" id="tgl" class="form-control tglLahir" value="<?php echo date('Y-m-d', strtotime($data['tgl_jual'])); ?>" required>
									</div>
									<div class="form-group">
										<label for="ni">No Identitas</label>
										<select class="form-control" name="ni" required>
											<option value="default">-- Pilih No Identitas --</option>
											<?php
												$sql = mysqli_query($con, "SELECT * FROM nasabah ORDER BY noiden_n ASC");
												if(mysqli_num_rows($sql) != 0){
													while($v = mysqli_fetch_array($sql)){ ?>
														<option <?php echo($data["noiden_n"] == $v["noiden_n"] ? 'selected' : '') ?> ><?php echo $v['noiden_n'] ?></option>
													<?php }
												}
											?>
										</select>
									</div>
									<div class="form-group">
										<label for="jp">Jumlah Premi</label>
										<input type="number" name="jp" id="jp" class="form-control" value="<?php echo $data['jum_premi']; ?>" required>
									</div>
									<div class="form-group">
										<label for="ma">Masa Asuransi</label>
										<input type="text" name="ma" id="ma" width="2" class="form-control" value="<?php echo $data['masa_as']; ?>" required>
									</div>
									<div class="form-group">
										<label for="ia">ID Agen</label>
										<select class="form-control" name="ia" required>
											<option value="default">-- Pilih ID Agen --</option>
											<?php
												$sql = mysqli_query($con, "SELECT * FROM agen ORDER BY id_a ASC");
												if(mysqli_num_rows($sql) != 0){
													while($v = mysqli_fetch_array($sql)){ ?>
														<option <?php echo($data["id_a"] == $v["id_a"] ? 'selected' : '') ?> ><?php echo $data['id_a'] ?></option>
													<?php }
												}
											?>
										</select>
									</div>
									<div class="form-group">
										<label>Tipe</label>
										<select class="form-control" name="t" required>
											<option value="default">-- Pilih Tipe --</option>
											<option value="Terikat" <?php echo($data['tipe'] == 'Terikat' ? 'selected' : ''); ?> >Terikat</option>
											<option value="Tidak Terikat" <?php echo($data['tipe'] == 'Tidak Terikat' ? 'selected' : ''); ?> >Tidak Terikat</option>
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
		$np  = $_POST['np'];
		$tgl  = date('Y-m-d', strtotime($_POST['tgl']));
		$ni  = $_POST['ni'];
		$jp  = $_POST['jp'];
		$ma   = $_POST['ma'];
		$ia = $_POST['ia'];

		$t  = $_POST['t'];

		$sql = "UPDATE penjualan SET tgl_jual='$tgl',noiden_n='$ni',jum_premi='$jp',masa_as='$ma',id_a='$ia',tipe='$t' WHERE no_polis='$np'";

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