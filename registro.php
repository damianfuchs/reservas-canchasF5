<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>FulbitoF5 Registrarse</title>
</head>
<body>
     <form action="bd/registro_usuario.php" method="POST" class="formulario_registro">

        <div class="login-box">

                <div class="logo">
                    <img src="./img/logo2.png" alt="">
                </div>
                <div class="login-header">
                    <header>FULBITO F5</header>
                </div>
                <div class="input-box">
                    <input type="text" name="nombre" class="input-field" placeholder="Nombre Completo" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="text" name="dni" class="input-field" placeholder="DNI" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="text" name="numero_telefono" class="input-field" placeholder="Numero de Telefono" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="password" name="contrasena" class="input-field" placeholder="Contraseña" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="password" name="confirmar_contrasena" class="input-field" placeholder="Confirmar Contraseña" autocomplete="off" required>
                </div>
                <div class="forgot">

                </div>
                <div class="input-submit">
                    <button class="submit-btn" id="submit"></button>
                    <label for="submit">Registrarse</label>
                </div>

        </div>

    </form>
</body>
</html>