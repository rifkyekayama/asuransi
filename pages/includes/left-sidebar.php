<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="../../assets/dist/img/avatar5.png" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p><?php echo $_SESSION['nama_adm']; ?></p>

				<a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['jabatan_adm']; ?></a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
				<span class="input-group-btn">
					<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li class="<?php echo ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/utama.php') ? 'active' : '';?>"><a href="<?php echo ($_SERVER['REQUEST_URI'] != '/asuransi/pages/content/utama.php') ? $link = 'utama.php' : '#';?>"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
			<li class="treeview <?php echo (($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/inputDataNasabah.php') || ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/lihatDataNasabah.php')) ? 'active' : '';?>">
				<a href="#">
					<i class="fa fa-book"></i> <span>Nasabah</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/inputDataNasabah.php') ? 'active' : '';?>"><a href="<?php echo ($_SERVER['REQUEST_URI'] != '/asuransi/pages/content/inputDataNasabah.php') ? 'inputDataNasabah.php' : '#';?>"><i class="fa fa-circle-o"></i> Input Data Nasabah</a></li>
					<li class="<?php echo ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/lihatDataNasabah.php') ? 'active' : '';?>"><a href="<?php echo ($_SERVER['REQUEST_URI'] != '/asuransi/pages/content/lihatDataNasabah.php') ? 'lihatDataNasabah.php' : '#';?>"><i class="fa fa-circle-o"></i> Daftar Data Nasabah</a></li>
				</ul>
			</li>
			<li class="treeview <?php echo (($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/inputDataAgen.php') || ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/lihatDataAgen.php')) ? 'active' : '';?>">
				<a href="#">
					<i class="fa fa-book"></i> <span>Agen</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/inputDataAgen.php') ? 'active' : '';?>"><a href="<?php echo ($_SERVER['REQUEST_URI'] != '/asuransi/pages/content/inputDataAgen.php') ? 'inputDataAgen.php' : '#';?>"><i class="fa fa-circle-o"></i> Input Data Agen</a></li>
					<li class="<?php echo ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/lihatDataAgen.php') ? 'active' : '';?>"><a href="<?php echo ($_SERVER['REQUEST_URI'] != '/asuransi/pages/content/lihatDataAgen.php') ? 'lihatDataAgen.php' : '#';?>"><i class="fa fa-circle-o"></i> Daftar Data Agen</a></li>
				</ul>
			</li>
			<li class="treeview <?php echo (($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/inputDataPenjualan.php') || ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/lihatDataPenjualan.php')) ? 'active' : '';?>">
				<a href="#">
					<i class="fa fa-book"></i> <span>Penjualan</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/inputDataPenjualan.php') ? 'active' : '';?>"><a href="<?php echo ($_SERVER['REQUEST_URI'] != '/asuransi/pages/content/inputDataPenjualan.php') ? 'inputDataPenjualan.php' : '#';?>"><i class="fa fa-circle-o"></i> Input Data Penjualan</a></li>
					<li class="<?php echo ($_SERVER['REQUEST_URI'] == '/asuransi/pages/content/lihatDataPenjualan.php') ? 'active' : '';?>"><a href="<?php echo ($_SERVER['REQUEST_URI'] != '/asuransi/pages/content/lihatDataPenjualan.php') ? 'lihatDataPenjualan.php' : '#';?>"><i class="fa fa-circle-o"></i> Daftar Data Penjualan</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>