<?php 
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM usuarios";
	$resultado = mysqli_query($conn,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['idusuarios'];
	    $cedula = $row['cedula'];
	    $nombre = $row['nombre'];
	    $apep = $row['ape pate'];
	    $apem = $row['ape mate'];
	    $celular = $row['celular'];
	    $email = $row['correo'];
        ?>
        <div>
            <h2><?php echo $nombre, " ", $apep, " ", $apem; ?></h2>
            <div>
                <p>        			
                    <b>ID: </b> <?php echo $id ?><br>
                    <b>Cedula: </b> <?php echo $cedula ?><br>
                    <b>Celular: </b> <?php echo $celular ?><br>
                    <b>Email: </b> <?php echo $email ?><br>
                    <b>Rol: </b> <?php $rol ?><br>
                </p>
            </div>
        </div> 

    <?php
	    }
	}
}
?>

