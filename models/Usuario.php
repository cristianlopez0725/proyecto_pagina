<?php
require_once("../config/conexion.php");

class Usuario extends Conectar {
    public function login() {
        $conectar = parent::getConexion();
        parent::set_names();

        if (isset($_POST["enviar"]) && $_POST["enviar"] === "si") {
            $correo = $_POST["correo"];
            $password = $_POST["password"];

            if (empty($correo) || empty($password)) {
                header("location:" . Conectar::ruta() . "index.php?m=2");
                exit();
            } else {
                $sql = "SELECT * FROM usuarios WHERE correo = ? AND password = ? and estado =1";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $password);
                $stmt->execute();

                $result = $stmt->fetch();

                if (is_array($result) && count($result) > 0) {
                    $_SESSION["usu_id"] = $result["usu_id"];
                    $_SESSION["usu_nombre"] = $result["usu_nombre"];
                    $_SESSION["usu_apep"] = $result["usu_apep"];
                    $_SESSION["usu_correo"] = $result["usu_correo"];
                    header("location:" . Conectar::ruta() . "views/home.php");
                    exit();
                } else {
                    header("location:" . Conectar::ruta() . "index.php?m=1");
                    exit();
                }
            }
        }
    }
}
