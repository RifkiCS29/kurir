<?php 
	session_start(); 
	include "login/ceksession.php";?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-Kurir</title>
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
            Input Order
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Penilaian</li>
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
                  <h3 class="box-title">Input Penilaian</h3>
                  <div class="box-tools pull-right">
                  </div> 
                </div><!-- /.box-header -->
                
                <div class="box-body">
                  <form class="form-horizontal style-form" action="proses/proses_penilaian.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                   <input type='hidden' name="no_transaksi" value="<?php echo $_GET['no_transaksi'];?>">
                   <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nilai</label>
                    <div class="col-sm-4">
                      <input name="nilai" onkeyup="operasi()" type="number" min=1 max=100 id="nilai" class="form-control" placeholder="Masukkan angka 1 - 100" autocomplete="off" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Komentar</label>
                    <div class="col-sm-4">
                      <textarea name="komentar" class="form-control" placeholder="Masukkan Komentar" autocomplete="off" required /></textarea>
                    </div>
                  </div>                          
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <input type="submit" onclick="return confirm ('Beri Penilaian?');" name="input" value="Input" class="btn btn-sm btn-primary" />&nbsp;
                      <a href="dataorder.php" class="btn btn-sm btn-danger">Batal</a>
                    </div> 
                  </div>
                </form>
              </div><!-- /.box-body -->
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
     <!-- jQuery UI 1.11.4 -->
     <script src="../assets/css/jquery-ui.min.js"></script>
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
   <script>
	//options method for call datepicker
	$(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
	function operasi(){
		var nilai = document.getElementById("nilai").value;
		if (nilai > 100){
			document.getElementById("nilai").value = 100;
		}
		else if (nilai < 1){
			document.getElementById("nilai").value = 1;
		}
	}
</script>
</body>
</html>
