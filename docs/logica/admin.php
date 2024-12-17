<?php
    $inc = include ("conexion.php");

    

    session_start();
    $nombre = $_SESSION["username"];

    if(!isset($nombre)){
        header("location: ../login.php");
    }

    

    if ($inc) {
        $consulta = "SELECT 'nombre' FROM usuarios WHERE 'cedula' = '$nombre'";
        $resultado = mysqli_query($conn,$consulta);
    }

    $sql = "SELECT * FROM usuarios WHERE cedula = '".$nombre."'";
    $resultado = mysqli_query($conn,$sql);

    while($data = $resultado->fetch_assoc()) {
        $user_id = $data['id_usuarios'];
        $user_cedula = $data['cedula'];
        $user_nombre = $data['nombre'];
        $user_apep = $data['ape_pate'];
        $user_apem = $data['ape_mate'];
        $user_mail = $data['correo'];
        $user_cel = $data['celular'];
        $user_sede = $data['id_sede'];
        $user_rol = $data['id_rol'];
        $user_pass = $data['password'];
        $user_admin_rel = $data['admin_rel'];
    }

    


?>