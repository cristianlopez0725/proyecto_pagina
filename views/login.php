<?php
require_once("../config/conexion.php");
require_once("../models/Usuario.php");
session_start();

if (isset($_POST["enviar"]) && $_POST["enviar"] === "si") {
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
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>LOGIN SESSION</b>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="correo" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <input type="hidden" name="enviar" value="si">
                            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                        </div>
                    </div>
                    <?php if (isset($_GET["m"])): ?>
                        <div class="alert <?= $_GET["m"] == 1 ? 'alert-danger' : 'alert-warning'; ?>" role="alert">
                            <?= $_GET["m"] == 1 ? 'Los datos son incorrectos' : 'El formulario tiene campos vacíos'; ?>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <script src="../public/plugins/jquery/jquery.min.js"></script>
    <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../public/dist/js/adminlte.min.js"></script>
</body>
</html>
