<?php 
	session_start();
	include('../layouts/head.php'); 
	include('../includes/includes.php');
	$con = connection();

	$sql = "SELECT * FROM nasabah WHERE noiden_n=".$_GET['id'];
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_array($result);
?>
	
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Edit Data
				<small> Nasabah</small>
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
							<form action="editDataNasabah.php" method="POST" id="formDataNasabah">
								<div class="box-body">
									<div class="form-group">
										<label for="ni">No Identitas</label>
										<input type="number" name="ni" id="ni" class="form-control" value="<?php echo $data['noiden_n']; ?>" readonly>
									</div>
									<div class="form-group">
										<label for="n">Nama</label>
										<input type="text" name="n" id="n" class="form-control" value="<?php echo $data['nama_n']; ?>">
									</div>
									<div class="form-group">
										<label for="nik">Nama Ibu Kandung</label>
										<input type="text" name="nik" id="nik" class="form-control" value="<?php echo $data['namaibukan_n']; ?>">
									</div>
									<div class="form-group">
										<label>Bukti Identitas</label>
										<select class="form-control" name="bi" required>
											<option value="default" selected>-- Pilih Bukti Identitas --</option>
											<option value="KTP" <?php echo($data['bukiden_n'] == 'KTP' ? 'selected' : '');?> >KTP</option>
											<option value="SIM" <?php echo($data['bukiden_n'] == 'KTP' ? 'selected' : '');?> >SIM</option>
										</select>
									</div>
									<div class="form-group">
										<label for="t">Tempat Lahir</label>
										<input type="text" name="t" id="t" class="form-control" value="<?php echo $data['temlah_n']; ?>">
									</div>
									<div class="form-group">
										<label for="tgl">Tanggal Lahir</label>
										<input type="text" name="tgl" id="tgl" class="form-control tglLahir" value="<?php echo date('d F Y', strtotime($data['tgllahir_n'])); ?>">
									</div>
									<div class="form-group">
										<label for="jkl">Jenis Kelamin</label><br>
										<input type="radio" name="jkl" id="optionsRadios1" value="Laki-laki" <?php echo($data['jkl_n'] == 'Laki-laki' ? 'checked' : '');?> > Laki-laki<br>
										<input type="radio" name="jkl" id="optionsRadios1" value="Perempuan" <?php echo($data['jkl_n'] == 'Perempuan' ? 'checked' : '');?> > Perempuan</input>	<br>
									</div>
									<div class="form-group">
										<label>Pekerjaan</label>
										<select class="form-control" name="p" required>
											<option value="default" selected>-- Pilih Pekerjaan --</option>
											<option value="PNS" <?php echo($data['pek_n'] == 'PNS' ? 'selected' : '');?> >PNS</option>
											<option value="Pegawai Swasta" <?php echo($data['pek_n'] == 'Pegawai Swasta' ? 'selected' : '');?> >Pegawai Swasta</option>
											<option value="POLRI/TNIi" <?php echo($data['pek_n'] == 'POLRI/TNIi' ? 'selected' : '');?> >POLRI/TNI</option>
											<option value="Wiraswasta" <?php echo($data['pek_n'] == 'Wiraswasta' ? 'selected' : '');?> >Wiraswasta</option>
											<option value="Belum Bekerja" <?php echo($data['pek_n'] == 'Belum Bekerja' ? 'selected' : '');?> >Belum Bekerja</option>
											<option value="Lainnya---" <?php echo($data['pek_n'] == 'Lainnya---' ? 'selected' : '');?> >Lainnya---</option>
										</select>
									</div>
									<div class="form-group">
										<label>Penghasilan Perbulan</label>
										<select class="form-control" name="pp" required>
											<option value="default" selected>-- Pilih Penghasilan Perbulan --</option>
											<option value="Kurang dari 500.000" <?php echo($data['peng_n'] == 'Kurang dari 500.000' ? 'selected' : '');?> >Kurang dari 500.000</option>
											<option value="500.000-1.400.000" <?php echo($data['peng_n'] == '500.000-1.400.000' ? 'selected' : '');?> >500.000-1.400.000</option>
											<option value="1.500.000-2.400.000" <?php echo($data['peng_n'] == '1.500.000-2.400.000' ? 'selected' : '');?> >1.500.000-2.400.000</option>
											<option value="2.500.000-4.400.000" <?php echo($data['peng_n'] == '2.500.000-4.400.000' ? 'selected' : '');?> >2.500.000-4.400.000</option>
											<option value="4.500.000-8.400.000" <?php echo($data['peng_n'] == '4.500.000-8.400.000' ? 'selected' : '');?> >4.500.000-8.400.000</option>
											<option value="8.500.000-16.400.000" <?php echo($data['peng_n'] == '8.500.000-16.400.000' ? 'selected' : '');?> >8.500.000-16.400.000</option>
											<option value="Lebih dari 16.400.000" <?php echo($data['peng_n'] == 'Lebih dari 16.400.000' ? 'selected' : '');?> >Lebih dari 16.400.000</option>
										</select>
									</div>
									<div class="form-group">
										<label for="a">Alamat</label>
										<textarea class="form-control" name="a" id="a" rows="3" placeholder="Alamat ..."><?php echo $data['almt_n']; ?></textarea>
									</div>
									<div class="form-group">
										<label for="telp">Telp/ No HP</label>
										<input type="number" name="telp" id="telp" class="form-control" value="<?php echo $data['telp_n']; ?>">
									</div>
									<div class="form-group">
										<label for="aw">Ahli Waris</label>
										<input type="text" name="aw" id="aw" class="form-control" value="<?php echo $data['ahwar_n']; ?>">
									</div>
								</div><!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" name="submitDataNasabah" id="submitDataNasabah" class="btn btn-primary" value="default">Submit</button>
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

	if(isset($_POST['submitDataNasabah'])){
		$ni  = $_POST['ni'];
		$n  = $_POST['n'];
		$nik   = $_POST['nik'];
		$bi  = $_POST['bi'];
		$t   = $_POST['t'];
		$tgl = date('Y-m-d', strtotime($_POST['tgl']));

		$jkl  = $_POST['jkl'];
		$p = $_POST['p'];
		$pp = $_POST['pp'];
		$a = $_POST['a'];
		$telp = $_POST['telp'];
		$aw = $_POST['aw'];

		$sql = "UPDATE nasabah SET nama_n='$n',namaibukan_n='$nik',bukiden_n='$bi',temlah_n='$t',tgllahir_n='$tgl',jkl_n='$jkl',pek_n='$p',peng_n='$pp',almt_n='$a',telp_n='$telp',ahwar_n='$aw' WHERE noiden_n='$ni'";

		if (mysqli_query($con, $sql)) {
			echo "<script>alert('Data Berhasil Disimpan');";
			echo "document.location.href='lihatDataNasabah.php'";
			echo "</script>";
		} else {
			echo "<script>alert('Data Gagal Disimpan');";
			echo "document.location.href='lihatDataNasabah.php'";
			echo "</script>";
		}
	}
?>