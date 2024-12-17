<?php
require 'conexion.php';

$password = $_POST["password"];
$confpassword = $_POST["confirm_password"];


if ($password == $confpassword) {
    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }
        
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $cedula = $_POST["cedula"];

        $consultados = "UPDATE  usuarios SET correo= ?, celular = ?, password= ? WHERE cedula= ?";
        $query = mysqli_prepare($conn, $consultados);
        mysqli_stmt_bind_param($query, "sssi", $correo, $celular, $password, $cedula);
        mysqli_stmt_execute($query);
        $afectado = mysqli_stmt_affected_rows($query);
        if ($afectado = 1) {
            echo "<script> alert('El empleado $cedula se edito correctamente'); location.href = '../perfil.php'</script>";
        }else{
            
            echo "<script> alert('El empleado $cedula no se edito correctamente'); location.href = '../perfil.php'</script>";
        }
        mysqli_stmt_close($query);
        mysqli_close($conn);
    
}else { 
    echo "NUUUUU";
    echo "Contrasenas no coinciden, hubo un error ";
}
?>