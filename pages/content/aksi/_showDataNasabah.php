<?php
	include('../../includes/includes.php');
	$con = connection();

	$sql = "SELECT * FROM nasabah WHERE noiden_n=".$_GET['id'];
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_array($result);
?>
<div class="row">
	<div class="col-md-3"><p>No Identitas</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['noiden_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Nama</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['nama_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Nama Ibu Kandung</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['namaibukan_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Bukti Identitas</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['bukiden_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Tempat Lahir</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['temlah_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Tanggal Lahir</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo date('d F Y', strtotime($data['tgllahir_n'])); ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Jenis Kelamin</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['jkl_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Pekerjaan</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['pek_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Penghasilan Perbulan</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['peng_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Alamat</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['almt_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Telp/ No HP</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['telp_n']; ?></p></div>
</div>
<div class="row">
	<div class="col-md-3"><p>Ahli Waris</p></div>
	<div class="col-md-1">:</div>
	<div class="col-md-8"><p><?php echo $data['ahwar_n']; ?></p></div>
</div>