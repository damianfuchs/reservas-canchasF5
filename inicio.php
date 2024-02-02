<?php 
    session_start();

    if (!isset($_SESSION['dni'])){
        echo'
            <script>
                alert("Debes iniciar Sesion!");
                window.location = "login.php";
            </script>
        '; 
        session_destroy();
        die();
    }
    
?>

<link rel="stylesheet" href="./css/inicio.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



<link rel="stylesheet" href="./css/header.css">
<link rel="stylesheet" href="./css/footer.css">




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>





    <header>
         <?php include('includes/header.php'); ?>
    </header>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Sistema de Reservas</h1>

        <form action="ver_horarios.php" method="post">
            <div class="form-group">
                <label for="dia">Selecciona un día:</label>
                <select name="dia_seleccionado" class="form-control" required>
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miércoles">Miércoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sabado">Sabado</option>
                    <option value="Domingo">Domingo</option>
                    <!-- Agrega más días según tus necesidades -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ver Horarios Disponibles</button>
        </form>
    </div>

    <!-- Agrega el script de Bootstrap y jQuery al final del body para mejorar el rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<footer>
        <?php include('includes/footer.php'); ?>
</footer>