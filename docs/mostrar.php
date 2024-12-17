<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de las Sedes</title>
    <link rel="stylesheet" href="assets/css/mos.css">
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
    <main class="MPmain-content">
        <h1 class="MPh1">Listado de las sedes</h1>
        <div class="MPpersonal-list">
            <div class="MPpersonal-item">
                <div class="MPpersonal-header" onclick="toggleInfo(this)">
                    <span class="personal-name">SEDE</span>
                    <i class="MPfas fa-chevron-down"></i>
                </div>
                <div class="MPsedes-info">
                    <p><strong>Direccion:</strong> <input type="text" disabled name="direccion" required></p>
                    <p><strong>Administrador:</strong> <input type="text" value="Horacio Echeverria Rodriguez" disabled name="Administrador" required></p>
                    <p><strong>Codigo Postal:</strong> <input type="tel" value="57170" disabled required></p>
                    <p><strong>Telefono de la Sede:</strong> <input type="text" value="123456789" disabled name="telefono" required></p>
                    <p><strong>Nombre de la sede:</strong> <input type="text" value="clinica f" disable name="Nombre" required></p>
                    <p><strong>Horario:</strong> <input type="datetime" value="10:46" disable name="Horario" required></p>
                    <p><strong>turno:</strong> <input type="text" value="matutino" disable name="turno" required></p>

                    <button class="MPedit-btn" onclick="editInfo(this)">Editar</button>
                    
                    <button class="MPdelete-btn" onclick="confirmDelete()">Eliminar Sede</button>
                </div>
            </div>
            <!------------------------------------------------------------------------------------------------------->
            <!-- Repitir este bloque por cada personal registrado -->
        </div>
        <button class="MPdelete-btn" onclick="confirmDelete()">Eliminar todas las Sedes</button>
    </main>

    <script>
        function toggleInfo(element) {
            const info = element.nextElementSibling;
            info.style.display = info.style.display === 'block' ? 'none' : 'block';
            element.querySelector('i').classList.toggle('fa-chevron-down');
            element.querySelector('i').classList.toggle('fa-chevron-up');
        }

        function editInfo(button) {
            const inputs = button.parentElement.querySelectorAll('input');
            const isDisabled = inputs[0].disabled;
            const saveBtn = button.nextElementSibling;

            inputs.forEach(input => input.disabled = !isDisabled);

            if (isDisabled) {
                button.textContent = 'Guardar';
                saveBtn.style.display = 'inline-block';
            } else {
                button.textContent = 'Editar';
                saveBtn.style.display = 'none';
            }
        }

        function saveInfo(button) {
            const inputs = button.parentElement.querySelectorAll('input');
            inputs.forEach(input => input.disabled = true);
            button.previousElementSibling.textContent = 'Editar';
            button.style.display = 'none';
        }

        function confirmDelete() {
            if (confirm('¿Está seguro de que desea eliminar esta Sede?')) {
                // Lógica para eliminar el personal
            }
        }
    </script>
</body>
</html>
