<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta http-equiv="Expires" content="0"> 
    <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache">
    <title>SaludEnTurno</title>
</head>
<body class="body-login">

    
    <div class="wrapper">
        <div class="login_box">
            <div class="login_header">
                <img src="assets/img/logo.png" alt="SaludEnTurno">
            </div>
            <form action="logica/login.php" method="POST">
                <div class="input_box">
                    <input type="text" id="user" class="input-field" name="txtusuario" required>
                    <label for="user" class="label">Usuario</label>
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="password" id="pass" class="input-field" name="txtpassword" required>
                    <label for="pass" class="label">Contrase&ntilde;a</label>
                    <i class="bx bx-lock-alt icon"></i>
                </div>
                <div class="input_box">
                    <input type="submit" class="input-submit" value="Iniciar">
                </div>
            </form>
            <br>
            <div class="register">
                <span>No tiene una cuenta?... <a href="registro.php">Registrarse</a></span>
            </div>

        </div>
    </div>

</body>
</html>