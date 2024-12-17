<?php
require 'conexion.php';


    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }
        
        
        $direccion = $_POST['dir'];
        $responsable = $_POST['respo'];
        $tele = $_POST['tel'];
        $id = $_POST['id'];

        $consultados = "UPDATE  sede SET direccion= ?, responsable = ?, telefono_sede= ? WHERE id_sede= ?";
        $query = mysqli_prepare($conn, $consultados);
        mysqli_stmt_bind_param($query, "siii", $direccion, $responsable, $tele, $id);
        mysqli_stmt_execute($query);
        $afectado = mysqli_stmt_affected_rows($query);
        if ($afectado = 1) {
            echo "<script> alert('La sede $id se edito correctamente'); location.href = '../mostrar_sede.php'</script>";
        }else{
            
            echo "<script> alert('La sede $id no se edito correctamente'); location.href = '../mostrar_sede.php'</script>";
        }
        mysqli_stmt_close($query);
        mysqli_close($conn);
   
?>