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
    <link rel="stylesheet" href="encendido.css">
    <link rel="stylesheet" href="alarma.css">
    <link href="/website/css/uicons-bold-rounded.css" rel="stylesheet">
</head>

<body>
    <div class="Felihouse">
        <aside class="sidebar">
            <div>
                <div style="display: flex;">
                    <h2>Felihouse</h2>
                    <img style="margin-left: 40px;" width="40px" height="30px" src="logosinfondo.webp" alt="">
                </div>
                <ul class="sidebar_list">
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
                <div class="content">
                    <div class="dashboard">
                        <div class="content-card card-1 ">
                            <h3>Control de Luces</h3>
                            <div class="    c1">
                                <div class="list">
                                    <div class="card led">
                                        <li>Habitación Principal</li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="cuartoprincipal" name="toggle" onchange="toggleLight('cuartoprincipal')">
                                                <label for="cuartoprincipal">
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
                                        <li>Habitacion 1 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="cuarto1" name="toggle" onchange="toggleLight('cuarto1')">
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
                                        <li>Habitacion 2 <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="cuarto2" name="toggle" onchange="toggleLight('cuarto2')">
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
                                        <li>Sala <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="sala" name="toggle" onchange="toggleLight('sala')">
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
                                        <li>Cocina <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="cocina" name="toggle" onchange="toggleLight('cocina')">
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
                                        <li>Pasadizo <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="pasadiso" name="toggle" onchange="toggleLight('pasadiso')">
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
                                        <li>Baño <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="bano" name="toggle" onchange="toggleLight('bano')">
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
                                        <li>Jardin <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="jardin" name="toggle" onchange="toggleLight('jardin')">
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
                                        <li>cochera <i class="bi bi-lightbulb"></i></li>
                                        <div class="switch-container">
                                            <div class="switch">
                                                <input type="checkbox" id="cochera" name="toggle" onchange="toggleLight('cochera')">
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
                        <div class="content-card  ">
                            <div class="display">
                                <div class="card c2">
                                    <h3>Alarma</h3>
                                    <div class="alarm">
                                        <div class="power-switch">
                                            <input type="checkbox" id="all" name="toggle" onchange="toggleLight('all')">
                                            <div class="button">
                                                <svg class="power-off">
                                                    <use xlink:href="#line" class="line" />
                                                    <use xlink:href="#circle" class="circle" />
                                                </svg>
                                                <svg class="power-on">
                                                    <use xlink:href="#line" class="line" />
                                                    <use xlink:href="#circle" class="circle" />
                                                </svg>
                                            </div>
                                        </div>

                                        <!-- SVG -->
                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" id="line">
                                                <line x1="75" y1="34" x2="75" y2="58" />
                                            </symbol>
                                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" id="circle">
                                                <circle cx="75" cy="80" r="35" />
                                            </symbol>
                                        </svg>
                                    </div>
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
                                    <div class="escala">
                                        <div class="wrapper">
                                            <div class="rang">
                                                <div class="rang-title">
                                                    <input id="show" class="rang-number" type="text" value="50%" disabled>
                                                </div>

                                                <svg class="meter" width="300" height="300" xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="meter-left" r="96" cx="135" cy="142"></circle>
                                                    <circle class="meter-center" r="96" cx="136" cy="142"></circle>
                                                    <circle class="meter-right" r="96" cx="138" cy="142"></circle>
                                                    <polygon class="meter-clock" points="129,145 137,90 145,145"></polygon>
                                                    <circle class="meter-circle" r="10" cx="137" cy="145"></circle>
                                                </svg>

                                                <input id="range" class="rang-slider" type="range" min="0" max="100">
                                            </div>
                                        </div>
                                    </div>
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

    <script src="encendido.js"></script>
    <script src="leds.js"></script>
    <script>
        function toggleLight(lightId) {
            const checkbox = document.getElementById(lightId);
            const action = checkbox.checked ? 'on' : 'off'; // Determina si se enciende o apaga la luz
            const url = `control_luces.php?light=${lightId}&action=${action}`;

            fetch(url)
                .then(response => response.text())
                .then(data => {
                    console.log(data); // Mostrar el resultado del control
                })
                .catch(error => {
                    console.error('Error al cambiar el estado de la luz:', error);
                });
        }
    </script>

</body>

</html>