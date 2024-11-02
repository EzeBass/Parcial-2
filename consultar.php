<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "parcial2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibe el ID del formulario (suponiendo que se envía por POST)
$id = $_POST['id'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Saponara labs.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- No olvides incluir tu archivo de estilos -->
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
</head>
<body>
<div class="container">
    <h1>Detalles de la materia</h1>
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
            // Consulta SQL con el ID recibido
            $sql = "SELECT * FROM datos WHERE idmateria = $id";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $mostrar = mysqli_fetch_array($result);
                ?>
                <tr>
                    <td><?php echo $mostrar['idmateria']; ?></td>
                    <td><?php echo $mostrar['materia']; ?></td>
                    <td><?php echo $mostrar['descripcion']; ?></td>
                    <td><?php echo $mostrar['estado']; ?></td>
                </tr>
                <?php
            } else {
                echo "<tr><td colspan='4'>No se encontraron registros.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="listado.php" class="btn btn-primary">Volver al listado</a>
</div>
</body>
</html>

<?php
// Cerrar conexión a la base de datos al finalizar
$conn->close();
?>




