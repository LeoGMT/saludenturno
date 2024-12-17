<?php
require 'conexion.php';



try {
    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }
        $direccion = $_POST["dir"];
        $tel = $_POST["tel"];
        $name = $_POST["name"];
        $respo = $_POST["respo"];
        $id_admin = $_POST["id_admin"];

        
        $query = mysqli_query($conn, "INSERT INTO sede (direccion, nombre_sede, responsable, telefono_sede, admin_rel) VALUES ('".$direccion."', '".$name."', '".$respo."','".$tel."','".$id_admin."')");
        echo "<script> alert('La sede $name se agrego correctamente'); location.href = '../agregar_sede.php'</script>";
}catch (mysqli_sql_exception $e) { 
    echo "<script> alert('La sede $name no se agrego correctamente'); location.href = '../agregar_sede.php'</script>";
}
?>