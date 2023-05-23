<?php
// Configurar el tiempo de vida de la cookie de sesión a 10 minutos
$session_lifetime = 600; // 600 segundos = 10 minutos
session_set_cookie_params($session_lifetime);

// Iniciar la sesión
session_start();

// Verificar si ha pasado el tiempo de inactividad
if (isset($_SESSION['LAST_ACTIVITY']) && time() - $_SESSION['LAST_ACTIVITY'] > $session_lifetime) {
    // Destruir la sesión y redirigir al usuario a index.php
    session_destroy();
    header("Location: index.php");
    exit();
}

// Actualizar el tiempo de actividad de la sesión
$_SESSION['LAST_ACTIVITY'] = time();
?>
