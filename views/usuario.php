
<?php
define("BASE_URL", "/pagina/"); 
require_once("../config/conexion.php"); 

if (isset($_SESSION["usu_id"])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../dashboard/stylesheets/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Social Media</title>
  

  <?php require_once("modulos/css.php"); ?>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <?php require_once("modulos/header.php"); ?>
  

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="../index.php" class="brand-link">
    <img src="../images/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Proyecto web</span>
</a>
<div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/Profile-PNG-File.png" class="img-circle elevation-2" alt="User Image">
        </div>

        <div class="info">
          <p class="text-white"><?php echo  $_SESSION['usu_nom'] ." ". $_SESSION['usu_apep'] ; ?></p>
        </div>
      </div>
      <?php require_once("modulos/menu.php"); ?>
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-outline-primary mb-2" onclick="nuevo()">crear</button>
      <table id="usuario_data"class="table display responsive wrap">
      <thead>
              <tr>
                <th class="wd-15p">Nombre</th>
                <th class="wd-15p">Apellido materno</th>        
                <th class="wd-15p">Apellido paterno</th>        
                <th class="wd-15p">Correo</th>        
                <th class="wd-15p">Telefono</th>        
                <th></th>
                <th></th>
              </tr>
            </thead>
      </table>
    </section>
    

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require_once("modulos/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php require_once("modulos/js.php"); ?>


</body>
</html>
<?php
}else{
  header("location: " . Conectar::ruta() . "views/404.php");
  exit();

}
?>