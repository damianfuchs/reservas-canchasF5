

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el usuario está autenticado
    session_start();
    if (!isset($_SESSION['dni'])) {
        header("Location: login.php");
        exit();
    }

    $nombre_reservador = isset($_POST["nombre_reservador"]) ? $_POST["nombre_reservador"] : "";
    $dia = isset($_POST["dia"]) ? $_POST["dia"] : "";
    $hora = isset($_POST["hora"]) ? $_POST["hora"] : "";

    // Aquí deberías realizar la reserva en tu base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservas_canchas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar la reserva en la base de datos
    $query_reserva = "INSERT INTO reservas (Nombre_Reservador, Dia, Hora) VALUES ('$nombre_reservador', '$dia', '$hora')";

    if ($conn->query($query_reserva) === TRUE) {
        $mensaje_reserva = "Has reservado la cancha para el día $dia a las $hora a nombre de $nombre_reservador.";
    } else {
        $error_reserva = "Error al realizar la reserva: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Cancha</title>
    <!-- Agrega el enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <?php if (isset($mensaje_reserva)): ?>
            <h2 class="mb-4">Reserva Exitosa</h2>
            <p><?php echo $mensaje_reserva; ?></p>
            <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
        <?php elseif (isset($error_reserva)): ?>
            <h2 class="mb-4 text-danger">Error en la Reserva</h2>
            <p><?php echo $error_reserva; ?></p>
            <a href="index.php" class="btn btn-danger">Volver al Inicio</a>
        <?php else: ?>
            <p class="text-danger">Ha ocurrido un error inesperado.</p>
        <?php endif; ?>
    </div>

    <!-- Agrega el script de Bootstrap y jQuery al final del body para mejorar el rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>