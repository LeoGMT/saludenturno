<?php 
require('conexion.php');
$id_jornada = $_GET['id_jornada'];

$query = "DELETE FROM jornada WHERE id_jornada = '$id_jornada'";

$conn->query($query);

header("Location: ../buscar.php");

?>