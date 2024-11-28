<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Luces</title>
</head>
<body>
    <h1>Control de Luces - FeliHouse</h1>
    
    <button onclick="controlLight('cuarto1', 'on')">Encender Cuarto 1</button>
    <button onclick="controlLight('cuarto1', 'off')">Apagar Cuarto 1</button>
    
    <button onclick="controlLight('cuarto2', 'on')">Encender Cuarto 2</button>
    <button onclick="controlLight('cuarto2', 'off')">Apagar Cuarto 2</button>

    <script>
        function controlLight(light, action) {
            // Genera la URL para hacer la solicitud GET a control_luces.php
            const url = `control_luces.php?light=${light}&action=${action}`;
            
            // Realiza la solicitud HTTP con fetch()
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    console.log(data);  // Mostrar la respuesta del servidor Arduino
                    alert(`Luz ${light} ${action === 'on' ? 'encendida' : 'apagada'}`);
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>
