<?php

require 'conexion.php';

$password = $_POST["password"];
$confpassword = $_POST["passwordconf"];




if ($password == $confpassword) {
    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }


    try {
        $nombre = $_POST["nombre"];
        $apep = $_POST["apep"];
        $apem = $_POST["apem"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $cedula = $_POST["cedula"];
        $rol = 1;
    
        $val = 1;
    
        
        $query = mysqli_query($conn, "INSERT INTO `usuarios`(`cedula`, `nombre`, `ape_pate`, `ape_mate`, `correo`, `celular`, `id_rol`, `password`) VALUES ('".$cedula."', '".$nombre."', '".$apep."','".$apem."','".$correo."','".$celular."','".$rol."','".$password."')");
        header("location: ../login.php");

    } catch (mysqli_sql_exception $e) { 
        echo'<script type="text/javascript">
        alert("Datos incorrectos al registrar usuario. Usuario existente.");
        window.location.href="../registro.php";
        </script>';
    }

}else { 
    echo'<script type="text/javascript">
        alert("Datos incorrectos al registrar usuario. Usuario existente.");
        window.location.href="../registro.php";
        </script>';
}
?>