<?php

$correo=$_POST['emailuser'];
$pass=$_POST['pass'];

// Datos de conexión a MySQL
$host = "fdb1028.awardspace.net";
$user = "4301210_sysdtd";
$password = "BR.Tx%9:6:Nf[2_L";
$database = "4301210_sysdtd";

// Conexión a MySQL
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$consulta="SELECT*FROM usuarios where emailuser='$correo' and pass='$pass'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);
$fila = mysqli_fetch_assoc($resultado);

if($filas){
    session_start();
    $username = $fila['username'];
    $usernameMAY = strtoupper($username);
    $_SESSION['usuario'] = $usernameMAY;
    $_SESSION['id'] = $fila['idUser'];
    header("location:test.php");

}else{
    echo'
        <script>
            alert("Datos Incorrectos");
            location.href="log-in.html";
        </script>
    ';
}

mysqli_free_result($resultado);
mysqli_close($conn);