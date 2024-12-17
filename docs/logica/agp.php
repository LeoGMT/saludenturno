<?php
require 'conexion.php';

$password = $_POST["password"];
$confpassword = $_POST["confpassword"];


if ($password == $confpassword) {
    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }
        $cedula = $_POST["cedula"];
        $name = $_POST["nombres"];
        $apep = $_POST["apepa"];
        $apem = $_POST["apema"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $rol = $_POST["rol"];
        $id_admin = $_POST["id_admin"];
        $sede = $_POST["sede"];

        
        $query = mysqli_query($conn, "INSERT INTO usuarios (cedula, nombre, ape_pate, ape_mate, correo, celular, id_sede, id_rol, password, admin_rel) VALUES ('".$cedula."', '".$name."', '".$apep."','".$apem."','".$correo."','".$celular."','".$sede."','".$rol."','".$password."', '".$id_admin."')");
        echo "<script> alert('El empleado $name se agrego correctamente'); location.href = '../personal_activo.php'</script>";
}else { 
    echo "<script> alert('El empleado $name no se pudo agregar'); location.href = '../agregar_personal.php'</script>";
}
?>