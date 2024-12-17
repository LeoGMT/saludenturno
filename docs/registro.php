<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Register</title>
</head>
<body class="body-login">

    
    <div class="wrapper">
        <div class="login_box2">
            <div class="login_header2">
                <img src="assets/img/logo.png" alt="SaludEnTurno">
            </div>
            <div class="registro">
                <form action="logica/registro.php" method="POST">
                    <div class="registro-col">
                        <div class="input_box">
                            <input type="text" id="apep" class="input-field" name="apep" required>
                            <label for="apep" class="label">Apellido Paterno</label>
                            <i class="bx bx-user icon"></i>
                        </div>
                        <div class="input_box">
                            <input type="text" id="apem" class="input-field" name="apem" required>
                            <label for="apem" class="label">Apellido Materno</label>
                            <i class="bx bx-user icon"></i>
                        </div>
                        <div class="input_box">
                            <input type="text" id="name" class="input-field" name="nombre" required>
                            <label for="name" class="label">Nombre (s)</label>
                            <i class="bx bx-user icon"></i>
                        </div>
    
    
                        <div class="input_box">
                            <input type="mail" id="mail" class="input-field" name="correo" required>
                            <label for="mail" class="label">Correo Electronico</label>
                            <i class='bx bx-envelope icon' ></i>
                        </div>
    
    
                        <div class="input_box">
                            <input type="number" id="tel" class="input-field" name="celular" required>
                            <label for="tel" class="label">Celular</label>
                            <i class='bx bx-phone icon'></i>
                        </div>
                        
                        <div class="input_box">
                            <input type="number" id="cedula" class="input-field" name="cedula" required>
                            <label for="cedula" class="label">Cedula Profesional</label>
                            <i class='bx bx-phone icon'></i>
                        </div>
                        <div class="input_box">
                            <input type="password" id="pass" class="input-field" name="password" required>
                            <label for="pass" class="label">Contrase&ntilde;a</label>
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                        <div class="input_box">
                            <input type="password" id="pass_conf" class="input-field" name="passwordconf" required>
                            <label for="pass_conf" class="label">Confirmar contrase&ntilde;a</label>
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                    </div>
                    <div class="input_box">
                        <input type="submit" class="input-submit" value="Registrarse">
                    </div>
                </form>
                <div class="register">
                    <span>Ya tiene una cuenta?... <a href="login.php">Iniciar</a></span>
                </div>
            </div>

        </div>
    </div>

</body>
</html>