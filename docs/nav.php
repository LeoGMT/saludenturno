<?php

include("logica/admin.php");



?>
<div>
<nav class="sidebar locked">
  <div class="logo_items flex">
    <span class="nav_image">
      <img src="assets/img/logo-blanco.png" alt="logo_img" />
    </span>
    <span class="logo_name">SaludEnTurno</span>
    <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
    <i class="bx bx-x" id="sidebar-close"></i>
  </div>

  <div class="menu_container">
    <div class="menu_items">
      <ul class="menu_item">
        <div class="menu_title flex">
          <span class="title">Jornadas</span>
          <span class="line"></span>
        </div>
        <li class="item">
          <a href="pacientes.php" class="link flex">
            <i class='bx bx-shield-plus'></i>
            <span>Aplicar vacuna</span>
          </a>
        </li>
        <li class="item">
          <a href="jornadas.php" class="link flex">
            <i class='bx bx-shield-plus'></i>
            <span>Agregar Jornada</span>
          </a>
        </li>
        <li class="item">
          <a href="buscar.php" class="link flex">
            <i class='bx bx-search-alt' ></i>
            <span>Buscar Jornada</span>
          </a>
        </li>
        <li class="item">
          <a href="comprobante.php" class="link flex">
          <i class='bx bx-book-bookmark'></i>
            <span>Comprobante Vacunacion</span>
          </a>
        </li>
        <li class="item">
          <a href="agregar_sede.php" class="link flex">
          <i class='bx bx-layer-plus'></i>
            <span>Agregar Sedes</span>
          </a>
        </li>
        <li class="item">
          <a href="mostrar_sede.php" class="link flex">
          <i class='bx bxs-castle'></i>
            <span>Mostrar Sedes</span>
          </a>
        </li>
      </ul>

      <ul class="menu_item">
        <div class="menu_title flex">
          <span class="title">Insumos</span>
          <span class="line"></span>
        </div>
        <li class="item">
          <a href="registro-vacunas.php" class="link flex">
            <i class="bx bxs-magic-wand"></i>
            <span>Registrar Vacunas</span>
          </a>
        </li>
        <li class="item">
          <a href="regis.php" class="link flex">
          <i class='bx bx-show-alt'></i>
            <span>Mostrar Vacunas</span>
          </a>
        </li>
      </ul>

      <ul class="menu_item">
        <div class="menu_title flex">
          <span class="title">Personal</span>
          <span class="line"></span>
        </div>
        <li class="item">
          <a href="personal_activo.php" class="link flex">
            <i class='bx bx-user-check'></i>
            <span>Personal Activo</span>
          </a>
        </li>
        <li class="item">
          <a href="agregar_personal.php" class="link flex">
            <i class='bx bx-group'></i>
            <span>Agrgar Personal</span>
          </a>
        </li>
        <li class="item">
          <a href="perfil.php" class="link flex">
          <i class='bx bx-face' ></i>
            <span>Perfil</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="sidebar_profile flex">
      <span class="nav_image">
        <img src="assets/img/perfil.png" alt="logo_img" />
      </span>
      <div class="data_text">

        <span class="name"><?php echo $user_nombre;?></span>
        <br>
        <span class="cerrar"><a href="logica/salir.php">Cerrar sesion</a></span>
      </div>
    </div>
  </div>
</nav>

<nav class="navbar flex">
  <i class="bx bx-menu" id="sidebar-open"></i>
  <h1 class="search_box">SaludEnTurno</h1>
  <span class="nav_image">
    <img src="assets/img/logo-blanco.png" alt="logo_img" />
  </span>
</nav>
</div>
<br><br><br>