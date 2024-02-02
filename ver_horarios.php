<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Horarios Disponibles</title>
    <!-- Agrega el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ver_horarios.css">

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">

    <style>
    .spaced-button {
        margin: 30px; /* Ajusta el valor según la cantidad de espacio deseada */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .btn-primary{
        margin: 30px; /* Ajusta el valor según la cantidad de espacio deseada */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    h3{
        margin: 30px; /* Ajusta el valor según la cantidad de espacio deseada */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    h2{
        margin: 30px; /* Ajusta el valor según la cantidad de espacio deseada */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    </style>    

<header>
    <?php include('includes/header.php'); ?>
</header>

</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2>Horarios Disponibles</h2>

        <!-- Formulario para ingresar el nombre del reservador -->
        <form action="reservar_horario.php" method="post">


            <!--<div class="form-group">
                <label for="nombre_reservador">Nombre del Reservador:</label>
                <input type="text" class="form-control" id="nombre_reservador" name="nombre_reservador" required>
            </div>
            -->
            <!-- Muestra los horarios disponibles -->
            <h3>Seleccione un horario:</h3>


            <?php
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "reservas_canchas";
        
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }


            // Recibir el día seleccionado desde el formulario
            $dia_seleccionado = isset($_POST['dia_seleccionado']) ? $_POST['dia_seleccionado'] : date('Y-m-d');


                        
            // Realizar la consulta SQL para obtener los horarios del día seleccionado
            // Verifica el formato de la fecha en tu consulta
            $query_horarios = "SELECT Hora FROM horarios WHERE DiaSemana = '$dia_seleccionado'";

            $result_horarios = $conn->query($query_horarios);

            if (!$result_horarios) {
                die("Error en la consulta: " . $mysqli->error);
            }

            
            // Verificar si hay resultados
            if ($result_horarios->num_rows > 0) {
                echo "<h3>Horarios Disponibles para el día $dia_seleccionado'</h3>";
                echo "<div class='btn-group-vertical spaced-button'>";


                echo "<div class='form-group'>";
                echo "<label for='nombre_reservador'>Tu Nombre y Apellido:</label>";
                echo "<input type='text' class='form-control' id='nombre_reservador' name='nombre_reservador' required>";
                echo "</div>";


                // Iterar sobre los resultados y mostrar los botones de horarios\
                while ($row_horario = $result_horarios->fetch_assoc()) {
                    $hora = $row_horario['Hora'];
                    $hora_formato = date('H:i', strtotime($hora));
                    echo "<button type='button' class='btn btn-success spaced-button' onclick=\"seleccionarHorario('$dia_seleccionado', '$hora')\">$dia_seleccionado $hora_formato</button>";

                }
                
                echo "</div>";
            } else {
                echo "<p>No hay horarios disponibles para el día $dia_seleccionado.</p>";
            }

            

            // Cierre de la conexión
            $conn->close();
            ?>

            <!-- Campos ocultos para almacenar los valores de día y hora -->
            <input type="hidden" name="dia" id="dia" value="">
            <input type="hidden" name="hora" id="hora" value="">

            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>

        <!-- Script de JavaScript para actualizar los campos ocultos -->
        <script>
            function seleccionarHorario(dia, hora) {
                document.getElementById("dia").value = dia;
                document.getElementById("hora").value = hora;
            }
        </script>
    </div>

    <!-- Agrega el script de Bootstrap y jQuery al final del body para mejorar el rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<footer>
    <?php include('includes/footer.php'); ?>
</footer>

</html>
