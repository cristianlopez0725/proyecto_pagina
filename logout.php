
<?php 
require_once("config/conexion.php");
session_destroy();
header(("location:".Conectar::ruta(). "login.php?m=2"));
exit();
?>