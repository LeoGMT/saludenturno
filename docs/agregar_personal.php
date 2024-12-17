<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personal</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="agpbody">

<?php

    include "nav.php";
    
  
?>
<br><br>

    <main class="agpmain-content">
        <h1 class="agp h1">Personal</h1>
        <form class="agppersonal-form" action="logica/agp.php" method="POST">
            <div class="agpform-group">
                <label for="nombres" class="agplabel">Nombre(s)</label>
                <div class="agpinput-group">
                    <input type="text" id="nombres" name="nombres" class="agpinput" required>
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="apepa" class="agplabel">Apellido Paterno</label>
                <div class="agpinput-group">
                    <input type="text" id="apepa" name="apepa" class="agpinput" required>
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="apema" class="agplabel">Apellido Materno</label>
                <div class="agpinput-group">
                    <input type="text" id="apema" name="apema" class="agpinput" required>
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="cedula" class="agplabel">Cédula</label>
                <div class="agpinput-group">
                    <input type="number" id="cedula" name="cedula" class="agpinput" required>
                    <i class="fas fa-id-card"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="rol" class="agplabel">Rol</label>
                <div class="agpinput-group">
                    <div class="select">
                        <select name="rol" id="rol">
                            <option value="1">Administrador</option>
                            <option value="2">Aplicador</option>
                        </select>
                    </div>
                    <i class="fas fa-users"></i>
                </div>
            </div>


            <div class="agpform-group">
                <label for="sede" class="agplabel">Sede</label>
                <div class="agpinput-group">
                    <div class="select">
                        <select name="sede" id="sede">
                            <?php

                            $inc = include("logica/conexion.php");
                            if ($inc) {
                            $consulta = "SELECT * FROM sede WHERE admin_rel = '".$user_cedula."'";
                            $resultado = mysqli_query($conn,$consulta);


                            if ($resultado) {
                                while ($row = $resultado->fetch_array()) {
                                $id = $row['id_sede'];
                                $nombre = $row['nombre_sede'];
                            ?>
                            <option value="<?php echo $id ?>"><?php echo $nombre;?></option>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>



            <div class="agpform-group">
                <label for="correo" class="agplabel">Correo electrónico</label>
                <div class="agpinput-group">
                    <input type="email" id="correo" name="correo" class="agpinput" required>
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="celular" class="agplabel">Celular</label>
                <div class="agpinput-group">
                    <input type="number" id="celular" name="celular" class="agpinput" required>
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="password" class="agplabel">Contrasena</label>
                <div class="agpinput-group">
                    <input type="text" id="password" name="password" class="agpinput" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="confpassword" class="agplabel">Confirmar contrasena</label>
                <div class="agpinput-group">
                    <input type="text" id="confpassword" name="confpassword" class="agpinput" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="id_admin" class="agplabel">Cedula de quien registra</label>
                <div class="agpinput-group">
                    <input type="number" id="id_admin" readonly name="id_admin" value="<?php echo $user_cedula?>" class="agpinput" required>
                    <i class="fas fa-solid fa-user-tie"></i>
                </div>
            </div>
            <button type="submit" class="agpsubmit-btn">Agregar personal</button>
        </form>
    </main>
</body>
</html>
