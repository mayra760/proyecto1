<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Detalles</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1 id="product-details"></h1>
                <div class="mb-3">
                    <label for="color-select" class="form-label">Color:</label>
                    <select class="form-select" id="color-select">
                        <option selected>Seleccionar color</option>
                    </select>
            <div class="col-md-6">
                <img src="#" alt="Imagen del producto" class="img-fluid" id="product-image">
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const detalles = urlParams.get('detalles');

            fetch(`conexion.php?detalles=${detalles}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('product-details').textContent = data.detalles;
                    document.getElementById('product-image').src = data.imagen;

                    // Llenar el selector de colores
                    const colorSelect = document.getElementById('color-select');
                    data.colores.forEach(color => {
                        const option = document.createElement('option');
                        option.value = color;
                        option.textContent = color;
                        colorSelect.add(option);
                    });
                })
                .catch(error => {
                    console.error('Error al obtener los datos:', error);
                    document.getElementById('product-details').textContent = 'Error al cargar los detalles';
                });
        };
    </script>
</body>
</html>

<center>
<?php
    include 'conexion.php'; 
    include 'clase.php'; 

    if (isset($_GET['detalles'])) {
        $detalles = $_GET['detalles'];
        $sql = "SELECT * FROM tb_productos WHERE detalles = '$detalles'";
        $consulta = $conexion->query($sql);
        
        if ($consulta && $consulta->num_rows > 0) {
            $fila = $consulta->fetch_assoc();
            echo "<p>Detalles: <h1>" . htmlspecialchars($fila['detalles']) . "</h1></p>";
        } else {
            echo "<p>No se encontraron detalles para '$detalles'.</p>";
        }
    } else {
        echo "<p>No se especificaron detalles para buscar.</p>";
    }


    ?>
</center>
