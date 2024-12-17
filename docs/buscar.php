<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Jornadas</title>
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
        <h1 class="MPh1">Listado de Jornadas</h1>


        <div class="MPpersonal-list">

        

<?php

$inc = include("logica/conexion.php");
if ($inc) {
    $consulta = "SELECT * FROM jornada WHERE admin_rel = '".$user_cedula."'";
    $resultado = mysqli_query($conn,$consulta);


    if ($resultado) {
        while ($row = mysqli_fetch_array($resultado) ) {
            $id_jornada = $row['id_jornada'];
            $dir = $row['direccion'];
            $hora = $row['hora'];
            $fecha = $row['fecha'];
            $cant = $row['cantidad_de_personal'];
            $respo = $row['responsable'];
?>
            <div class="MPpersonal-item">
                <div class="MPpersonal-header" onclick="toggleInfo(this)">
                    <span class="personal-name"><?php echo $fecha;?></span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="MPpersonal-info">

                    <form action="logica/editar_personal.php" method="POST">
                        <p><strong>direccion:</strong>
                            <input type="text" name="dire" id="dire" value="<?php echo $dir ?>"> 
                        </p>
                        <p><strong>Hora:</strong>
                            <input required type="text" disabled name="hor" id="hor" value="<?php echo $hora ?>"> 
                        </p>
                        <p><strong>Cantidad de personal:</strong>
                            <input required type="number" disabled name="cant" id="cant" value="<?php echo $cant ?>"> 
                        </p>
                        <p><strong>Responsable:</strong>
                        <div class="agpinput-group">
                            <input required type="text" disabled name="respo" id="respo" value="<?php echo $respo ?>"> 
                        </div>

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
