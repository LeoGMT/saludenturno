<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
    <link rel="stylesheet" href="assets/css/Reporte.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="REPbody">
<?php

include "nav.php";


?>
<br><br>
    <main class="REPmain-content">
        <h1 class="REPh1">Reporte de vacunacion</h1>
        <div class="REPpersonal-list">
            <div class="REPpersonal-item">
                <div class="REPpersonal-header" onclick="toggleInfo(this)">
                    <span class="REPpersonal-name">nombre del paciente</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="REPpersonal-info">
                    <!--Escribir resultados dentro de span si es posible xd-->
                    <p><strong>Nombre del paciente:</strong> <span></span></p>
                    <p><strong>Vacuna:</strong> <span></span></p>
                    <p><strong>Lote:</strong> <span></span></p>
                    <p><strong>Fecha de aplicación:</strong> <span></span></p>
                    <p><strong>Jornada:</strong> <span><!--Direccion--></span> </p>
                    <p><strong>Sede:</strong> <span></span></p>
                    <p><strong>Usuario:</strong> <span></span></p>
                    <p><strong>Nombre de aplicador:</strong> <span></span></p>
                </div>
            </div>
            <!-- Repite este bloque por cada personal registrado -->
        </div>
    </main>

    <script>
        function toggleInfo(element) {
            const info = element.nextElementSibling;
            info.style.display = info.style.display === 'block' ? 'none' : 'block';
            element.querySelector('i').classList.toggle('fa-chevron-down');
            element.querySelector('i').classList.toggle('fa-chevron-up');
        }
    </script>
</body>
</html>
