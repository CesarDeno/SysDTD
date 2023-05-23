<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sysdtd";

function verificarResultadoGuardado($idAlumno) {
    global $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si se ha realizado la conexión correctamente
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Verificar si el alumno tiene un resultado guardado en la base de datos
    $sql = "SELECT * FROM respuestas WHERE alumnoID = '$idAlumno'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El alumno ya realizó el test, mostrar alerta y redirigir a index.php
        echo '<script>alert("Ya has realizado el test."); window.location.href = "index.php";</script>';
        exit(); // Detener la ejecución del resto del código
    }
}
?>
