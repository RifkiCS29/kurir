<?php 
	 include '../koneksi/koneksi.php';
			$sql  		= "SELECT * FROM tb_admin where id_admin='".$_SESSION['id']."'";                        
			$query  	= mysqli_query($db, $sql);
			$data 		= mysqli_fetch_array($query);
?>
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="images/<?php echo $data['gambar']; ?>" height="200" width="200" style="border: 2px solid white;" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['nama'];?></p>
              <a href="index.php"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div><br />
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li class="active treeview">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>Kurir</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="datakurir.php"><i class="fa fa-circle-o"></i>Data Kurir</a></li>
                <li><a href="input-kurir.php"><i class="fa fa-circle-o"></i>Tambah Kurir</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-users"></i> <span>Pelanggan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="datapelanggan.php"><i class="fa fa-circle-o"></i>Data Pelanggan</a></li>
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-file"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="datatransaksibelumterkirim.php"><i class="fa fa-circle-o"></i>Transaksi Belum Terkirim</a></li>
                <li><a href="datatransaksiterkirim.php"><i class="fa fa-circle-o"></i>Transaksi Terkirim</a></li>
              </ul>
            </li>
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>-->
        </section>
        <!-- /.sidebar -->
</aside>