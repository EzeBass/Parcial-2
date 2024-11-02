<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "parcial2";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $campo1 = $_POST["fmateria"];
    $campo2 = $_POST["fdescripcion"];
    $campo3 = $_POST["festado"];

  
    $sql = "INSERT INTO datos(materia,descripcion,estado) VALUES ('$campo1', '$campo2','$campo3')";
    $stmt = $conn->prepare($sql);
    
    $stmt->execute();

    
    if ($stmt->affected_rows > 0) {
        echo "El registro se grabó correctamente.";
    } else {
        echo "No se pudo grabar el registro.";
    }
}


$conn->close();
?>

<a href="listado.php" target="_self">volver</a>