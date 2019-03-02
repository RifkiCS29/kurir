<?php 
	session_start(); 
	include "ceksessionn.php";?>
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
  <body class="hold-transition">
   <?php include "header.php"; ?>
   <div class="login-box">
    <div class="login-box-body">
      <p class="login-box-msg">Login Pelanggan</p>
      <form action="proses_login.php" id="login" name="login" method="post">
        <div class="form-group has-feedback">
          <input type="text" id="username" name="username" class="form-control" autocomplete="off" placeholder="Username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="password" name="password" class="form-control" autocomplete="off" placeholder="Password" required="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div><!-- /.col -->
        </div>
      </form>
      <a href="../daftar"><span class="glyphicon glyphicon-user"></span>Belum Punya Akun ? Daftar !</a>

      <center><h5 class="form-signin">Copyright &copy; <a href="#" data-toggle="modal" data-target="#contact">Ilmu Komputer</a> 2017</h5></center> 

    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  
  

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
