<?php
	session_start();
	include "koneksi/ceksession.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-Kurir</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <!-- Bootstrap Core CSS -->
    <link href="assets/cssa/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/cssa/modern-business.css" rel="stylesheet">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  </head>
  <body>
    <div class="wrapper">
      <?php include "header.php"; ?>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      	<!-- Carousel Indikator -->
        <ol class="carousel-indicators">
        	<li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="carousel-example-generic" data-slide-to="1"></li>
        </ol>
        
        <!-- Wrapper for Slide -->
        <div class="carousel-inner">
        	<div class="item active">
            	<img src="images/kurir.jpg" alt="Slide 1">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
            	<img src="images/Kurir2.jpg" alt="Slide 1">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        
        <!-- Control -->
        <a href="#carousel-example-generic" class="carousel-control left" data-slide="prev" role="button">
        	<span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel-example-generic" class="carousel-control right" data-slide="next" role="button">
        	<span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
       
      

      	<div class="container">
          <div class="row">
          <div class="col-md-6">
          	<div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Tentang Kami</h3>
                </div><!-- /.box-header -->
             	<div class="box-body">
                     
             		<table>
                     <tr>
                        <td>
                         <center> <a href="http://unmul.ac.id/"><img src="images/r.jpg" alt="Universitas Mulawarman"width='170'></a></center><br>
                        </td>
                        <td>
                        <p><strong>e-Kurir</strong> adalah sebuah perusahaan teknologi yang bertujuan untuk meningkatkan kesejahteraan pekerja kurir yang ada di Samarinda. Kami bermitra dengan sekitar 20 kurir yang berpengalaman dan terpercaya di Samarinda, untuk menyediakan berbagai macam layanan, termasuk pesan antar barang. Kegiatan e_kurir meiliki moto yakni : Jemput - Antar - Sampai. Para Kurir mengatakan bahwa pendapatan mereka meningkat semenjak bergabung sebagai mitra, mereka juga mendapatkan santunan kesehatan dan kecelakaan, serta mendapat akses ke lebih banyak pelanggan melalui website kami.</p>
                        </td>

                      </tr>
                      
	
                  </table>	
             	</div>
            </div>
			</div><!-- /.col -->
    
            <div class="col-md-6">
			              
              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab">Jemput</a></li>
                  <li><a href="#tab_2-2" data-toggle="tab">Antar</a></li>
                  <li><a href="#tab_3-2" data-toggle="tab">Sampai</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1-1">
                    <b>Jemput</b><br>
                    <img src="images/kr1.jpg" width="100%">
                    <p>Kurir akan mendatangi alamat dari pelanggan yang melakukan Order secepatnya setelah menerima order.</p>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2-2">
                    <b>Antar</b><br>
                    <img src="images/kr2.jpg" width="100%">
                    <p>Kurir akan mengantarkan barang pesanan anda sesuai dengan alamat tujuan yang tertera.</p>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3-2">
                    <b>Sampai</b><br>
                    <img src="images/kr3.jpg" width="100%">
                    <p>Barang yang telah dikirimkan melalui kurir kami akan sampai sesuai alamat tujuan dan tepat waktu.</p>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
              
              
			</div><!-- /.col -->
    </div> <!-- /.row -->
  </div>
  <?php include "footer.php"; ?>

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
  </body>
</html>
