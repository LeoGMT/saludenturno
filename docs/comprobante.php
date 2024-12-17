<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comprobante de Vacunación</title>
<link rel="stylesheet" href="assets/css/comprobante.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script></body>
<link href="https://fonts.googleapis.com/css2?family=Glacial+Indifference&display=swap" rel="stylesheet">
</head>
<body>

<?php

    include "nav.php";
    $inc = include("logica/conexion.php");
    if ($inc) {
        $consulta = "SELECT * FROM paciente WHERE admin_rel = '".$user_cedula."'";
        $resultado = mysqli_query($conn,$consulta);


        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $curp = $row["CURP"];
                $name = $row["Nombre"];
                $apep = $row["apep"];
                $apem = $row["apem"];
                $correo = $row["correo"];
                $gen = $row["genero"];
                $naci = $row["Fecha_de_nacimiento"];
                $alergias = $row["alergias"];
                $id_admin = $row["admin_rel"];
                $padeci = $row["padecimientos"];

?>

<div class="comprobante">
    <img src="assets/img/set.png" alt="Imagen" class="imagen-derecha">
    <h2 class="titulo">Comprobante de Vacunación</h2>
    <div class="campo">
        <strong>Vacuna Aplicada: </strong>
            <span id="vac" class="span">Influenza</span>
    </div>
    <div class="campo">
        <strong>Nombre Completo:</strong>
            <span id="nombre" class="span"><?php echo $name, "", $apep, " ", $apem;?></span>
    </div>
    <div class="campo">
        <strong>CURP:</strong>
            <span id="curp" class="span"><?php echo $curp;?></span>
    </div>
    <div class="campo">
        <strong>Fecha de Nacimiento:</strong>
            <span id="fecha-nac" class="span"><?php echo $naci;?></span>
    </div>
    <div class="campo">
        <strong>Género:</strong>
            <span id="genero" class="span"><?php echo $gen;?></span>
    </div>
    <div class="campo">
        <strong>Correo Electrónico:</strong>
            <span id="email" class="span"><?php echo $correo;?></span>
    </div>
    <div class="campo">
        <strong>Alergias:</strong>
            <span id="alergias" class="span"><?php echo $alergias;?></span>
    </div>
    <div class="campo">
        <strong>Padecimientos:</strong>
            <span id="padecimientos" class="span"><?php echo $padeci;?></span>
    </div>
</div>
<br><br><br><br>
<?php
        }
    }
}
?>

<script>
    // Obtener los parámetros de la URL
    const urlParams = new URLSearchParams(window.location.search);
    
    // Obtener los valores de los parámetros
    const lote = urlParams.get('lote');
    const nombre = urlParams.get('nombre');
    const curp = urlParams.get('curp');
    const fechanac = urlParams.get('fecha-nac');
    const genero = urlParams.get('genero');
    const email = urlParams.get('email');
    const alergias = urlParams.get('alergias');
    const padecimientos = urlParams.get('padecimientos');
    

    // Mostrar los datos en la página
    document.getElementById('lote').textContent = lote;
    document.getElementById('nombre').textContent = nombre;
    document.getElementById('curp').textContent = curp;
    document.getElementById('fecha-nac').textContent = fechanac;
    document.getElementById('genero').textContent = genero;
    document.getElementById('email').textContent = email;
    document.getElementById('alergias').textContent = alergias;
    document.getElementById('padecimientos').textContent = padecimientos;

    </script>

</body>
</html>
