<?php
require_once("../config/conexion.php");


class Usuario extends Conectar {
    public function login() {
        $conectar = parent::getConexion();
        parent::set_names();
        session_start();

        if (isset($_POST["enviar"]) && $_POST["enviar"] === "si") {
            $correo = trim($_POST["correo"]);
            $password = trim($_POST["password"]);

            if (empty($correo) || empty($password)) {
                header("location:" . Conectar::ruta() . "views/login.php?m=2");
                exit();
            } else {
                $sql = "SELECT * FROM usuarios WHERE usu_correo = ? AND usu_pass = ? AND est = 1";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $password);
                $stmt->execute();

                $result = $stmt->fetch();

                if ($result) { 
                    $_SESSION["usu_id"] = $result["usu_id"];
                    $_SESSION["usu_nom"] = $result["usu_nom"];
                    $_SESSION["usu_apep"] = $result["usu_apep"];
                    $_SESSION["usu_correo"] = $result["usu_correo"];
                    header("location:" . Conectar::ruta() . "views/home.php");
                    
                } else {
                    header("location:" . Conectar::ruta() . "views/login.php?m=1");
                    exit();
                }
            }
        }
    }
}
