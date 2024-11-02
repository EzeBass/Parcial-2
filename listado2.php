<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "parcial2";


$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}


$sql = "SELECT * FROM datos";
$resultado = $conexion->query($sql);
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
</head>
<body>
    <main>
        <header class="bg-dark text-white py-4">
            <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="listado2.php">Listado</a>
                    </li>
                    <li class="nav-item">
                  <a class="nav-link" href="formulario.html">Agregar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="borrar.html">Borrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="formmod.html">Modificar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="consultar.html">Consultar</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Salir</a>
                    </li>
                </ul>
            </div>
        </header>

        <section class="container mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Materia</th>
                        <th scope="col">Materia</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($resultado && $resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $fila['idmateria'] . "</td>";
                            echo "<td>" . $fila['materia'] . "</td>";
                            echo "<td>" . $fila['descripcion'] . "</td>";
                            echo "<td>" . $fila['estado'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No se encontraron registros.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>

        <footer class="bg-dark text-white py-4">
            <div class="container">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        Sitio Oficial
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Web site: www.saponaralabs.com</h5>
                        <p class="card-text">Desarrollado por EL SAPO</p>
                        <p>
                          Desarrolado por "el Sapo"
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-FY5LCA2jU5xV9Ys4u/T5NyxD5R6tCtJf1l+gb4zN2pG2gF9kn+pw0WU76T8U1/BF" crossorigin="anonymous"></script>
</body>
</html>

<?php
$conexion->close();
?>
