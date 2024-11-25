<?php
// Configuración de la base de datos
$servername = "mysql-felihouse.alwaysdata.net";
$dBUsername = "felihouse";
$dBPassword = "Pereda$2309";
$dBName = "felihouse_bd";

// Crear conexión
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

// Verificar conexión
if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// Verificar si se recibió una solicitud POST con el dato de temperatura
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['temperatura'])) {
    $temperatura = $_POST['temperatura']; // Obtener la temperatura del ESP32

    // Validar que la temperatura sea un número
    if (is_numeric($temperatura)) {
        // Insertar el dato en la base de datos
        $sql = "INSERT INTO sensor_temperatura (temperatura) VALUES ('$temperatura')";

        if (mysqli_query($conn, $sql)) {
            echo "Temperatura guardada correctamente: $temperatura °C";
        } else {
            echo "Error al guardar la temperatura: " . mysqli_error($conn);
        }
    } else {
        echo "Dato inválido: la temperatura debe ser un número.";
    }
} else {
    echo "Solicitud inválida o falta el parámetro 'temperatura'.";
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
?>
