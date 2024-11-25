<?php
function sendRequestToESP32($endpoint) {
    $esp32_ip = "https://10c9-132-184-131-183.ngrok-free.app/"; // Cambia por la IP del ESP32
    $url = "http://$esp32_ip/$endpoint";

    // Inicializar cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar solicitud y obtener la respuesta
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
?>
