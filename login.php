
<?php 
require_once("config/conexion.php");
if(isset($_POST["enviar"])and $_POST["enviar"=="ok"]){
    require_once ("models/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}
?>

<from method = "post">
    <?php
        if (isset($_GET["m"])){
            switch($_GET["m"]){
                case "1":
                ?>
                    <div class="alert text-danger" role = alert>
                        Los datos del formulario son incorrectos
                    </div>
                    <?php
                    break;
                case "2":
                        ?>
                <div class="alert text-warning" role = alert>
                    El formulario esta vacio
                </div>
                        
                    <?php
                    break;
                    ?>
            }
        }

    ?>
<h2>Login</h2>
<input type="hidden" name= "enviar" value="ok">
<button type="submit" class="btn btn-primary ">Sign In</button>
</from>