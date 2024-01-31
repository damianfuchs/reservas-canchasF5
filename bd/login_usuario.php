<?php

    session_start();

    include 'conexion_bd.php';

    $dni = $_POST['dni'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE dni='$dni' and contrasena='$contrasena'");

    //El mayor a 0 es cuando encuentra un usuario para loguarse 
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['dni'] = $dni;
        echo '
        <script>
            window.location = "../inicio.php";
        </script>
    ';
    exit;
    }else{
        echo '
            <script>
                alert("DNI o Contraseña incorrectos");
                window.location = "../login.php";
            </script>
        ';
        exit;
    }

?>