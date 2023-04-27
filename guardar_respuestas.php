<?php
// Datos de conexión a MySQL
$host = "localhost";
$user = "root";
$password = "";
$database = "sysdtd";

// Conexión a MySQL
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener respuestas del formulario
$idUser = $_POST["idUser"];
$pregunta1 = $_POST["pregunta1"];
$pregunta2 = $_POST["pregunta2"];
$pregunta3 = $_POST["pregunta3"];
$pregunta4 = $_POST["pregunta4"];
$pregunta5 = $_POST["pregunta5"];
$pregunta6 = $_POST["pregunta6"];
$pregunta7 = $_POST["pregunta7"];
$pregunta8 = $_POST["pregunta8"];
$pregunta9 = $_POST["pregunta9"];
$pregunta10 = $_POST["pregunta10"];
$pregunta11 = $_POST["pregunta11"];

// Insertar respuestas en la base de datos
$sql = "INSERT INTO respuestas (alumnoID, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10, pregunta11) 
VALUES ('$idUser','$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$pregunta6', '$pregunta7', '$pregunta8', '$pregunta9', '$pregunta10', '$pregunta11')";
if ($conn->query($sql) === TRUE) {
  echo '<script>
        alert("Datos guardados correctamente");
        location.href="index.php";
        </script>';
} else {
  echo "Error al guardar las respuestas: " . $conn->error;
}

// Cerrar conexión a MySQL
$conn->close();
?>
