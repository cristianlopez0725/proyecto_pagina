<?php 
define("BASE_PATH", "/pagina/views/"); 
require_once("../../config/conexion.php"); 

if (!isset($_SESSION["usu_id"])) {
    header("location:" . Conectar::ruta() . "views/404.php");
    exit();
}

    require_once("config/conexion.php");
    session_destroy();
    header("location:".Conectar::ruta()."inicio.php");
    exit();
?>