<?php
require_once("../config/conexion.php");
require_once("../models/Menu.php"); 
$menu = new Menu();

switch ($_GET["op"]) {
    case "guardaryeditar":
        if (empty($_POST["id"])) {
            $menu->insert_menu(
                $_POST["opcion"],
                $_POST["url"],
                $_POST["est"]
            );
        } else {
            $menu->update_menu(
                $_POST["id"],
                $_POST["opcion"],
                $_POST["url"],
                $_POST["est"]
            );
        }
        break;

    case "mostrar":
        $datos = $menu->get_menu_by_id($_POST["id"]);
        if (is_array($datos) && !empty($datos)) {
            echo json_encode($datos); // Responde con los datos en JSON
        } else {
            echo json_encode(["error" => "No se encontró el registro"]);
        }
        break;

    case "listar":
        $datos = $menu->get_menu();
        $data = [];
        foreach ($datos as $row) {
            $subarray = [];
            $subarray[] = $row["id"];
            $subarray[] = $row["opcion"];
            $subarray[] = $row["url"];
            $subarray[] = $row["est"] == 1 ? "Activo" : "Inactivo"; // Mostrar estado legible
            $subarray[] = '<button type="button" onClick="editar(' . $row["id"] . ');" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</button>';
            $subarray[] = '<button type="button" onClick="eliminar(' . $row["id"] . ');" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>';
            $data[] = $subarray;
        }
        echo json_encode(["data" => $data]); 
        break;

    case "eliminar":
        $menu->delete_menu($_POST["id"]);
        echo json_encode(["success" => "Registro eliminado correctamente"]);
        break;
}
?>
