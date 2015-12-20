<?php 
	session_start();
	include('../layouts/head.php'); 
	include('../includes/includes.php');
	$con = connection();

	$sql="SELECT * FROM penjualan p INNER JOIN nasabah m ON p.noiden_n=m.noiden_n INNER JOIN agen t ON p.id_a=t.id_a";
	$result = mysqli_query($con, $sql);
?>
	
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Lihat Data
				<small> penjualan</small>
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
							<h3 class="box-title">Lihat Data Penjualan</h3>
							<div class="box-tools pull-right">
								<a href="cetakDataPenjualan.php"><button class="btn btn-primary"><i class="fa fa-print"></i> Print Data Penjualan</button></a>
							</div>
						</div>
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No Polis</th>
										<th>Tanggal Penjualan</th>
										<th>No Identitas</th>
										<th>Nama Nasabah</th>
										<th>Jumlah Premi</th>
										<th>Masa Asuransi(/thn)</th>
										<th>ID Agen</th>
										<th>Nama Agen</th>
										<th>Terikat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php while($v = mysqli_fetch_array($result)){?>
									<tr>
										<td><?php echo $v['no_polis']; ?></td>
										<td><?php echo date('d F Y', strtotime($v['tgl_jual'])); ?></td>
										<td><?php echo $v['noiden_n']; ?></td>
										<td><?php echo $v['nama_n']; ?></td>
										<td><?php echo $v['jum_premi']; ?></td>
										<td><?php echo $v['masa_as']; ?></td>
										<td><?php echo $v['id_a']; ?></td>
										<td><?php echo $v['nama_a']; ?></td>
										<td><?php echo $v['tipe']; ?></td>
										<td>
											<a href="editDataPenjualan.php?id=<?php echo $v['no_polis']?>"><button class="btn btn-social-icon btn-success" id="<?php echo $v['no_polis'];?>"><i class="fa fa-edit"></i></button></a>
											<button class="btn btn-social-icon btn-danger deleteDataPenjualan" id="<?php echo $v['no_polis'];?>"><i class="fa fa-trash"></i></button>
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
		$sql = "DELETE FROM penjualan WHERE no_polis=".$_GET['idDelete'];
		$result = mysqli_query($con, $sql);
		if (mysqli_query($con, $sql)) {
			echo "<script>";
			echo "document.location.href='lihatDataPenjualan.php'";
			echo "</script>";
		} else {
			echo "<script>";
			echo "document.location.href='lihatDataPenjualan.php'";
			echo "</script>";
		}	
	}
?>