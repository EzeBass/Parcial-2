<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "parcial2";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Consultar el color principal y la imagen
// Consultar el color principal, la imagen y los encabezados
$result = $conexion->query("SELECT color_principal, imagen, encabezado_h1, encabezado_h2 FROM configuraciones WHERE id = 1");
if ($result) {
    $row = $result->fetch_assoc();
    $color_principal = $row['color_principal'];
    $imagen = $row['imagen'];
    $encabezado_h1 = $row['encabezado_h1'];
    $encabezado_h2 = $row['encabezado_h2'];
} else {
    $color_principal = "#000000"; // Color predeterminado en caso de error
    $imagen = "ruta/predeterminada.jpg"; // Imagen predeterminada en caso de error
    $encabezado_h1 = "Encabezado Predeterminado"; // Valor predeterminado
    $encabezado_h2 = "Subencabezado Predeterminado"; // Valor predeterminado
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Saponara labs.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <style>
        body {
            background-color: #ffffff; /* Mantener el fondo blanco */
        }
        .bg-custom {
            background-color: <?= htmlspecialchars($color_principal); ?> !important; /* Cambiar color de fondo solo en header y footer */
        }
    </style>
</head>
<body>
    <main>
        <header class="bg-custom text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-4">SAPONARA labs.</h1>
                        <p class="lead">"Desde 1990 excelencia en la salud"</p>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-end">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="listado.php">Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ingreso.php">Ingresar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <section class="section-headers">
        <h1><?= htmlspecialchars($encabezado_h1); ?></h1>
        <h2><?= htmlspecialchars($encabezado_h2); ?></h2>
        </section>
        <section class="container">
            <div class="box mt-4">
                <img src="<?= htmlspecialchars($imagen); ?>" class="img-fluid rounded" alt="Imagen de medicamentos">
            </div>
        </section>

        <footer class="bg-custom text-white py-4">
            <div class="container">
                <div class="card bg-custom text-white">
                    <div class="card-header">
                        Sitio Oficial
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Web site: www.saponaralabs.com</h5>
                        <p class="card-text">Email: <a href="mailto:soporte@servicios.com" class="text-white">soporte@servicios.com</a></p>
                        <p class="card-text">Desarrollado por EL SAPO</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-FY5LCA2jU5xV9Ys4u/T5NyxD5R6tCtJf1l+gb4zN2pG2gF9kn+pw0WU76T8U1/BF" crossorigin="anonymous"></script>
</body>
</html>
