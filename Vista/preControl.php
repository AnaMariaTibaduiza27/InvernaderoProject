<?php
session_start();


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" dir="ltr">
    <title>Verificación</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include ("../php/verificacionCodigo.php")?>
    <!-- Favicons -->
    <link href="../img/icono.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/estilos.css" rel="stylesheet">
</head>

<body>
<!-- Code scripts -->
<script src="../code/highcharts.js"></script>
<script src="../code/highcharts-more.js"></script>
<script src="../code/modules/exporting.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1>
                <a href="preControl.php" class="scrollto">FSC Flower S.A.S</a>
            </h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active">
                    <a href="../Vista/page.php">Inicio</a>
                </li>
            </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>
<!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro">
    <div class="carousel-item active">
        <img id="imgFondo" class="card-img" src="../img/intro-carousel/5.jpg" alt="Card image">
        <div class="card-img-overlay">
            <h3 class="card-title" id="titulo">Ingrese el código de verificación.</h3>

            <form action="../php/verificacionCodigo.php?action=login" method="post" enctype="multipart/form-data">
                <div class="form-group" >
                    <label for="exampleInputPassword1" id="lbcodigo">Código</label>
                    <input type="password" class="form-control" id="codigo" name="codigo" placeholder="Código">
                </div>

                <button type="submit" class="btn btn-primary " id="verificar" name="verificar">Verificar</button>
            </form>

            <?php if(!empty($_GET['respuesta'])){ ?>
                <?php if ($_GET['respuesta'] == "correcto"){ ?>
                    <!-- La página de datos debe abrirse -->
                <?php }else {?>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> Código incorrecto
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</section>


<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="copyright">
                &copy; Copyright
                <strong>SENA 2018</strong>. All Rights Reserved
            </div>
        </div>
    </div>
</footer>
<!-- #footer -->

<a href="#" class="back-to-top">
    <i class="fa fa-chevron-up"></i>
</a>

<!-- JavaScript Libraries -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery/jquery-migrate.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/superfish/hoverIntent.js"></script>
<script src="../lib/superfish/superfish.min.js"></script>
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/counterup/counterup.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/isotope/isotope.pkgd.min.js"></script>
<script src="../lib/lightbox/js/lightbox.min.js"></script>
<script src="../lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="../contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="../js/main.js"></script>

</body>

</html>