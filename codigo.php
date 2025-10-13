    <?php
    // Comprobamos si la variable 'busqueda' existe en la URL (método GET)
    if (isset($_GET['busqueda']) && !empty($_GET['busqueda'])) {
        // 1. Capturamos el texto de búsqueda.
        // 2. Usamos htmlspecialchars() para evitar inyecciones XSS y mostrar el texto de forma segura.
        $texto_buscado = htmlspecialchars($_GET['busqueda']);

        // 3. Devolvemos la respuesta
        echo "<h2>Resultado de la Búsqueda</h2>";
        echo "<p>Has buscado: <strong>" . $texto_buscado . "</strong></p>";
        echo "<p>Aquí se mostrarían los resultados reales, por ejemplo, consultando una base de datos o un archivo.</p>";
    } else if (isset($_GET['busqueda']) && empty($_GET['busqueda'])) {
        // Manejar el caso en que se envía el formulario vacío
        echo "<p>Por favor, ingrese un término de búsqueda.</p>";
    }
    ?>