<?php
require 'conexion.php';

session_start();

if (!$conn) {
    die("No hay conexion: ". mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$password = $_POST["txtpassword"];


$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE cedula = '".$nombre."' and password = '".$password."'");

$q = "SELECT COUNT(*) as contar FROM usuarios WHERE cedula = '".$nombre."' and password = '".$password."'";
$consulta = mysqli_query($conn, $q);


$array = mysqli_fetch_array($consulta);

if ($array["contar"] > "0") {
    $_SESSION['username'] = $nombre;
    header("location: ../personal_activo.php");
}else{
echo "<script> alert('Usuario o contraseña no coinciden'); location.href = '../login.php'</script>";
}
?>