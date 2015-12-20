<?php 
	session_start();
	include('../layouts/head.php'); 
	include('../includes/includes.php');
	$con = connection();

	$sql = "SELECT * FROM nasabah ORDER BY noiden_n DESC";
	$result = mysqli_query($con, $sql);
?>
	
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Lihat Data
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
							<h3 class="box-title">Lihat Data Nasabah</h3>
							<div class="box-tools pull-right">
								<a href="cetakDataNasabah.php"><button class="btn btn-primary"><i class="fa fa-print"></i> Print Data Nasabah</button></a>
							</div>
						</div>
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No Identitas</th>
										<th>Nama</th>
										<th>Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>Pekerjaan</th>
										<th>Penghasilan (/bulan)</th>
										<th>Telp</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php while($v = mysqli_fetch_array($result)){?>
									<tr>
										<td><?php echo $v['noiden_n']; ?></td>
										<td><?php echo $v['nama_n']; ?></td>
										<td><?php echo date('d F Y', strtotime($v['tgllahir_n'])); ?></td>
										<td><?php echo $v['jkl_n']; ?></td>
										<td><?php echo $v['pek_n']; ?></td>
										<td><?php echo $v['peng_n']; ?></td>
										<td><?php echo $v['telp_n']; ?></td>
										<td>
											<button class="btn btn-social-icon btn-primary btnShowDataNasabah" id="<?php echo $v['noiden_n'];?>"><i class="fa fa-eye"></i></button>
											<a href="editDataNasabah.php?id=<?php echo $v['noiden_n']?>"><button class="btn btn-social-icon btn-success" id="<?php echo $v['noiden_n'];?>"><i class="fa fa-edit"></i></button></a>
											<button class="btn btn-social-icon btn-danger deleteDataNasabah" id="<?php echo $v['noiden_n'];?>"><i class="fa fa-trash"></i></button>
										</td>
									</tr>
									<?php }?>
								</tbody>
							</table>
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
	if(isset($_GET['idDelete'])){
		$sql = "DELETE FROM nasabah WHERE noiden_n=".$_GET['idDelete'];
		$result = mysqli_query($con, $sql);
		if (mysqli_query($con, $sql)) {
			echo "<script>";
			echo "document.location.href='lihatDataNasabah.php'";
			echo "</script>";
		} else {
			echo "<script>";
			echo "document.location.href='lihatDataNasabah.php'";
			echo "</script>";
		}	
	}
?>