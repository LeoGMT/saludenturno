<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/vacunas.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="assets/js/script.js" defer></script></body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

    include "nav.php";

  
?>
    
    <div class="form">
    <div class="section-header">
        <div style="text-align: center; margin-bottom: 20px; font-family: 'Glacial Indifference', sans-serif;">
            <h2 class="texto-azul">REGISTRO VACUNAS<hr color="#053057"></h2>
            
        </div>
    </div>
    <div class="formulario-1">
        <form action="logica/vacunas_ag.php" method="POST">
            <div class="form-group">
            <label for="lote" class="left-label">Lote:</label>
                <input type="number" id="lote" name="lote" required>
            </div>

            <div class="form-group">
            <label for="salubridad" class="left-label">Número de Salubridad:</label>
                <input type="number" id="salubridad" name="salubridad" required>
            </div>
            
            <div class="form-group">
            <label for="cofepris" class="left-label">Número COFEPRIS:</label>
            <input type="number" id="cofepris" name="cofepris" required>
            </div>
    
            <div class="form-group">
            <label for="componentes" class="left-label">Componentes de Vacunas:</label>
            <input type="text" id="componentes" name="componentes" required>
            </div>
            
            <div class="form-group">
            <label for="tipo" class="left-label">Tipo de Vacuna:</label>
            <div class="agpinput-group">
                <div class="select">
                    <select name="tipo" id="tipo">
                        <option value="1">Intra Muscular</option>
                        <option value="2">Nasal</option>
                    </select>
                </div>
                <i class="fas fa-users"></i>
            </div>
            </div>    

            <div class="form-group">
            <label for="comercial" class="left-label">Nombre Comercial:</label>
            <input type="text" id="comercial" name="comercial" required>
            </div>
    
            <div class="form-group">
            <label for="marca" class="left-label">Marca de Vacuna:</label>
            <input type="text" id="marca" name="marca" required>
            </div>
    
            <div class="form-group">
            <label for="cantidad" class="left-label">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>
            </div>

            <div class="form-group">
            <label for="dosis" class="left-label">Dosis:</label>
            <input type="text" id="dosis" name="dosis" required>
            </div>

            <div class="form-group">
            <label for="id_admin" class="left-label">Cedula de quien registra:</label>
            <input type="number" readonly id="id_admin" name="id_admin" value="<?php echo $user_cedula?>" required>
            </div>

            <div class="boton-enviar">
                <input type="submit" value="Registrar">
            </div>

        </form>

    </div>

</div>


    
</body>
</html>
