<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Luces</title>
    <link rel="stylesheet" href="prueba.css">
    <script>
        function controlLight(action) {
            fetch('control.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `action=${action}`
            })
            .then(response => response.text())
            .then(data => {
                console.log('Respuesta:', data);
                alert(`Respuesta del ESP32: ${data}`);
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</head>
<body>
    <h1>Control de Luces</h1>
    <div class="buttons">
        <button onclick="controlLight('cuarto1on')">Encender Cuarto 1</button>
        <button onclick="controlLight('cuarto1off')">Apagar Cuarto 1</button>
        <button onclick="controlLight('cuarto2on')">Encender Cuarto 2</button>
        <button onclick="controlLight('cuarto2off')">Apagar Cuarto 2</button>
        <button onclick="controlLight('cuartoprincipalon')">Encender Cuarto Principal</button>
        <button onclick="controlLight('cuartoprincipaloff')">Apagar Cuarto Principal</button>
        <button onclick="controlLight('allon')">Encender Todo</button>
        <button onclick="controlLight('alloff')">Apagar Todo</button>
    </div>
</body>
</html>
