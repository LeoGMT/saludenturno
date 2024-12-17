<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="assets/css/registro.css">
        <link rel="stylesheet" href="./assets/css/nav.css">
        <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <script src="assets/js/script.js" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Glacial+Indifference&display=swap" rel="stylesheet">
        <title>Agregar Vacuna</title>
    </head>
    <body>

        <?php

            include "nav.php";

        
        ?>


        <?php

        $inc = include("logica/conexion.php");
        if ($inc) {
        $consulta = "SELECT * FROM vacunas WHERE admin_rel = '".$user_cedula."'";
        $resultado = mysqli_query($conn,$consulta);


        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $lote_av = $row["lote"];
                $ns_av = $row["num_salubridad"];
                $cofe_av = $row["num_cofepris"];
                $componentes_av = $row["componentes_de_vacuna"];
                $tipo_av = $row["id_tipo_de_vacuna"];
                $nombre_av = $row["nombre_coloquial"];
                $marca_av = $row["marca_de_la_vacuna"];
                $cantidad_av = $row["cantidad"];
                $dosis_av = $row["dosis"];
                $id_admin = $row["admin_rel"];

                if($tipo_av = 1){
                    $tipo_name = "Intra Muscular";
                }elseif($tipo_av = 2){
                    $tipo_name = "Nasal";
                }
        ?>
        <div class="registro">
            <img src="assets/img/set.png" alt="Imagen" class="imagen-derecha">
            <div class="section-header">
                <div style="text-align: center; margin-bottom: 20px;">
                    <h2 class="registro-vacunas2">REGISTRO VACUNAS</h2>
                    <h3 class="registro-vacunas2">Datos registrados</h3>
                </div>
            </div>

            <div class="registro-2">
                <label>Lote:</label>
                <p id="lote"><?php echo $lote_av?></p><hr color="#053057">
            </div>

            <div class="registro-2">
                <label>Numero de Salubridad:</label>
                <p id="salubridad"><?php echo $ns_av?></p><hr color="#053057">
            </div>

            <div class="registro-2">
                <label>Numero COFEPRIS:</label>
                <p id="cofepris"><?php echo $cofe_av?></p><hr color="#053057">
            </div>

            <div class="registro-2">
                <label>Componentes de Vacuna:</label>
                <p id="componentes"><?php echo $componentes_av?></p><hr color="#053057">
            </div>

            <div class="registro-2">
                <label>Tipo de Vacuna:</label>
                <p id="tipo"><?php echo $tipo_name?></p><hr color="#053057">
            </div>

            <div class="registro-2">
                <label>Nombre Comercial:</label>
                <p id="comercial"><?php echo $nombre_av?></p><hr color="#053057">
            </div>

            <div class="registro-2">
                <label>Marca de Vacuna:</label>
                <p id="marca"><?php echo $marca_av?></p><hr color="#053057">
            </div>

            <div class="registro-2">
                <label>Cantidad:</label>
                <p id="cantidad"><?php echo $cantidad_av?></p><hr color="#053057">
            </div>

            <div class="registro-2">
                <label>Dosis:</label>
                <p id="dosis"><?php echo $dosis_av?></p><hr color="#053057">
            </div>
        </div>
        <?php
        }
    }
}
?>
    </body>
</html>