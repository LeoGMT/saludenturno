<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personal</title>
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
        <h1 class="MPh1">Listado del Personal</h1>


        <div class="MPpersonal-list">

        

<?php

$inc = include("logica/conexion.php");
if ($inc) {
    $consulta = "SELECT * FROM usuarios WHERE admin_rel = '".$user_cedula."'";
    $resultado = mysqli_query($conn,$consulta);


    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $id = $row['id_usuarios'];
            $cedula = $row['cedula'];
            $nombre = $row['nombre'];
            $apep = $row['ape_pate'];
            $apem = $row['ape_mate'];
            $celular = $row['celular'];
            $email = $row['correo'];
            $contra = $row['password'];
?>
            <div class="MPpersonal-item">
                <div class="MPpersonal-header" onclick="toggleInfo(this)">
                    <span class="personal-name"><?php echo $nombre, " ", $apep, " ", $apem;?></span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="MPpersonal-info">

                    <form action="logica/editar_personal.php" method="POST">
                        <p><strong>Cédula:</strong>
                            <input type="text" readonly name="cedula" id="cedula" value="<?php echo $cedula ?>"> 
                        </p>
                        <p><strong>Correo electrónico:</strong>
                            <input required type="email" disabled name="correo" id="correo" value="<?php echo $email ?>"> 
                        </p>
                        <p><strong>Nueva contraseña:</strong>
                            <input required type="text" disabled name="password" id="password" value="<?php echo $contra ?>"> 
                        </p>
                        <p><strong>Confirme su contraseña:</strong>
                            <input required type="text" disabled name="confirm_password" id="confirm_password"> 
                        </p>
                        <p><strong>Celular:</strong>
                            <input required type="number" disabled name="celular" id="celular" class="MPinput" value="<?php echo $celular ?>"> 
                        </p>
                        <button class="MPedit-btn" onclick="editInfo(this)" id="editbtn" type="button">Editar</button>
                        <button class="MPsave-btn" id="savebtn" style="display:none;" type="submit">Guardar</button>
                        <a class="MPdelete-btn" href="logica/eliminar_uno.php?id_usuarios=<?php echo $row['id_usuarios'] ?>">Eliminar personal</a>

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
        <a class="MPdelete-btn" href="logica/eliminar_todos.php?admin_rel=<?php echo $user_cedula ?>" >Eliminar todo el personal</a>
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
