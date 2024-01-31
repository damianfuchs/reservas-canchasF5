<?php

    include 'conexion_bd.php';

    $dni = $_POST['dni'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE dni='$dni' and contrasena='$contrasena'");

    //El mayor a 0 es cuando encuentra un usuario para loguarse 
    if(mysqli_num_rows($validar_login) > 0){
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

    mysqli_close($conexion);
?>