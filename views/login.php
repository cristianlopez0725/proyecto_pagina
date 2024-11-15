<?php 
  require_once ("config/conexion.php");

  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("models/Usuario.php");

    $usuario = new Usuario();
    $usuario->login();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../proyecto_pagina/public/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../proyecto_pagina/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../proyecto_pagina/public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>LOGIN SESSION</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">enviar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!--login Php-->
<?php
 if(isset($_GET["m"])){
  switch($_GET["m"]){
    case "1";
      ?>
      <div class="alert alert_danger" role="alert">
        Los datos son incorrectos
      </div>
      <?php
      break;
    case "2";
     ?>
     <div class="alert alert-warning" role="alert">
      El formulario tiene los campos vacios
     </div>
    <?php
    break;
  }
 }
?>
<!-- jQuery -->
<script src="../../proyecto/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../proyecto/public/plugins//bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../proyecto/public/dist/js/adminlte.min.js"></script>
</body>
</html>
