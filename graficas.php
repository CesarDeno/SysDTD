<?php

// Datos de conexión a MySQL
$host = "localhost";
$user = "root";
$password = "Xjco8RjNMV9l";
$database = "sysdtd";

// Conexión a MySQL
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
 
$consulta = "SELECT resultado, COUNT(*) as total FROM respuestas GROUP BY resultado";
$resultado = $conn->query($consulta);
if (!$resultado) {
    die('Error en la consulta: ' . mysqli_error($conn));
}

// Obtener todos los valores y totales
$valores = array();
$totales = array();
while ($fila = $resultado->fetch_assoc()) {
    $valores[] = $fila['resultado'];
    $totales[] = $fila['total'];
}

// Incluir la librería de Chart.js
echo '<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';

// Generar el código JavaScript para la gráfica de pasteles

echo '
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultados de Alumnos</h5>
                    <canvas id="grafica" width="800" height="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>';


echo '<script>
    var ctx = document.getElementById("grafica").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: ' . json_encode($valores) . ',
            datasets: [{
                data: ' . json_encode($totales) . ',
                backgroundColor: ["#007bff", "#dc3545", "#28a745", "#ffc107"]
            }]
        },
        options: {
            title: {
                display: true,
            }
        }
    });
</script>';

?>