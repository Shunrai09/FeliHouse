<?php
$servername = "mysql-felihouse.alwaysdata.net";
$dBUsername = "felihouse";
$dBPassword = "Pereda$2309";
$dBName = "felihouse_bd";

// Crear conexión
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

// Verificar conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Obtener el último registro de temperatura
$sql = "SELECT * FROM sensor_temperatura ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felihouse</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="Felihouse">
        <aside class="sidebar">
            <div>
                <div style="display: flex;">
                    <h2>Felihouse</h2>
                    <img style="margin-left: 40px;" width="40px" height="30px" src="logosinfondo.webp" alt="">
                </div>
                <ul>
                    <li><a href="index.php"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                    <li><a href="camara.php"><i class="bi bi-webcam"></i> Camara</a></li>   
                    <li><a href="#"><i class="bi bi-clock-history"></i> Historial de eventos</a></li>
                </ul>
            </div>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Bienvenido</h1>
            </header>
            <section>
                <iframe src="https://90f3-190-108-95-235.ngrok-free.app/" width="640" height="480"></iframe>
            </section>
        </main>
    </div>

    <!-- Script para recargar la página cada segundo -->

</body>

</html>