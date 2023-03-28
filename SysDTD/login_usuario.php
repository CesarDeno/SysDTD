<?php


$correo=$_POST['emailuser'];
$password=$_POST['pass'];

$conexion=mysqli_connect("localhost","id19039307_root","DQL()~TrK8a6T5{a","id19039307_pagina_web")or die("<h2>Error de Conexion</h2>");

$consulta="SELECT*FROM usuarios where emailuser='$correo' and pass='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas){
    session_start();
    $_SESSION['usuario'] = $correo;
    header("location:index.php");

}else{
    echo'
        <script>
            alert("Datos Incorrectos");
            location.href="log-in.html";
        </script>
    ';
}

mysqli_free_result($resultado);
mysqli_close($conexion);