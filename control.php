<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'esp32_functions.php';

    $action = $_POST['action'] ?? '';
    $response = sendRequestToESP32($action);

    echo $response; // Devuelve la respuesta al cliente
}
?>
