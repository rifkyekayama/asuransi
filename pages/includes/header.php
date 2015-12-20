<header class="main-header">
	<!-- Logo -->
	<a href="#" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>S</b> I</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>SIM</b> Asuransi</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../../assets/dist/img/avatar5.png" class="user-image" alt="User Image"/>
						<span class="hidden-xs"><?php echo $_SESSION['nama_adm']; ?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="../../assets/dist/img/avatar5.png" class="img-circle" alt="User Image" />
							<p>
								<?php echo $_SESSION['nama_adm'].' - '.$_SESSION['id_adm']; ?>
								<small><?php echo $_SESSION['jabatan_adm']; ?></small>
							</p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<a href="aksi/_logout.php" class="btn btn-default btn-flat">Sign out</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>