<?php 
	session_start(); 
	include "ceksession.php";?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-Kurir</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../assets/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../assets/plugins/iCheck/square/blue.css">
  </head>
  
  <body class="hold-transition register-page">
    <div class="register-box">
      <?php include "header.php"; ?>
      <br><br>
      <div class="register-box-body">
        <p class="login-box-msg">Daftar Pelanggan Baru</p>

        <form action="proses_daftar.php" method="post" enctype="multipart/form-data">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama Lengkap" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username_pelanggan" placeholder="Username" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group ">
            <input type="date" class="form-control" name="tanggal_lahir" data-date-format="dd-mm-yyyy" placeholder="Tanggal Lahir" required>
          </div>
          <div class="form-group has-feedback">
            <textarea class="form-control" name="alamat_pelanggan" placeholder="Alamat"></textarea>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="no_hp_pelanggan" placeholder="No Handphone" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
          </div>
          <div class="form-group">
            <label for="inputGambar">Foto Profil</label>
            <input type="file" accept="image/png,image/jpeg,image/jpg" id="inputGambar" name="gambar" required>*max 2mb
          </div>

          <div class="row">
            <div class="col-xs-8">
              <a href="../login" class="text-center">Sudah Punya Akun ? Login !</a>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.form-box -->
    </div>

    <?php include "footer.php"; ?>
    <br>
    

    <!-- jQuery 2.1.4 -->
    <script src="../../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../assets/plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
    });
  </script>
</body>
</html>
