<?php
require 'conexion.php';

$password = $_POST["password"];
$confpassword = $_POST["confpassword"];


if ($password == $confpassword) {
    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }

    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombres"];
    $apep = $_POST["apepa"];
    $apem = $_POST["apema"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $rol = $_POST["rol"];

    
    $query = mysqli_query($conn, "SELECT FROM `rol`(`cedula`, `nombre`, `ape_pate`, `ape_mate`, `correo`, `celular`, `id_rol`, `password`) VALUES ('".$cedula."', '".$nombre."', '".$apep."','".$apem."','".$correo."','".$celular."','".$rol."','".$password."')");
}else { 
    echo "NUUUUU";
    echo "Contrasenas no coinciden, hubo un error ";
}
?>