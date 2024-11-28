// Función para controlar las luces individuales
function toggleLight(light) {
    const lightCheckbox = document.getElementById(light);

    // Si el checkbox está marcado, encendemos la luz
    if (lightCheckbox.checked) {
        fetch(`/toggle.php?action=on&light=${light}`)
            .then(response => response.text())
            .then(data => {
                console.log(`Encender ${light}: ${data}`);
            })
            .catch(error => {
                console.error("Error al encender la luz:", error);
            });
    } else {
        // Si el checkbox está desmarcado, apagamos la luz
        fetch(`/toggle.php?action=off&light=${light}`)
            .then(response => response.text())
            .then(data => {
                console.log(`Apagar ${light}: ${data}`);
            })
            .catch(error => {
                console.error("Error al apagar la luz:", error);
            });
    }

    // Después de cambiar el estado de la luz individual, verificamos si todos los checkboxes están seleccionados.
    updateSelectAllCheckbox();
}

// Función para manejar el checkbox "all"
function toggleAllLights() {
    const allCheckbox = document.getElementById("all");
    const lights = ['cuarto1', 'cuarto2', 'cuartoprincipal', 'bano', 'pasadiso', 'sala', 'cocina', 'cochera', 'jardin'];

    // Si el checkbox "all" está marcado, encendemos todas las luces
    if (allCheckbox.checked) {
        lights.forEach(light => {
            document.getElementById(light).checked = true; // Marcar todas las luces
            fetch(`/toggle.php?action=on&light=${light}`) // Enviar la solicitud para encender
                .then(response => response.text())
                .then(data => {
                    console.log(`Encender ${light}: ${data}`);
                })
                .catch(error => {
                    console.error("Error al encender la luz:", error);
                });
        });
    } else {
        lights.forEach(light => {
            document.getElementById(light).checked = false; // Desmarcar todas las luces
            fetch(`/toggle.php?action=off&light=${light}`) // Enviar la solicitud para apagar
                .then(response => response.text())
                .then(data => {
                    console.log(`Apagar ${light}: ${data}`);
                })
                .catch(error => {
                    console.error("Error al apagar la luz:", error);
                });
        });
    }
}

// Función para actualizar el estado del checkbox "all" según las luces individuales
function updateSelectAllCheckbox() {
    const lights = ['cuarto1', 'cuarto2', 'cuartoprincipal', 'bano', 'pasadiso', 'sala', 'cocina', 'cochera', 'jardin'];
    const allCheckbox = document.getElementById("all");

    // Verificamos si todas las luces están seleccionadas
    const allChecked = lights.every(light => document.getElementById(light).checked);

    // Si todas están seleccionadas, marcamos el checkbox "all"
    allCheckbox.checked = allChecked;
}
