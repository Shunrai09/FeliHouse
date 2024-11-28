<?php
// Activar la visualización de errores en PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Permitir solicitudes desde otros dominios (CORS)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Función para encender una luz
function toggleLightOn($light) {
    $url = "https://ea00-132-184-131-183.ngrok-free.app/{$light}on";
    $response = @file_get_contents($url);
    if ($response === FALSE) {
        error_log("Error al encender {$light} en {$url}");
    }
    return $response;
}

// Función para apagar una luz
function toggleLightOff($light) {
    $url = "https://ea00-132-184-131-183.ngrok-free.app/{$light}off";
    $response = @file_get_contents($url);
    if ($response === FALSE) {
        error_log("Error al apagar {$light} en {$url}");
    }
    return $response;
}

// Función para encender todas las luces
function toggleAllLightsOn() {
    $url = "https://ea00-132-184-131-183.ngrok-free.app/allon";
    $response = @file_get_contents($url);
    if ($response === FALSE) {
        error_log("Error al encender todas las luces en {$url}");
    }
    return $response;
}

// Función para apagar todas las luces
function toggleAllLightsOff() {
    $url = "https://ea00-132-184-131-183.ngrok-free.app/alloff";
    $response = @file_get_contents($url);
    if ($response === FALSE) {
        error_log("Error al apagar todas las luces en {$url}");
    }
    return $response;
}

// Verificar si la acción y la luz fueron pasadas como parámetros en la URL
if (isset($_GET['action']) && isset($_GET['light'])) {
    $action = $_GET['action']; // Obtener la acción (on/off)
    $light = $_GET['light'];   // Obtener el nombre de la luz (por ejemplo, 'cuartoprincipal')

    // Verificar que la luz sea válida
    $valid_lights = ['cuarto1', 'cuarto2', 'cuartoprincipal', 'bano', 'pasadiso', 'sala', 'cocina', 'cochera', 'jardin', 'all'];
    if (!in_array($light, $valid_lights)) {
        echo "error: Luz no válida.";
        exit;
    }

    // Si la luz es 'all', encender o apagar todas las luces
    if ($light == 'all') {
        if ($action == 'on') {
            toggleAllLightsOn();
            echo "success: Todas las luces encendidas.";
        } elseif ($action == 'off') {
            toggleAllLightsOff();
            echo "success: Todas las luces apagadas.";
        } else {
            echo "error: Acción no válida para 'all'.";
        }
    } else {
        // Para luces individuales, ejecutar según la acción
        if ($action == 'on') {
            toggleLightOn($light);
            echo "success: La luz {$light} encendida.";
        } elseif ($action == 'off') {
            toggleLightOff($light);
            echo "success: La luz {$light} apagada.";
        } else {
            echo "error: Acción no válida.";
        }
    }
} else {
    echo "error: Parámetros faltantes.";
}
?>
