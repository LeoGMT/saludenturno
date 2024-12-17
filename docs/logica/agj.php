<?php
require 'conexion.php';



try {
    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }
        $fecha = $_POST["Fecha"];
        $horario = $_POST["Horario"];
        $direccion = $_POST["Direccion"];
        $cant = $_POST["Cantidad-de-Personal"];
        $sede = $_POST["sede"];
        $respo = $_POST["respo"];
        $id_admin = $_POST["id_admin"];

        
        $query = mysqli_query($conn, "INSERT INTO jornada (direccion, hora, fecha, cantidad_de_personal, id_sede, responsable, admin_rel) VALUES ('".$direccion."', '".$horario."', '".$fecha."','".$cant."','".$sede."','".$respo."','".$id_admin."')");
        echo "<script> alert('La jornada  con fecha $fecha se agrego correctamente'); location.href = '../agregar_sede.php'</script>";
}catch (mysqli_sql_exception $e) { 
    echo "<script> alert('La jornada con fecha $fecha no se agrego correctamente'); location.href = '../jornadas.php'</script>";
}
?>