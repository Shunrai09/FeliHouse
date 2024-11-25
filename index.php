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
                    <li><a href="#"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                    <li><a href="#"><i class="bi bi-webcam"></i> Camara</a></li>
                    <li><a href="#"><i class="bi bi-clock-history"></i> Historial de eventos</a></li>
                </ul>
            </div>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Bienvenido</h1>
            </header>
            <section>
                <div class="content">
                    <div class="dashboard">
                        <div class="content-card ">
                            <h3>Control de Luces</h3>
                            <div class="    c1">
                                <div class="list">
                                    <div class="card led">
                                        <li>foco1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" name="toggle">
                                                <label for="toggle">
                                                    <i class="bulb">
                                                        <span class="bulb-center"></span>
                                                        <span class="filament-1"></span>
                                                        <span class="filament-2"></span>
                                                        <span class="reflections">
                                                            <span></span>
                                                        </span>
                                                        <span class="sparks">
                                                            <i class="spark1"></i>
                                                            <i class="spark2"></i>
                                                            <i class="spark3"></i>
                                                            <i class="spark4"></i>
                                                        </span>
                                                    </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card led">
                                        <li>foco1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" name="toggle">
                                                <label for="toggle">
                                                    <i class="bulb">
                                                        <span class="bulb-center"></span>
                                                        <span class="filament-1"></span>
                                                        <span class="filament-2"></span>
                                                        <span class="reflections">
                                                            <span></span>
                                                        </span>
                                                        <span class="sparks">
                                                            <i class="spark1"></i>
                                                            <i class="spark2"></i>
                                                            <i class="spark3"></i>
                                                            <i class="spark4"></i>
                                                        </span>
                                                    </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="    c1">
                                <div class="list">
                                    <div class="card led">
                                        <li>foco1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" name="toggle">
                                                <label for="toggle">
                                                    <i class="bulb">
                                                        <span class="bulb-center"></span>
                                                        <span class="filament-1"></span>
                                                        <span class="filament-2"></span>
                                                        <span class="reflections">
                                                            <span></span>
                                                        </span>
                                                        <span class="sparks">
                                                            <i class="spark1"></i>
                                                            <i class="spark2"></i>
                                                            <i class="spark3"></i>
                                                            <i class="spark4"></i>
                                                        </span>
                                                    </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card led">
                                        <li>foco1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" name="toggle">
                                                <label for="toggle">
                                                    <i class="bulb">
                                                        <span class="bulb-center"></span>
                                                        <span class="filament-1"></span>
                                                        <span class="filament-2"></span>
                                                        <span class="reflections">
                                                            <span></span>
                                                        </span>
                                                        <span class="sparks">
                                                            <i class="spark1"></i>
                                                            <i class="spark2"></i>
                                                            <i class="spark3"></i>
                                                            <i class="spark4"></i>
                                                        </span>
                                                    </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="    c1">
                                <div class="list">
                                    <div class="card led">
                                        <li>foco1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" name="toggle">
                                                <label for="toggle">
                                                    <i class="bulb">
                                                        <span class="bulb-center"></span>
                                                        <span class="filament-1"></span>
                                                        <span class="filament-2"></span>
                                                        <span class="reflections">
                                                            <span></span>
                                                        </span>
                                                        <span class="sparks">
                                                            <i class="spark1"></i>
                                                            <i class="spark2"></i>
                                                            <i class="spark3"></i>
                                                            <i class="spark4"></i>
                                                        </span>
                                                    </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card led">
                                        <li>foco1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" name="toggle">
                                                <label for="toggle">
                                                    <i class="bulb">
                                                        <span class="bulb-center"></span>
                                                        <span class="filament-1"></span>
                                                        <span class="filament-2"></span>
                                                        <span class="reflections">
                                                            <span></span>
                                                        </span>
                                                        <span class="sparks">
                                                            <i class="spark1"></i>
                                                            <i class="spark2"></i>
                                                            <i class="spark3"></i>
                                                            <i class="spark4"></i>
                                                        </span>
                                                    </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="    c1">
                                <div class="list">
                                    <div class="card led">
                                        <li>foco1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" name="toggle">
                                                <label for="toggle">
                                                    <i class="bulb">
                                                        <span class="bulb-center"></span>
                                                        <span class="filament-1"></span>
                                                        <span class="filament-2"></span>
                                                        <span class="reflections">
                                                            <span></span>
                                                        </span>
                                                        <span class="sparks">
                                                            <i class="spark1"></i>
                                                            <i class="spark2"></i>
                                                            <i class="spark3"></i>
                                                            <i class="spark4"></i>
                                                        </span>
                                                    </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card led">
                                        <li>foco1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" name="toggle">
                                                <label for="toggle">
                                                    <i class="bulb">
                                                        <span class="bulb-center"></span>
                                                        <span class="filament-1"></span>
                                                        <span class="filament-2"></span>
                                                        <span class="reflections">
                                                            <span></span>
                                                        </span>
                                                        <span class="sparks">
                                                            <i class="spark1"></i>
                                                            <i class="spark2"></i>
                                                            <i class="spark3"></i>
                                                            <i class="spark4"></i>
                                                        </span>
                                                    </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-card display ">
                            <div class="card c2">
                                <h3>Alarma</h3>
                                <div class="alarm">
                                    <p class="on">Prendido</p>
                                    <p class="off">Apagado</p>
                                </div>
                            </div>
                            <div class="logo">
                                <img src="logosinfondo.webp" alt="">
                            </div>
                        </div>
                        <div class="content-card ">
                            <div class="card c3">
                                <h3>Temperatura en casa</h3>
                                <div class="temp_house">
                                    <p>La temperatura en casa es</p>
                                    <p class="temperatura-valor" style="font-size: 50px;"><?php echo $row['temperatura'] ?></p>
                                    <p>temperatura normal</p>
                                    <p style="display: none;">temperatura alta</p>
                                </div>
                            </div>
                            <div class="lyris">
                                <h2>Dashboard de Felihouse</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Script para recargar la página cada segundo -->

</body>

</html>