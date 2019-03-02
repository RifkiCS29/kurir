<?php 
include '../koneksi/koneksi.php';
$sql  		= "SELECT * FROM tb_admin where id_admin='".$_SESSION['id']."'";                        
$query  	= mysqli_query($db, $sql);
$data 		= mysqli_fetch_array($query);
?>
<header class="main-header">
	<!-- Logo -->
	<a href="index.php" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>e</b>Kurir</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>Aplikasi</b> e-Kurir</span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/<?php echo $data['gambar']; ?>" class="user-image" style="border: 1px solid white;" alt="User Image">
						<span class="hidden-xs"><?php echo $_SESSION['nama'];?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="images/<?php echo $data['gambar']; ?>" class="img-circle" alt="User Image">
							<p>
								<?php echo $_SESSION['nama']; ?>
								
							</p>
						</li>
						
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="detail-admin.php" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="../koneksi/proses_logout.php" class="btn btn-default btn-flat" onclick="return confirm ('Apakah Anda Akan Keluar.?');"> Keluar </a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-spin fa-gear"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</header>