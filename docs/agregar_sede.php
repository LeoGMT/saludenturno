<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Sedes</title>
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
        <h1 class="agp h1">Agregar Sedes</h1>
        <form class="agppersonal-form" action="logica/ags.php" method="POST">
            <div class="agpform-group">
                <label for="dir" class="agplabel">Direccion</label>
                <div class="agpinput-group">
                    <input type="text" id="dir" name="dir" class="agpinput" required>
                    <i class='bx bx-map-pin'></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="tel" class="agplabel">Telefono de la sede</label>
                <div class="agpinput-group">
                    <input type="number" id="tel" name="tel" class="agpinput" required>
                    <i class='bx bxs-phone' ></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="name" class="agplabel">Nombre de la sede</label>
                <div class="agpinput-group">
                    <input type="text" id="name" name="name" class="agpinput" required>
                    <i class="fas fa-id-card"></i>
                </div>
            </div>
            <div class="agpform-group">
                <label for="respo" class="agplabel">Responsable</label>
                <div class="agpinput-group">
                    <div class="select">
                        <select name="respo" id="respo">
                            <?php

                            $inc = include("logica/conexion.php");
                            if ($inc) {
                            $consulta = "SELECT * FROM usuarios WHERE admin_rel = '".$user_cedula."'";
                            $resultado = mysqli_query($conn,$consulta);


                            if ($resultado) {
                                while ($row = $resultado->fetch_array()) {
                                $id = $row['id_usuarios'];
                                $nombre = $row['nombre'];
                                $apep = $row['ape_pate'];
                                $apem = $row['ape_mate'];
                            ?>
                            <option value="<?php echo $id ?>"><?php echo $nombre," ", $apep," ", $apem;?></option>
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
                <label for="id_admin" class="agplabel">Cedula de quien registra</label>
                <div class="agpinput-group">
                    <input type="number" id="id_admin" readonly name="id_admin" value="<?php echo $user_cedula?>" class="agpinput" required>
                    <i class="fas fa-solid fa-user-tie"></i>
                </div>
            </div>
            <button type="submit" class="agpsubmit-btn">Agregar sede</button>
        </form>
    </main>
</body>
</html>
