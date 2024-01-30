<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>FulbitoF5 Ingresar</title>
</head>

<body>
<form action="conexion_bd.php" method="post">
        
    <div class="login-box">
        
        
            <div class="logo">
                <img src="./img/logo2.png" alt="">
            </div>
            <div class="login-header">
                <header>FULBITO F5</header>
            </div>

            <div class="input-box">
                <input type="text" name="dni" class="input-field" placeholder="DNI" autocomplete="off" required >
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Contraseña" autocomplete="off" required >
            </div>
            <div class="forgot">

            <section>
                <a href="#">Olvidaste la Contraseña?</a>
            </section>
            </div>
            <div class="input-submit">
                <button name="btnEntrar" class="submit-btn" id="submit"></button>
                <label for="submit">Entrar</label>
            </div>
            <div class="sign-up-link">
                <p>¿No tenes cuenta? <a href="registro.php">Registrarse</a></p>
            </div>
        
        
    </div>
</form>
</body>
</html>