<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="assets/css/Inventario.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="INbody">

<?php

    include "nav.php";

  
?>
    <main class="INmain">
        <h1 class="INmain-title">Inventario</h1>
        <div class="INgrid-header">
            <div></div> 
            <div>Cantidad que posee la SEDE</div>
            <div>Cantidad otorgada</div>
            <div>Cantidad Usada</div>
            <div>Cantidad final</div>
        </div>
        <div class="INgrid-row">
            <div class="INitem">
                <span>Jeringas</span>
                <i class="fas fa-syringe icon"></i>
            </div>
            <input type="number" class="INinput" disabled name="numjSe" required>
            <input type="number" class="INinput" disabled name="numjOto" required>
            <input type="number" class="INinput" disabled name="numjUse"  required>
            <div type="number" class="INdiv1" disabled>Mostrar suma</div>
        </div>
        <div class="INgrid-row">
            <div class="INitem">
                <span>Alcohol</span>
                <i class="fas fa-hand-holding-medical icon"></i>
            </div>
            <input type="number" class="INinput"disabled name="numAlhSe" required>
            <input type="number" class="INinput" disabled name="numAlhOto" required>
            <input type="number" class="INinput" disabled name="numAlhUse" required>
            <div type="number" class="INdiv1" disabled>Mostrar suma</div>
        </div>
        <div class="INgrid-row">
            <div class="INitem">
                <span>Algodón</span>
                <i class="fas fa-cloud fa-rotate-180 icon"></i>
            </div>
            <input type="number" class="INinput" disabled name="numAlgSe" required>
            <input type="number" class="INinput" disabled name="numAlgOto" required>
            <input type="number" class="INinput" disabled name="numAlgUse" required>
            <div type="number" class="INdiv1" disabled>Mostrar suma</div>
        </div>
        <button class="INedit-btn" onclick="editInfo(this)" id="editbtn" type="button">Editar</button>
        <button class="INsave-btn" onclick="saveInfo(this)" id="savebtn" style="display:none;" type="submit">Guardar</button>
    </main>
    <script>
        function editInfo(button) {
            const parent = button.parentElement;
            const inputs = parent.querySelectorAll('input');
            const selects = parent.querySelectorAll('select');
            const saveBtn = parent.querySelector('.INsave-btn');

            // 
            inputs.forEach(input => input.disabled = false);
            selects.forEach(select => select.disabled = false);

            //
            button.style.display = 'none';
            saveBtn.style.display = 'inline-block';
        }

        function saveInfo(button) {
            const parent = button.parentElement;
            const inputs = parent.querySelectorAll('input');
            const selects = parent.querySelectorAll('select');
            const editBtn = parent.querySelector('.INedit-btn');

            //
            let allValid = true;
            inputs.forEach(input => {
                if (!input.checkValidity()) {
                    allValid = false;
                }
            });
            selects.forEach(select => {
                if (!select.checkValidity()) {
                    allValid = false;
                }
            });

            if (allValid) {
                //
                inputs.forEach(input => input.disabled = true);
                selects.forEach(select => select.disabled = true);

                //
                button.style.display = 'none';
                editBtn.style.display = 'inline-block';
            } else {
                alert('Por favor, complete todos los campos requeridos.');
            }
        }
    </script>
</body>
</html>
