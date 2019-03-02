<?php
session_start();
include "login/ceksession.php";
?>
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
     <!-- css table datatables/dataTables -->
     <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css"/>
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
    					Data Kurir 
    				</h1>
    				<ol class="breadcrumb">
    					<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    					<li class="active">Kurir</li>
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
    								<h3 class="box-title">Data Kurir</h3>
    								<div class="box-tools pull-right"></div> 
    							</div><!-- /.box-header -->
    						<div class="box-body">
                <!-- <form action='admin.php' method="POST">
          
	       <input type='text' class="form-control" style="margin-bottom: 4px;" name='qcari' placeholder='Cari berdasarkan User ID dan Username' required /> 
           <input type='submit' value='Cari Data' class="btn btn-sm btn-primary" /> <a href='admin.php' class="btn btn-sm btn-success" >Refresh</i></a>
          	</div>
          </form>-->
          <div class="table">
          	<?php
          	include '../koneksi/koneksi.php';
          	$sql1  		= "SELECT * FROM tb_kurir order by nama_kurir asc";                        
          	$query1  	= mysqli_query($db, $sql1);
          	$total		= mysqli_num_rows($query1);
          	if ($total == 0) {
          		echo"<center><h2>Belum Ada Kurir Terdaftar</h2></center>";
          	}
          	else{?>		

          	<table id="lookup" class="table table-bordered table-hover">  
          		<thead bgcolor="eeeeee" align="center">
          			<tr>
          				<th>id</th>
          				<th>Nama</th>
          				<th>Username</th>
          				<th>Tanggal Lahir</th>
          				<th>Alamat</th>
          				<th>No Hp</th>
          				<th>Rata-Rata Penilaian</th>
          				<th>Orderan</th>
          				<th class="text-center"> Action </th> 	  
          			</tr>
          		</thead>
          		<?php

          		while($data = mysqli_fetch_array($query1)){
          			$sql5  		= "SELECT * FROM tb_transaksi where kurir = '".$data['id_kurir']."' and penilaian <> 0";                        
          			$query5  	= mysqli_query($db, $sql5);
          			$bariss		= mysqli_num_rows($query5);
          			$total_nilai = 0;
          			if ($bariss <> 0){
          				while($data5 = mysqli_fetch_array($query5)){
          					$total_nilai =  $total_nilai + $data5['penilaian'];					
          				}
          				$nilai = $total_nilai / $bariss;
          			}
          		else{
          			$nilai='Belum Ada Penilaian';
          		}
          		echo'<tr>
          		<td>	'. $data['id_kurir'].'   			</td>
          		<td>	'. $data['nama_kurir'].'			</td>
          		<td>	'. $data['username_kurir'].'		</td>
          		<td>	'. $data['tanggal_lahir_kurir'].'  	</td>
          		<td>	'. $data['alamat'].'   				</td>
          		<td>	'. $data['no_hp_kurir'].'			</td>
          		<td>	'. $nilai.'							</td>
          		<td style="text-align:center;">
          		<a href=orderankurir.php?id_kurir='.$data['id_kurir'].'>Lihat Orderan</a></td>
          		<td style="text-align:center;">
          		<a href=detail-kurir.php?id_kurir='.$data['id_kurir'].'>Detail &nbsp|</a>
          		<a href=editkurir.php?id_kurir='.$data['id_kurir'].'>|&nbsp Ubah</a></td>
          		</tr>';
          	}
          	?>

          	<tbody>		 
          	</tbody>
          </table>
          <?php } ?>
      </div>
  </div><!-- /.box-body -->
  <div class="box-footer clearfix no-border">
  	<a href="input-kurir.php" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Tambah Kurir</a>
  </div>
</div><!-- /.box -->

</section><!-- /.Left col -->
</div><!-- /.row (main row) -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php include "footer.php"; ?>

      <!-- Add the sidebar's background. This div must be placed
      	immediately after the control sidebar -->
      	<div class="control-sidebar-bg"></div>
      </div><!-- ./wrapper -->

     <!-- jQuery 2.1.4 -->
     <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
     <!-- Bootstrap 3.3.5 -->
     <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
     <!-- DataTables -->
     <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
     <script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
     <!-- SlimScroll -->
     <script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
     <!-- FastClick -->
     <script src="../assets/plugins/fastclick/fastclick.min.js"></script>
     <!-- AdminLTE App -->
     <script src="../assets/dist/js/app.min.js"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="../assets/dist/js/demo.js"></script>
<script type="text/javascript"> 

            $(function () {
                $("#lookup").dataTable({"lengthMenu":[25,50,75,100],"pageLength":25});
            });
  
   
        </script>
    </body>
</html>