<?php
session_start();

require "../php/Temperatura.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" dir="ltr">
    <title>Invernadero</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
                <a href="page.php" class="scrollto">Invernadero</a>
            </h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active">
                    <a href="#intro">Inicio</a>
                </li>
                <li class="menu-active">
                    <a href="#vision">Visión</a>
                </li>
                <li class="menu-active">
                    <a href="#mision">Misión</a>
                </li>
                <li class="menu-active">
                    <a href="#personal">Personal</a>
                </li>
                <li class="menu-active">
                    <a href="index.html">Control</a>
                </li>
                <li>
                    <a href="#contact">Contactenos</a>
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
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url('../img/intro-carousel/1.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Ver Visión</h2>
                            <a href="#vision" class="btn-get-started scrollto">Ir</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url('../img/intro-carousel/2.jpg');">

                </div>

                <div class="carousel-item" style="background-image: url('../img/intro-carousel/3.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Ver Misión</h2>
                            <a href="#mision" class="btn-get-started scrollto">Ir</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url('../img/intro-carousel/4.jpg');">

                </div>

                <div class="carousel-item" style="background-image: url('../img/intro-carousel/5.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Contactenos</h2>
                            <a href="#contact" class="btn-get-started scrollto">Ir</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
<br><br>
<!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="vision">
        <div class="container">

            <header class="section-header">
                <h3>Nuestra Visión</h3>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
    </section>
    <br> <br>

    <!--DIAS-->



    <section id="mision">
        <div class="container">

            <header class="section-header">
                <h3>Nuestra misión</h3>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
    </section>
    <br> <br>
    <!--PERSONAL-->

    <section id="personal">
        <div class="container">

            <header class="section-header">
                <h3>Nuestro personal</h3>
            </header>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="../img/per1.png" alt="Card image cap" style="width: 286px;height: 240px">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="../img/per1.png" alt="Card image cap" style="width: 286px;height: 240px">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="../img/per2.jpg" alt="Card image cap" style="width: 286px;height: 240px">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



        </div>
    </section>
    <br> <br>


    <!--==========================
      Team Section
    ============================-->

    <!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg">
        <div class="container">
            <div class="section-header">
                <h3>Contáctanos</h3>
                <p>Registra aquí tus sugerencias, quejas, solicitudes y Reclamos.</p>
            </div>
            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h3>Dirección</h3>
                        <address>Invernadero, Duitama Boyacá, Colombia</address>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="fa fa-mobile"></i>
                        <i class="fa fa-whatsapp"></i>
                        <h3>Número de Contacto</h3>
                        <p>
                            <a href="tel:+573115550057">+57 311 555 0057</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="fa fa-envelope"></i>
                        <h3>Correo Electrónico</h3>
                        <p>
                            <a href="mailto:">correo@dominio.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="form">
                <div id="sendmessage">Su mensaje ha sido enviado. ¡Gracias!</div>
                <div id="errormessage">Error</div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor, introduzca por lo menos 4 caracteres"
                            />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" data-rule="email" data-msg="Por favor ingrese un email valido"
                            />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor, introduzca por lo menos 8 caracteres"
                        />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escriba algo para nosotros"
                        placeholder="Mensaje"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center">
                        <button type="submit">
                            <i class="fa fa-location-arrow"></i> Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>Floricultura</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Enlaces del Sitio</h4>
                    <ul>
                        <li>
                            <i class="ion-ios-arrow-right"></i>
                            <a href="#intro">Inicio</a>
                        </li>
                        <li>
                            <i class="ion-ios-arrow-right"></i>
                            <a href="#about">Temperatura</a>
                        </li>
                        <li>
                            <i class="ion-ios-arrow-right"></i>
                            <a href="#portfolio">Humedad</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contactenos</h4>
                    <p>
                        <i class="fa fa-map-marker"></i> Invernadero
                        <br>Boyacá, Duitama
                        <br>Colombia
                        <br>
                        <i class="fa fa-whatsapp"></i>
                        <strong> No. Celular:</strong> +57 311 555 0057
                        <br>
                        <i class="fa fa-envelope"></i>
                        <strong> Correo Electrónico:</strong> correo@dominio.com
                        <br>
                    </p>

                    <div class="social-links">
                        <a href="https://twitter.com" class="twitter" target="_blank" title="Twitter" >
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com" class="facebook" target="_blank" title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://www.youtube.com" class="youtube" target="_blank" title="YouTube">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="https://plus.google.com/" class="google-plus" target="_blank" title="Google-Plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="linkedin" target="_blank" title="LinkedIn">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>
                        <i class="fa fa-code"></i> Desarrolladores</h4>
                    <img src=".../img/team-XMS.jpg" class="img-fluid" alt="Desarrollador">
                    <br>
                    <i class="fa fa-user-circle"></i>
                    <strong> Maria Alejandra Murillo Lara</strong><br>
                    <i class="fa fa-user-circle"></i>
                    <strong> Ana Maria Tibaduiza Vega</strong> <br>
                    <i class="fa fa-user-circle"></i>
                    <strong> Juan Pablo Diaz Albarracin</strong><br>
                    <i class="fa fa-user-circle"></i>
                    <strong> Dixon Fabian Salcedo Guecha</strong><br>
                    <p>
                        <i class="fa fa-graduation-cap"></i> Tecnólogo en Análisis y Desarrollo de Sistemas de Información</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright
            <strong>SENA 2018</strong>. All Rights Reserved
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