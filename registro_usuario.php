<?php
    //conexion con la base de datos y el servidor
    $link = mysqli_connect("localhost","id19039307_root","DQL()~TrK8a6T5{a") or die("<h2>No se encuentra el servidor</h2>");
    $db = mysqli_select_db($link,"id19039307_pagina_web") or die("<h2>Error de Conexion</h2>");

    //obtenemos los valores del formulario
    $nombres = $_POST['nombreuser'];
    $apellidos = $_POST['apellidosuser'];
    $email = $_POST['emailuser'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];

    //Obtiene la longitus de un string
    $req = (strlen($nombres)*strlen($apellidos)*strlen($email)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

    //se confirma la contrasena
    if ($pass != $rpass) {
        die('Las contrasenas no coinciden, Verifique <br /> <a href="index.php">Volver</a>');
    }

    $contrasenaUser = $pass;

    //ingresamos la informacion a la base de datos
    mysqli_query($link,"INSERT INTO usuarios VALUES('$nombres','$apellidos','$email','$contrasenaUser')") or die("<h2>Error Guardando los datos</h2>");
    echo'
        <script>
            alert("Registro Exitoso");
            location.href="index.php";
        </script>
    '
?>