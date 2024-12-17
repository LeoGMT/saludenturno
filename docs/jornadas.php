<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/ADAM-STYLES.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Agregar Jornadas</title>
</head>
    <body class="JORNADAS-body">
    <?php

include "nav.php";


?>
<br><br>
        <section class="JORNADAS-section">
            
            <div class="JORNADAS-header-content">
                <div class="JORNADAS-txt-header">
                    <p>JORNADAS</p>
                </div>
            </div>
            <form action="logica/agj.php" method="POST" class="JORNADAS-form">
                <div class="JORNADAS-cajita-grande"> 
                    <div class="JORNADAS-cajita-entrada">
                        <div class="JORNADAS-in-txt">
                            <p>Fecha</p>
                        </div>
                        <div class="JORNADAS-input">
                            <input type="date" name="Fecha" id="JORNADAS-user" class="JORNADAS-input-field" required>
                        </div>
                    </div>
                    <div class="JORNADAS-cajita-entrada">
                        <div class="JORNADAS-in-txt">
                            <p>Horario</p>
                        </div>
                        <div class="JORNADAS-input">
                            <input type="time" name="Horario" id="JORNADAS-user" class="JORNADAS-input-field" required>
                        </div>
                    </div>
                    <div class="JORNADAS-cajita-entrada">
                        <div class="JORNADAS-in-txt">
                            <p>Direcci&oacute;n</p>
                        </div>
                        <div class="JORNADAS-input">
                            <input type="text" name="Direccion" id="JORNADAS-user" class="JORNADAS-input-field" required>
                            
                        </div>
                    </div>
                    <div class="JORNADAS-cajita-entrada">
                        <div class="JORNADAS-in-txt">
                            <p>Cantidad de Personal</p>
                        </div>
                        <div class="JORNADAS-input">
                            <input type="number" name="Cantidad-de-Personal" id="JORNADAS-user" class="JORNADAS-input-field" requerido="requerido" >
                        </div>
                    </div>
                    <div class="JORNADAS-cajita-entrada">
                        <div class="JORNADAS-in-txt">
                            <p>SEDE Correspondiente</p>
                        </div>
                        <div class="JORNADAS-input">
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
                    </div>
                    <div class="JORNADAS-cajita-entrada">
                        <div class="JORNADAS-in-txt">
                            <p>Responsable</p>
                        </div>
                        <div class="JORNADAS-input">
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
                                        <option value="<?php echo $nombre ?>"><?php echo $nombre," ", $apep," ", $apem;?></option>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="JORNADAS-cajita-entrada">
                        <div class="JORNADAS-in-txt">
                            <p>Cedula de quien registra</p>
                        </div>
                        <div class="JORNADAS-input">
                            <input type="number" id="id_admin" readonly name="id_admin" value="<?php echo $user_cedula?>" class="JORNADAS-input-field" required>
                        </div>
                    </div>
                    
                    <div class="JORNADAS-cajita-entrada">
                        <input type="submit" class="JORNADAS-input-submit-g" value="Agregar Jornada">
                    </div>
                </div>
            </form>
        </section>
    </body>
</html>