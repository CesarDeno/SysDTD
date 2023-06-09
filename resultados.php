<?php
include 'time_out_session.php';
if(isset($_SESSION['usuario'])){
    if($_SESSION['id'] > 100){
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="SysDTD es en sistema de Deteccion de depresion para Colegio Alerce">
    <meta name="author" content="DT Innovations">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>SysDTD - Resultados</title>

    </script>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/logo.png">
</head>


<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="images/logo.png" alt="alternative"></a> 
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text page-scroll" href="index.php">SysDTD</a>
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="resultados.php">RESULTADOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="editar_preguntas.php">EDITAR PREGUNTAS</a>
                    </li>
                </ul>
                <?php
                if(isset($_SESSION['usuario'])){
                    echo '<span class="nav-item"><a class="btn-outline-sm" href="#">' . $_SESSION['usuario'] . '</a></span>';
                    echo '<form action="logout.php" method="POST">';
                    echo '<span class="nav-item"><button type="submit" class="btn-outline-sm" name="cerrar-sesion">CERRAR SESIÓN</button></span>';
                    echo '</form>';
                } else {
                    echo '<span class="nav-item"><a class="btn-outline-sm" href="log-in.php">INICIAR SESION</a></span>';
                }
                ?>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->   
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#275940;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg> 

    <!-- Details -->
    <div id="about" class="basic-1">
        <div class="container">
            <h1>Resultados del Test de Trastorno Depresivo</h1>
            <p></p>
            <label class="text-justify">¡Bienvenido a la visualizacion de datos del test de trastorno depresivo! En esta sección, podrás visualizar los resultados obtenidos por los alumnos en distintas evaluaciones y actividades realizadas en el transcurso del año escolar. Los datos se presentan de manera clara y organizada, permitiéndote identificar rápidamente áreas de oportunidad y fortalezas en el desempeño de los estudiantes. Con esta herramienta, podrás tomar decisiones informadas para mejorar la calidad educativa en tu institución..</label>       
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->

    <div class="above-heading">
        <h1 class="h2-heading">Resultados del Test</h1>
        <div class="container-table">
        </div>
    </div>  

    <?php
    require_once"tabla_resultados.php";
    ?>
    
    <div id="beneficios" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <?php
                            require_once"graficas.php";
                            ?>
                        </div>
                    </div>
                    <!-- end of card -->
                </div>
            </div>
        </div>
    </div>
   

    <!-- Details -->
    <div id="about" class="basic-1">
        <div class="container">
            <h1>Importar Usuarios</h1>
            <p></p>
            <label class="text-justify">
            Para actualizar la lista de alumnos, sigue estos pasos. Primero, asegúra de tener un archivo .csv con la información actualizada de los alumnos. Luego, busca el boton de seleccionar archivo y haz clic en ella. Selecciona el archivo .csv desde tu computadora y confirma la carga. Asegúrate de que el formato del archivo sea correcto y que los datos estén organizados adecuadamente. Una vez que el archivo se haya subido correctamente, el sistema procesará la información y actualizará automáticamente la lista de alumnos con los nuevos datos. Verifica la lista después de la actualización para confirmar que todos los cambios se hayan aplicado correctamente.
            </label>
            <form method="post" enctype="multipart/form-data">
            <label for="csvFile">Insertar CSV Alumnos</label>
            <input type="file" class="form-control-file" id="csvFile" name="csvFile"> <br>
            <button type="submit" class="btn btn-primary" name="submit">Subir archivo e insertar datos</button><br>
            </form><br>  
            <?php
            include 'insertar_usuarios.php';
            ?>       
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->

<!-- Footer -->
<svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#275940;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
<!-- end of footer -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

</body>
</html>