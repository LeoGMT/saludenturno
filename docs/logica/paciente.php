<?php
require 'conexion.php';
try{
    if (!$conn) {
        die("No hay conexion: ". mysqli_connect_error());
    }
        $curp = $_POST["curp"];
        $name = $_POST["nombre"];
        $apep = $_POST["apepa"];
        $apem = $_POST["apema"];
        $correo = $_POST["email"];
        $gen = $_POST["genero"];
        $naci = $_POST["fecha-nac"];
        $alergias = $_POST["aler"];
        $id_admin = $_POST["id_admin"];
        $padeci = $_POST["pade"];

        
        $query = mysqli_query($conn, "INSERT INTO paciente (CURP, correo, Fecha_de_nacimiento, genero, Nombre, apep, apem, alergias, padecimientos, admin_rel) VALUES ('".$curp."', '".$correo."', '".$naci."','".$gen."','".$name."','".$apep."','".$apem."','".$alergias."','".$padeci."', '".$id_admin."')");
        echo "<script> alert('El paciente $name se agrego correctamente'); location.href = '../comprobante.php'</script>";
} catch (mysqli_sql_exception $e)  { 
    echo "<script> alert('El paciente $name no se pudo agregar'); location.href = '../pacientes.php'</script>";
}
?>