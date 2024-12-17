<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Sedes</title>
    <link rel="stylesheet" href="assets/css/MostrarP.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="MPbody">


<?php

include "nav.php";


?>
<br><br>
    <main class="MPmain-content">
        <h1 class="MPh1">Listado de Sedes</h1>
        
        <div class="MPpersonal-list">


        
        


<?php

$inc = include("logica/conexion.php");
if ($inc) {
$consulta = "SELECT * FROM sede WHERE admin_rel = '".$user_cedula."'";
$resultado = mysqli_query($conn,$consulta);


if ($resultado) {
    while ($row = $resultado->fetch_array()) {
    $id = $row['id_sede'];
    $direccion = $row['direccion'];
    $nombre = $row['nombre_sede'];
    $responsable = $row['responsable'];
    $tele = $row['telefono_sede'];
    $admin_rel = $row['admin_rel'];
?>
            <div class="MPpersonal-item">
                <div class="MPpersonal-header" onclick="toggleInfo(this)">
                    <span class="personal-name"><?php echo $nombre;?></span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="MPpersonal-info">

                    <form action="logica/editar_sede.php" method="POST">
                        <p><strong>Direccion:</strong>
                            <input type="text" disabled name="dir" id="dir" value="<?php echo $direccion ?>"> 
                        </p>
                        <p><strong>Responsable:</strong>
                        <div class="agpinput-group">
                            <input type="text" disabled name="dir" id="dir" value="<?php echo $responsable ?>">
                        </div>
                        </p>
                        <p><strong>Telefono:</strong>
                            <input required type="number" disabled name="tel" id="tel" value="<?php echo $tele ?>"> 
                        </p>
                        <p><strong>ID de la Sede:</strong>
                            <input required type="number" readonly name="id" id="id" value="<?php echo $id ?>"> 
                        </p>

                    </form>
                </div>
            </div>
            <!-- Repetir este bloque por cada personal registrado -->


            
            <?php
                                    }
                                }
                            }
                            ?>
        </div>
    </main>

    <script>
        function toggleInfo(element) {
            const info = element.nextElementSibling;
            info.style.display = info.style.display === 'block' ? 'none' : 'block';
            element.querySelector('i').classList.toggle('fa-chevron-down');
            element.querySelector('i').classList.toggle('fa-chevron-up');
        }

        function editInfo(button) {
            const parent = button.parentElement;
            const inputs = parent.querySelectorAll('input');
            const selects = parent.querySelectorAll('select');
            const saveBtn = parent.querySelector('.MPsave-btn');

            // 
            inputs.forEach(input => input.disabled = false);
            selects.forEach(select => select.disabled = false);

            //
            button.style.display = 'none';
            saveBtn.style.display = 'inline-block';
        }
    </script>
</body>
</html>
