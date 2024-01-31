<?php

    include 'conexion_bd.php';

    
    

    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $numero_telefono = $_POST['numero_telefono'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    //aca encriptamos la contrasena en la BD
    $contrasena = hash('sha512', $contrasena);
    $confirmar_contrasena = hash('sha512', $confirmar_contrasena);

    $query_registro = "INSERT INTO usuario(nombre, dni, numeroTelefono, contrasena, confirmarContrasena) 
    VALUES('$nombre', '$dni', '$numero_telefono', '$contrasena', '$confirmar_contrasena')";


    //VERIFICA QUE NO SE REPITAN LOS DATOS
    $verificar_dni = mysqli_query($conexion, "SELECT * FROM usuario WHERE dni = '$dni' ");

    if(mysqli_num_rows($verificar_dni) > 0){
        echo '
            <script>
                alert("Ya hay un Usuario registrado con ese DNI");
                window.location = "../registro.php";
            </script>
        
        ';
        exit();
    }

    //--------------------------------------

    $ejecutar = mysqli_query($conexion, $query_registro);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Registrado Correctamente");
                window.location = "../inicio.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo nuevamente!");
            window.location = "../registro.php";
        </script>
    ';
    }

    mysqli_close($conexion);
?>