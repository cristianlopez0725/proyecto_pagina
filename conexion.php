<?php
try{
    $conexion = null;

    $engine = "mysql";
    $server = "localhost";
    $user ="root";
    $password ="";
    $database = "pagina";
    $charset = "utf8";

    $dsn = sprintf("%s:server=%s;database=%s;charset=%s", $engine, $server, $database, $charset);
    $conexion = new PDO($dsn, $user, $password);


    $conexion = new PDO("mysql:server=localhost;database=pagina;charset=utf8", $user, $password);

    echo "La conexion fue exitosa";

    } catch (PDOException $e){
    echo "Error de conexion: " . $e->getMessage();
    }


?>