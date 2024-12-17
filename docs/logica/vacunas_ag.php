<?php

require 'conexion.php';

    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }


    try {
        $lote_av = $_POST["lote"];
        $ns_av = $_POST["salubridad"];
        $cofe_av = $_POST["cofepris"];
        $componentes_av = $_POST["componentes"];
        $tipo_av = $_POST["tipo"];
        $nombre_av = $_POST["comercial"];
        $marca_av = $_POST["marca"];
        $cantidad_av = $_POST["cantidad"];
        $dosis_av = $_POST["dosis"];
        $id_admin = $_POST["id_admin"];
    
        
        $query = mysqli_query($conn, "INSERT INTO `vacunas`(`nombre_coloquial`, `id_tipo_de_vacuna`, `lote`, `cantidad`, `dosis`, `num_salubridad`, `marca_de_la_vacuna`, `num_cofepris`, `componentes_de_vacuna`, `admin_rel`) VALUES ('".$nombre_av."', '".$tipo_av."', '".$lote_av."','".$cantidad_av."','".$dosis_av."','".$ns_av."','".$marca_av."','".$cofe_av."','".$componentes_av."','".$id_admin."')");
        echo "<script> alert('La vacuna $nombre_av se agrego correctamente'); location.href = '../registro-vacunas.php'</script>";

    } catch (mysqli_sql_exception $e) { 
        echo "<script> alert('La vacuna $nombre_av no se agrego correctamente'); location.href = '../registro-vacunas.php'</script>";
    }

?>