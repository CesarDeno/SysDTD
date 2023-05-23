<?php
include 'time_out_session.php';
if(isset($_POST['cerrar-sesion'])){
    session_destroy();
}
header("Location: log-in.php");
exit;
?>
