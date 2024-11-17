<?php
if (isset($_SESSION["usu_id"], $_SESSION["usu_nom"])) {
  ?>
  <div class="info">
    <input type="hidden" id="usu_id" value="<?php echo htmlspecialchars($_SESSION['usu_id']); ?>">
      <p class="text-white"><?php echo htmlspecialchars($_SESSION['usu_nom']); ?></p>
</div>
  <?php
} else {
  echo "Los datos de sesión no están definidos.";
      }
?>
<nav class="mt-2">
  <div class="info">
    <input type="hidden" id="usu_id" value ="<?php echo $_SESSION["usu_id"]?>">
    <a href="#" class="d-block"><?php echo $_SESSION["usu_nom"];?></a>
  </div>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Social Media
              </p>
            </a>
          </li>
      
          <li class="nav-header">SALIR</li>
          <li class="nav-item">
            <a href="inicio.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>