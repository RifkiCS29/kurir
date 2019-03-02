<?php 
	session_start(); 
	include "login/ceksession.php";?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-kurir</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php include "header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu.php"; ?>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Detail Order
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Detail Oder</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Detail Data Order Terkirim</h3>
                  <!-- <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-panel">
                    <table id="example" class="table table-hover table-bordered">
                     <?php include '../koneksi/koneksi.php';
                     $no_transaksi= $_GET['no_transaksi'];
                     $sql  		= "SELECT * FROM tb_transaksi inner join tb_kurir on tb_transaksi.kurir = tb_kurir.id_kurir where no_transaksi='".$no_transaksi."'";                        
                     $query  	= mysqli_query($db, $sql);
                     $data 		= mysqli_fetch_array($query);?>
                     <tr>
                      <td>No Order</td>
                      <td><?php echo $data['no_transaksi'];?></td>
                    </tr>
                    <tr>
                      <td>Nama Barang</td></td>
                      <td><?php echo $data['nama_barang'];?></td>
                    </tr>
                    <tr>
                      <td width="250">Alamat Asal</td>
                      <td><?php echo $data['alamat_asal'];?></td>
                    </tr>
                    <tr>
                      <td>Alamat Tujuan</td>
                      <td><?php echo $data['alamat_tujuan'];?></td>
                    </tr>
                    <tr>
                      <td>Penerima</td>
                      <td><?php echo $data['penerima'];?></td>
                    </tr>                      
                    <tr>
                      <td>Berat Barang</td></td>
                      <td><?php echo $data['berat_barang'];?>&nbsp kg</td>
                    </tr>
                    <tr>
                      <td>Biaya</td></td>
                      <td>Rp &nbsp<?php echo $data['biaya'];?></td>
                    </tr>
                    <tr>
                      <td>No Hp Penerima</td></td>
                      <td><?php echo $data['no_hp_penerima'];?></td>
                    </tr>
                    <tr>
                      <td>Kurir</td></td>
                      <td><?php echo $data['nama_kurir'];?></td>
                    </tr>
                    <tr>
                      <td>No HP Kurir</td></td>
                      <td><?php echo $data['no_hp_kurir'];?></td>
                    </tr>
                    <tr>
                      <td>Status</td></td>
                      <td><?php echo $data['status'];?></td>
                    </tr>
                    <tr>
                      <td>Waktu</td></td>
                      <td><?php echo $data['waktu'];?></td>
                    </tr>
                    <tr>
                      <td>Penilaian</td></td>
                      <td><?php if($data['penilaian'] == 0){echo"Belum Ada Penilaian";} else{ echo $data['penilaian'];}?></td>
                    </tr>
                    <tr>
                      <td>Komentar</td></td>
                      <td><?php if($data['komentar'] == ''){echo"Belum Ada Komentar";} else{ echo $data['komentar'];}?></td>
                    </tr>
                  </table>
                  <div class="text-right">
                    <a href="orderterkirim.php" class="btn btn-sm btn-warning">Kembali <i class="fa fa-arrow-circle-right"></i></a>
                    
                  </div>
                </div>
              </div><!-- /.box-body -->
                <!-- <div class="box-footer clearfix no-border">
                  <a href="#" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Tambah Admin</a>
                </div> -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "footer.php"; ?>

      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="../assets/plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../assets/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../assets/plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/dist/js/app.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../assets/dist/js/demo.js"></script>
  
</body>
</html>
