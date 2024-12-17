<?php 
require('conexion.php');
$id_usuarios = $_GET['id_usuarios'];

$query = "DELETE FROM usuarios WHERE id_usuarios = '$id_usuarios'";

$conn->query($query);

header("Location: ../personal_activo.php");

?>