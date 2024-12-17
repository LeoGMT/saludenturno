<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/pacientes.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Pacientes</title>
</head>
<body>

<?php

    include "nav.php";

  
?>

    
    <div class="form-2">
    <div class="section-header">
        <div style="text-align: center; margin-bottom: 20px; font-family: 'Glacial Indifference', sans-serif;">
            <h3 class="texto-azul">REGISTRO VACUNAS<hr color="053057"></h3>
            <p class="texto-azul" style="font-family: 'Glacial Indifference', sans-serif;"><b>Datos de pacientes atendidos</b></p>
        </div>
    </div>
    <div class="formulario-pac">
        <form id="formulario-2" action="logica/paciente.php" method="POST" onsubmit="return validarFormulario()">
                <div class="form-group">
                    <label for="nombre" class="left-label">Nombre(s):</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="apepa" class="left-label">Apellido Paterno:</label>
                    <input type="text" id="apepa" name="apepa" required>
                </div>

                <div class="form-group">
                    <label for="apema" class="left-label">Apellido Materno:</label>
                    <input type="text" id="apema" name="apema" required>
                </div>
        
                <div class="form-group">
                <label for="curp" class="left-label">CURP:</label>
                <input type="text" id="curp" name="curp" minlength="18" maxlength="18" required>
                </div>
    
                <div class="form-group">
                <label for="fecha-nac" class="left-label">Fecha de nacimiento:</label>
                <input type="date" id="fecha-nac" name="fecha-nac" required>
                </div>
    
                <div class="form-group">
                <label for="genero" class="left-label">Género:</label>
                <select id="genero" name="genero" required>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
                </div>
    
                <div class="form-group">
                <label for="email" class="left-label">Correo electrónico:</label>
                <input type="text" id="email" name="email" required>
                </div>
        
                <div class="form-group">
                <label for="aler" class="left-label">Alergias:</label>
                <input type="text" id="aler" name="aler" required>
                </div>
    
                <div class="form-group">
                <label for="pade" class="left-label">Padecimientos:</label>
                <input type="text" id="pade" name="pade" required>
                </div>

                <div class="form-group">
                <label for="id_admin" class="left-label">Cedula de quien registra:</label>
                <input type="text" id="id_admin" name="id_admin" readonly value="<?php echo $user_cedula?>" required>
                </div>
    
                    <input type="submit" value="REGISTRAR">
    
            </form>
    
            <script>
                function validarFormulario() {
                    var nombre = document.getElementById("nombre").value;
                    var curp = document.getElementById("curp").value;
                    var fechanac = document.getElementById("fecha-nac").value;
                    var genero = document.getElementById("genero").value;
                    var email = document.getElementById("email").value;
                    var vac = document.getElementById("vac").value;
                    var lote = document.getElementById("lote").value;
        
                    if (nombre === "" || curp.length !== 18 || fecha-nac === "" || genero === "" || email === "" || vac === "" || lote === "") {
                        alert("Por favor, complete todos los campos obligatorios.");
                        return false;
                    }
                    return true;
                }


            </script>
        </div>
    </div>
    
    </body>
    </html>
