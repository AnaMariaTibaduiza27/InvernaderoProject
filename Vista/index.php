<?php require '../php/TemperaturaD.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" dir="ltr">
    <title>Datos</title>
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
                <a href="index.php" class="scrollto">Invernadero</a>
            </h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active">
                    <a href="#intro">Inicio</a>
                </li>
                <li>
                    <a style="color: white">Temperatura</a>
                    <ul>
                        <li>
                            <a href="#about" target="_blank">Horas</a>
                        </li>
                        <li>
                            <a href="#about_dias" target="_blank">Dias</a>
                        </li>
                        <li>
                            <a href="#about_meses" target="_blank">Meses</a>
                        </li>
                        <li>
                            <a href="#about_ages" target="_blank">Años</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a style="color: white">Humedad</a>
                    <ul>
                        <li>
                            <a href="#portfolio" target="_blank">Horas</a>
                        </li>
                        <li>
                            <a href="#portfolio_dias" target="_blank">Dias</a>
                        </li>
                        <li>
                            <a href="#portfolio_meses" target="_blank">Meses</a>
                        </li>
                        <li>
                            <a href="#portafolio_ages" target="_blank">Años</a>
                        </li>
                    </ul>
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
                            <h2>Ver Temperatura</h2>
                            <a href="#about" class="btn-get-started scrollto">Ir</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url('../img/intro-carousel/2.jpg');">

                </div>

                <div class="carousel-item" style="background-image: url('../img/intro-carousel/3.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Ver Humedad</h2>
                            <a href="#portfolio" class="btn-get-started scrollto">Ir</a>
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
<!-- #intro -->

<main id="main">


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Temperatura por horas</h3>
            </header>

            <?php TemperaturaD::DatosTemperaturaHoras(); ?>

            <div>
                <div id="containerTemp" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

                <script type="text/javascript">


                    Highcharts.chart('containerTemp', {

                        chart: {
                            type: 'columnrange',
                            inverted: true
                        },

                        title: {
                            text: 'Variación cada dos horas'
                        },

                        subtitle: {
                            text: 'Invernadero - Duitama'
                        },

                        xAxis: {
                            categories: ['0-2', '2-4', '4-6', '6-8', '8-10', '10-12', '12-14', '14-16', '16-18', '18-20', '20-22', '22-24']
                        },

                        yAxis: {
                            title: {
                                text: 'Temperatura ( °C )'
                            }
                        },

                        tooltip: {
                            valueSuffix: '°C'
                        },

                        plotOptions: {
                            columnrange: {
                                dataLabels: {
                                    enabled: true,
                                    formatter: function () {
                                        return this.y + '°C';
                                    }
                                }
                            }
                        },

                        legend: {
                            enabled: false
                        },

                        series: [{
                            name: 'Temperaturas',
                            data: [
                                [59.5, 80.4],
                                [-8.7, 6.5],
                                [-3.5, 9.4],
                                [-1.4, 19.9],
                                [0.0, 22.6],
                                [2.9, 29.5],
                                [9.2, 30.7],
                                [7.3, 26.5],
                                [4.4, 18.0],
                                [-3.1, 11.4],
                                [-5.2, 10.4],
                                [-13.5, 9.8]
                            ]
                        }]

                    });

                </script>
            </div>

        </div>
    </section>
    <br> <br>

    <!--DIAS-->

    <section id="about_dias">
        <div class="container">

            <header class="section-header">
                <h3>Temperatura por días</h3>
            </header>
            <!--<script type="text/javascript" src="https://www.dwebresources.com/widgets/js_calendar.js.php?theme=flick&width=600&height=600"></script>-->
            <?php TemperaturaD::DatosTemperaturaDias(); ?>
            <div>
                <div id="containerTemp_dias" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

                <script type="text/javascript">


                    Highcharts.chart('containerTemp_dias', {

                        chart: {
                            type: 'columnrange',
                            inverted: true
                        },

                        title: {
                            text: 'Variación cada 7 dias'
                        },

                        subtitle: {
                            text: 'Invernadero - Duitama'
                        },

                        xAxis: {
                            categories: ['1', '2', '3', '4', '5', '6', '7']
                        },

                        yAxis: {
                            title: {
                                text: 'Temperatura ( °C )'
                            }
                        },

                        tooltip: {
                            valueSuffix: '°C'
                        },

                        plotOptions: {
                            columnrange: {
                                dataLabels: {
                                    enabled: true,
                                    formatter: function () {
                                        return this.y + '°C';
                                    }
                                }
                            }
                        },

                        legend: {
                            enabled: false
                        },

                        series: [{
                            name: 'Temperaturas',
                            data: [
                                [59.5, 80.4],
                                [-8.7, 6.5],
                                [-3.5, 9.4],
                                [-1.4, 19.9],
                                [0.0, 22.6],
                                [2.9, 29.5],
                                [9.2, 30.7]
                            ]
                        }]

                    });

                </script>
            </div>

        </div>
    </section>
    <br> <br>
    <!--MESES-->

    <section id="about_meses">
        <div class="container">

            <header class="section-header">
                <h3>Temperatura por Meses</h3>
            </header>

            <div>
                <div id="containerTemp_meses" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

                <script type="text/javascript">


                    Highcharts.chart('containerTemp_meses', {

                        chart: {
                            type: 'columnrange',
                            inverted: true
                        },

                        title: {
                            text: 'Variación en 12 meses'
                        },

                        subtitle: {
                            text: 'Invernadero - Duitama'
                        },

                        xAxis: {
                            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
                        },

                        yAxis: {
                            title: {
                                text: 'Temperatura ( °C )'
                            }
                        },

                        tooltip: {
                            valueSuffix: '°C'
                        },

                        plotOptions: {
                            columnrange: {
                                dataLabels: {
                                    enabled: true,
                                    formatter: function () {
                                        return this.y + '°C';
                                    }
                                }
                            }
                        },

                        legend: {
                            enabled: false
                        },

                        series: [{
                            name: 'Temperaturas',
                            data: [
                                [59.5, 80.4],
                                [-8.7, 6.5],
                                [-3.5, 9.4],
                                [-1.4, 19.9],
                                [0.0, 22.6],
                                [2.9, 29.5],
                                [9.2, 30.7],
                                [7.3, 26.5],
                                [4.4, 18.0],
                                [-3.1, 11.4],
                                [-5.2, 10.4],
                                [-13.5, 9.8]
                            ]
                        }]

                    });

                </script>
            </div>

        </div>
    </section>
    <br> <br>
    <!--AÑOS-->

    <section id="about_ages">
        <div class="container">

            <header class="section-header">
                <h3>Temperatura por Años</h3>
            </header>

            <div>
                <div id="containerTemp_ages" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

                <script type="text/javascript">


                    Highcharts.chart('containerTemp_ages', {

                        chart: {
                            type: 'columnrange',
                            inverted: true
                        },

                        title: {
                            text: 'Variación en los últimos 5 años'
                        },

                        subtitle: {
                            text: 'Invernadero - Duitama'
                        },

                        xAxis: {
                            categories: ['5', '4', '3', '2', '1']
                        },

                        yAxis: {
                            title: {
                                text: 'Temperatura ( °C )'
                            }
                        },

                        tooltip: {
                            valueSuffix: '°C'
                        },

                        plotOptions: {
                            columnrange: {
                                dataLabels: {
                                    enabled: true,
                                    formatter: function () {
                                        return this.y + '°C';
                                    }
                                }
                            }
                        },

                        legend: {
                            enabled: false
                        },

                        series: [{
                            name: 'Temperaturas',
                            data: [
                                [59.5, 80.4],
                                [-8.7, 6.5],
                                [-3.5, 9.4],
                                [-1.4, 19.9],
                                [0.0, 22.6]
                            ]
                        }]

                    });

                </script>
            </div>

        </div>
    </section>
    <br> <br>
    <!-- #about -->


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Humedad por horas</h3>
            </header>

            <div>
                <div id="containerHum" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

                <script type="text/javascript">

                    Highcharts.chart('containerHum', {
                        chart: {
                            type: 'spline'
                        },
                        title: {
                            text: ''
                        },
                        subtitle: {
                            text: 'Invernadero - Duitama'
                        },
                        xAxis: {
                            type: 'datetime',
                            dateTimeLabelFormats: { // don't display the dummy year
                                month: '%e. %b',
                                year: '%b'
                            },
                            title: {
                                text: 'Date'
                            }
                        },
                        yAxis: {
                            title: {
                                text: 'Porcentaje Humedad (%)'
                            },
                            min: 0
                        },
                        tooltip: {
                            headerFormat: '<b>{series.name}</b><br>',
                            pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
                        },

                        plotOptions: {
                            spline: {
                                marker: {
                                    enabled: true
                                }
                            }
                        },

                        series: [{
                            name: 'Minimo',
                            // Define the data points. All series have a dummy year
                            // of 1970/71 in order to be compared on the same x axis. Note
                            // that in JavaScript, months start at 0 for January, 1 for February etc.
                            data: [
                                [Date.UTC(2018, 7, 23, 0), 3],
                                [Date.UTC(2018, 7, 23, 2), 4],
                                [Date.UTC(2018, 7, 23, 4), 2],
                                [Date.UTC(2018, 7, 23, 5), 2.6],
                                [Date.UTC(2018, 7, 23, 7), 1],
                                [Date.UTC(2018, 7, 23, 9), 1.9],
                                [Date.UTC(2018, 7, 23, 11), 2.8],
                                [Date.UTC(2018, 7, 23, 13), 2.6],
                                [Date.UTC(2018, 7, 23, 15), 2],
                                [Date.UTC(2018, 7, 23, 17), 3],
                                [Date.UTC(2018, 7, 23, 19), 3.1],
                                [Date.UTC(2018, 7, 23, 21), 2.3]
                                    [Date.UTC(2018, 7, 23, 23), 1.5]

                            ]
                        }, {
                            name: 'Medio',
                            data: [
                                [Date.UTC(2018, 7, 23, 0), 0],
                                [Date.UTC(2018, 7, 23, 2), 0.4],
                                [Date.UTC(2018, 7, 23, 4), 0.25],
                                [Date.UTC(2018, 7, 23, 5), 1.66],
                                [Date.UTC(2018, 7, 23, 7), 1.8],
                                [Date.UTC(2018, 7, 23, 9), 1.76],
                                [Date.UTC(2018, 7, 23, 11), 2.62],
                                [Date.UTC(2018, 7, 23, 13), 2.41],
                                [Date.UTC(2018, 7, 23, 15), 2.05],
                                [Date.UTC(2018, 7, 23, 17), 1.7],
                                [Date.UTC(2018, 7, 23, 19), 1.1],
                                [Date.UTC(2018, 7, 23, 21), 0]
                                    [Date.UTC(2018, 7, 23, 23), 2]
                            ]
                        }, {
                            name: 'Maximo',
                            data: [
                                [Date.UTC(2018, 7, 23, 0), 0.5],
                                [Date.UTC(2018, 7, 23, 2), 0.6],
                                [Date.UTC(2018, 7, 23, 4), 1.2],
                                [Date.UTC(2018, 7, 23, 5), 1.9],
                                [Date.UTC(2018, 7, 23, 7), 2],
                                [Date.UTC(2018, 7, 23, 9), 2.5],
                                [Date.UTC(2018, 7, 23, 11), 2.9],
                                [Date.UTC(2018, 7, 23, 13), 2],
                                [Date.UTC(2018, 7, 23, 15), 3],
                                [Date.UTC(2018, 7, 23, 17), 3.7],
                                [Date.UTC(2018, 7, 23, 19), 1.7],
                                [Date.UTC(2018, 7, 23, 21), 1]
                                    [Date.UTC(2018, 7, 23, 23), 1.5]
                            ]
                        }]
                    });
                </script>
            </div>

        </div>
    </section>
    <br><br>
    <!-- #portfolio -->


    <section id="portfolio_dias" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Humedad por dias</h3>
            </header>

            <div>
                <div id="containerHum_dias" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

                <script type="text/javascript">

                    Highcharts.chart('containerHum_dias', {
                        chart: {
                            type: 'spline'
                        },
                        title: {
                            text: ''
                        },
                        subtitle: {
                            text: 'Invernadero - Duitama'
                        },
                        xAxis: {
                            type: 'datetime',
                            dateTimeLabelFormats: { // don't display the dummy year
                                time: '%'
                            },
                            title: {
                                text: 'Date'
                            }
                        },
                        yAxis: {
                            title: {
                                text: 'Porcentaje Humedad (%)'
                            },
                            min: 0
                        },
                        tooltip: {
                            headerFormat: '<b>{series.name}</b><br>',
                            pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
                        },

                        plotOptions: {
                            spline: {
                                marker: {
                                    enabled: true
                                }
                            }
                        },

                        series: [{
                            name: 'Minimo',
                            // Define the data points. All series have a dummy year
                            // of 1970/71 in order to be compared on the same x axis. Note
                            // that in JavaScript, months start at 0 for January, 1 for February etc.
                            data: [
                                [Date.UTC(2018, 7, 23), 0],
                                [Date.UTC(2018, 7, 22), 0.28],
                                [Date.UTC(2018, 7, 21), 0.25],
                                [Date.UTC(2018, 7, 20), 0.2],
                                [Date.UTC(2018, 7, 19), 0.28],
                                [Date.UTC(2018, 7, 18), 0.28],
                                [Date.UTC(2018, 7, 17), 0.47],

                            ]
                        }, {
                            name: 'Medio',
                            data: [
                                [Date.UTC(2018, 7, 23), 0],
                                [Date.UTC(2018, 7, 22), 0.4],
                                [Date.UTC(2018, 7, 21), 0.25],
                                [Date.UTC(2018, 7, 20), 1.66],
                                [Date.UTC(2018, 7, 19), 1.8],
                                [Date.UTC(2018, 7, 18), 1.76],
                                [Date.UTC(2018, 7, 17), 2.62],

                            ]
                        }, {
                            name: 'Maximo',
                            data: [
                                [Date.UTC(2018, 7, 23), 0],
                                [Date.UTC(2018, 7, 22), 0.25],
                                [Date.UTC(2018, 7, 21), 1.41],
                                [Date.UTC(2018, 7, 20), 1.64],
                                [Date.UTC(2018, 7, 19), 1.6],
                                [Date.UTC(2018, 7, 18), 2.55],
                                [Date.UTC(2018, 7, 17), 2.62],

                            ]
                        }]
                    });
                </script>
            </div>

        </div>
    </section>
    <br><br>

    <section id="portfolio_meses" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Humedad por meses</h3>
            </header>

            <div>
                <div id="containerHum_meses" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

                <script type="text/javascript">

                    Highcharts.chart('containerHum_meses', {
                        chart: {
                            type: 'spline'
                        },
                        title: {
                            text: ''
                        },
                        subtitle: {
                            text: 'Invernadero - Duitama'
                        },
                        xAxis: {
                            type: 'datetime',
                            dateTimeLabelFormats: { // don't display the dummy year
                                month: '%e. %b',
                                year: '%b'
                            },
                            title: {
                                text: 'Date'
                            }
                        },
                        yAxis: {
                            title: {
                                text: 'Porcentaje Humedad (%)'
                            },
                            min: 0
                        },
                        tooltip: {
                            headerFormat: '<b>{series.name}</b><br>',
                            pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
                        },

                        plotOptions: {
                            spline: {
                                marker: {
                                    enabled: true
                                }
                            }
                        },

                        series: [{
                            name: 'Minimo',
                            // Define the data points. All series have a dummy year
                            // of 1970/71 in order to be compared on the same x axis. Note
                            // that in JavaScript, months start at 0 for January, 1 for February etc.
                            data: [
                                [Date.UTC(2018, 0), 0],
                                [Date.UTC(2018, 1), 0.28],
                                [Date.UTC(2018, 2), 0.25],
                                [Date.UTC(2018, 3), 0.2],
                                [Date.UTC(2018, 4), 0.28],
                                [Date.UTC(2018, 5), 0.28],
                                [Date.UTC(2018, 6), 0.47],
                                [Date.UTC(2018, 7), 0.79],
                                [Date.UTC(2018, 8), 0.72],
                                [Date.UTC(2018, 9), 1.02],
                                [Date.UTC(2018, 10), 1.12],
                                [Date.UTC(2018, 11), 1.2],

                            ]
                        }, {
                            name: 'Medio',
                            data: [
                                [Date.UTC(2018, 0), 0],
                                [Date.UTC(2018, 1), 0.4],
                                [Date.UTC(2018, 2), 0.25],
                                [Date.UTC(2018, 3), 1.66],
                                [Date.UTC(2018, 4), 1.8],
                                [Date.UTC(2018, 5), 1.76],
                                [Date.UTC(2018, 6), 2.62],
                                [Date.UTC(2018, 7), 2.41],
                                [Date.UTC(2018, 8), 2.05],
                                [Date.UTC(2018, 9), 1.7],
                                [Date.UTC(2018, 10), 1.1],
                                [Date.UTC(2018, 11), 0]
                            ]
                        }, {
                            name: 'Maximo',
                            data: [
                                [Date.UTC(2018, 0), 0],
                                [Date.UTC(2018, 1), 0.25],
                                [Date.UTC(2018, 2), 1.41],
                                [Date.UTC(2018, 3), 1.64],
                                [Date.UTC(2018, 4), 1.6],
                                [Date.UTC(2018, 5), 2.55],
                                [Date.UTC(2018, 6), 2.62],
                                [Date.UTC(2018, 7), 2.5],
                                [Date.UTC(2018, 8), 2.42],
                                [Date.UTC(2018, 9), 2.74],
                                [Date.UTC(2018, 10), 2.62],
                                [Date.UTC(2018, 11), 2.6],

                            ]
                        }]
                    });
                </script>
            </div>

        </div>
    </section>
    <br><br>

    <!-- AÑOS-->

    <section id="portafolio_ages" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Humedad por años</h3>
            </header>

            <div>
                <div id="containerHum_ages" style="min-width: 310px; height: 480px; margin: 0 auto"></div>

                <script type="text/javascript">

                    Highcharts.chart('containerHum_ages', {
                        chart: {
                            type: 'spline'
                        },
                        title: {
                            text: ''
                        },
                        subtitle: {
                            text: 'Invernadero - Duitama'
                        },
                        xAxis: {
                            type: 'datetime',
                            dateTimeLabelFormats: { // don't display the dummy year
                                year: '%b'
                            },
                            title: {
                                text: 'Date'
                            }
                        },
                        yAxis: {
                            title: {
                                text: 'Porcentaje Humedad (%)'
                            },
                            min: 0
                        },
                        tooltip: {
                            headerFormat: '<b>{series.name}</b><br>',
                            pointFormat: '{point.x:%b}: {point.y:.2f} m'
                        },

                        plotOptions: {
                            spline: {
                                marker: {
                                    enabled: true
                                }
                            }
                        },

                        series: [{
                            name: 'Minimo',
                            // Define the data points. All series have a dummy year
                            // of 1970/71 in order to be compared on the same x axis. Note
                            // that in JavaScript, months start at 0 for January, 1 for February etc.
                            data: [
                                [Date.UTC(2018), 0],
                                [Date.UTC(2017), 0.28],
                                [Date.UTC(2016), 0.25],
                                [Date.UTC(2015), 0.2],
                                [Date.UTC(2014), 0.28],

                            ]
                        }, {
                            name: 'Medio',
                            data: [
                                [Date.UTC(2018), 0],
                                [Date.UTC(2017), 0.4],
                                [Date.UTC(2016), 0.25],
                                [Date.UTC(2015), 1.66],
                                [Date.UTC(2014), 1.8],

                            ]
                        }, {
                            name: 'Maximo',
                            data: [
                                [Date.UTC(2018), 0],
                                [Date.UTC(2017), 0.25],
                                [Date.UTC(2016), 1.41],
                                [Date.UTC(2015), 1.64],
                                [Date.UTC(2014), 1.6],

                            ]
                        }]
                    });
                </script>
            </div>

        </div>
    </section>
    <br> <br>


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
                    <img src="../img/team-XMS.jpg" class="img-fluid" alt="Desarrollador">
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