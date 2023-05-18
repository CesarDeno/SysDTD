<?php

// Establecer conexión a la base de datos
$conn = new mysqli("localhost", "root", "Xjco8RjNMV9l", "sysdtd");
if ($conn->connect_error) {
    die("Error al conectarse a la base de datos: " . $conn->connect_error);
}

// Recuperar el ID del alumno de la URL
$idUser = $_GET['idUser'];

// Consultar la tabla "usuarios" para obtener los datos del alumno
$sql = "SELECT * FROM usuarios WHERE idUser = $idUser";
$resultado = $conn->query($sql);
$alumno = $resultado->fetch_assoc();

// Consultar la tabla "respuestas" para obtener las respuestas del alumno
$sql = "SELECT * FROM respuestas WHERE alumnoID = $idUser";
$resultado = $conn->query($sql);
$respuestas = $resultado->fetch_assoc();

$sql = "SELECT * FROM preguntas";
$resultadoPreg = $conn->query($sql);

// Verificar si el alumno tiene respuestas guardadas
if ($resultado->num_rows == 0) {
    echo "<h1>El alumno no ha completado el cuestionario.</h1>";
} else {
    // Mostrar los datos del alumno y sus respuestas
    echo "<h1>Respuestas del alumno " . $alumno['username'] . "</h1>";
    echo "<h3>Grado: " . $alumno['grado'] . " Grupo: " . $alumno['grupo'] . "</h3>";
    echo "<table class='table table-bordered'>";
    echo "<tr><th>Pregunta</th><th>Respuesta</th></tr>";
    for ($i = 1; $i <= 15; $i++) {
        $preguntas = $resultadoPreg->fetch_assoc(); 
        $pregunta = "pregunta" . $i;
        echo "<tr><td>". $preguntas['pregunta'] . "</td><td>" . $respuestas[$pregunta] . "</td></tr>";
    }
    echo "</table>";
}

// Cerrar conexión a la base de datos
$conn->close();
?>
