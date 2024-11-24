<?php
    require_once("../config/conexion.php");
    require_once("../models/SocialMedia.php");
    $social_media = new SocialMedia();

    switch($_GET["op"]){
        case "guardaryeditar":
            if (empty($_POST["$socmed_id"])){
                $social_media->insert_socialMedia($_POST["$socmed_icono"], $_POST["$socmed_url"]);
            }else{
                $social_media->update_socialMedia($_POST["$socmed_id"], $_POST["$socmed_icono"],$_POST["$socmed_url"]);
            }
            break;
        case "mostrar":
            $datos=$social_media-> get_socialMediaxid($_POST["$socmed_id"]);
            if(is_array($datos) == true and count($datos)<>0){
                foreach($datos as $row){
                    $output["$socmed_icono"]= $row["$socmed_icono"];
                    $output["$socmed_url"]= $row["$socmed_url"];
                }
                echo json_encode($output);
            }
            break;

        case "listar":
            $datos=$social_media->get_socialMedia();
            $data=Array();
            foreach ($datos as $row) {
                $subarray =array();
                $subarray[]=$row["$socmed_icono"];
                $subarray[]=$row["$socmed_url"];
                $subarray[]='<button type="button" onClick="editar('.$row["socmed_id"].');"id="'.$row["socmed_id"].'"class="btn btn-app"><i class="fas fa-edit"></i>Edit</button>';
                $subarray[]='<button type="button" onClick="eliminar('.$row["socmed_id"].');"id="'.$row["socmed_id"].'"class="bx bx-trash"><i class="bx bxs-trash"></i>Eliminar</button>';
            }
            break;


        case "eliminar":
            $social_media->delete_socialMedia($_POST["socmed_id"]);

            break;
            

        
    }
?>