<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "parcial2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}


$id = $_POST['id'];
$nuevo_valorc = $_POST['estadof'];


$sql = "UPDATE datos SET estado = '$nuevo_valorc' WHERE idmateria = $id";

if ($conn->query($sql) === TRUE) {
    echo "Registro modificado correctamente     ";
} else {
    echo "Error al modificar el registro: " . $conn->error;
}

$conn->close();
?>
<a href="listado.php" target="_self">volver a listado</a>
