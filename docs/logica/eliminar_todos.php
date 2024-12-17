<?php 
require('conexion.php');
$admin_rel = $_GET['admin_rel'];

$query = "DELETE FROM usuarios WHERE admin_rel = '$admin_rel'";

$conn->query($query);

header("Location: ../personal_activo.php");

?>