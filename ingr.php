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

$legajo = $_POST['legajo'];
$contrasena = $_POST['contrasena'];

// Consultar el usuario en la base de datos
$result = $conexion->query("SELECT contrasena FROM usuarios WHERE legajo = '$legajo'");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verificar la contraseña sin hashing
    if ($contrasena === $row['contrasena']) {
        echo "listado2.php";
        header("Location: listado2.php");
        exit();
    } else {
        echo "Contraseña incorrecta";
        header("Location: ingreso2.php");
        exit();
    }
} else {
    echo "Usuario no encontrado";
    header("Location: ingreso2.php");
        exit();
}
$conexion->close();
?>
