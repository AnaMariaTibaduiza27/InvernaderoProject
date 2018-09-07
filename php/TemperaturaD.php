<?php
/**
 * Created by PhpStorm.
 * User: AnaMariaTibaduiza
 * Date: 4/09/2018
 * Time: 6:45 AM
 */

class TemperaturaD
{
    public function conexionS()
    {
        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion, "bdinvernadero2");
        $consulta = "select * from dato where Tipo='Temperatura'";
        $resultado = mysqli_query($conexion, $consulta);

        $array = [];
        while ($row = mysqli_fetch_array($resultado)) {
            array_push($array,$row);
        }
        //print_r($array);
        return $array;

    }


    public function DatosTemperaturaHoras()
    {
        $datos=self::conexionS();
        $array=array();
        $array=$datos;

        $datosHorasr1 = array();
        $datosHorasr2 = array();
        $datosHorasr3 = array();
        $datosHorasr4 = array();
        $datosHorasr5 = array();
        $datosHorasr6 = array();
        $datosHorasr7 = array();
        $datosHorasr8 = array();
        $datosHorasr9 = array();
        $datosHorasr10 = array();
        $datosHorasr11 = array();
        $datosHorasr12 = array();

        //Arrays a retornar

        $datosR1 = array();
        $datosR2 = array();
        $datosR3 = array();
        $datosR4 = array();
        $datosR5 = array();
        $datosR6 = array();
        $datosR7 = array();
        $datosR8 = array();
        $datosR9 = array();
        $datosR10 = array();
        $datosR11 = array();
        $datosR12 = array();

        for ($i=0; $i<count($array) ; $i++) {

            $horaR1 = strtotime('00:00:00');$horaR2 = strtotime('02:00:00');
            $horaR3 = strtotime('02:05:00');$horaR4 = strtotime('04:00:00');
            $horaR5 = strtotime('04:05:00');$horaR6 = strtotime('06:00:00');
            $horaR7 = strtotime('06:05:00');$horaR8 = strtotime('08:00:00');
            $horaR9 = strtotime('08:05:00');$horaR10 = strtotime('10:00:00');
            $horaR11 = strtotime('10:05:00');$horaR12 = strtotime('12:00:00');
            $horaR13 = strtotime('12:05:00');$horaR14 = strtotime('14:00:00');
            $horaR15 = strtotime('14:05:00');$horaR16 = strtotime('16:00:00');
            $horaR17 = strtotime('16:05:00');$horaR18 = strtotime('18:00:00');
            $horaR19 = strtotime('18:05:00');$horaR20 = strtotime('20:00:00');
            $horaR21 = strtotime('20:05:00');$horaR22 = strtotime('22:00:00');
            $horaR23 = strtotime('22:05:00');$horaR24 = strtotime('24:00:00');

            $hora1= $array[$i][5];
            $hora1F = strtotime($hora1);


            if ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR1 && $hora1F<=$horaR2) {
                    array_push($datosHorasr1,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR3 && $hora1F<=$horaR4){
                array_push($datosHorasr2,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR5 && $hora1F<=$horaR6){
                array_push($datosHorasr3,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR7 && $hora1F<=$horaR8){
                array_push($datosHorasr4,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR9 && $hora1F<=$horaR10){
                array_push($datosHorasr5,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR11 && $hora1F<=$horaR12){
                array_push($datosHorasr6,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR13 && $hora1F<=$horaR14){
                array_push($datosHorasr7,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR15 && $hora1F<=$horaR16){
                array_push($datosHorasr8,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR17 && $hora1F<=$horaR18){
                array_push($datosHorasr9,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR19 && $hora1F<=$horaR20){
                array_push($datosHorasr10,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR21 && $hora1F<=$horaR22){
                array_push($datosHorasr11,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][4] && $hora1F>=$horaR23 && $hora1F<=$horaR24){
                array_push($datosHorasr12,$array[$i][1]);

            }
        }

        $mayorR1=0;$menorR1=50;
        $mayorR2=0;$menorR2=50;
        $mayorR3=0;$menorR3=50;
        $mayorR4=0;$menorR4=50;
        $mayorR5=0;$menorR5=50;
        $mayorR6=0;$menorR6=50;
        $mayorR7=0;$menorR7=50;
        $mayorR8=0;$menorR8=50;
        $mayorR9=0;$menorR9=50;
        $mayorR10=0;$menorR10=50;
        $mayorR11=0;$menorR11=50;
        $mayorR12=0;$menorR12=50;

        for ($i=0;$i<count($datosHorasr1);$i++){

            if ($mayorR1<$datosHorasr1[$i]){
                $mayorR1=(int)str_replace(' ', '',$datosHorasr1[$i]);
            }
            if ($menorR1>$datosHorasr1[$i]){
                $menorR1=(int)str_replace(' ', '',$datosHorasr1[$i]);
            }

        }
        array_push($datosR1,$menorR1,$mayorR1);


        for ($i=0;$i<count($datosHorasr2);$i++){

            if ($mayorR2<$datosHorasr2[$i]){
                $mayorR2=(int)str_replace(' ', '',$datosHorasr2[$i]);
            }
            if ($menorR2>$datosHorasr2[$i]){
                $menorR2=(int)str_replace(' ', '',$datosHorasr2[$i]);
            }
        }
        array_push($datosR2,$menorR2,$mayorR2);

        for ($i=0;$i<count($datosHorasr3);$i++){

            if ($mayorR3<$datosHorasr3[$i]){
                $mayorR3=(int)str_replace(' ', '',$datosHorasr3[$i]);
            }
            if ($menorR3>$datosHorasr3[$i]){
                $menorR3=(int)str_replace(' ', '',$datosHorasr3[$i]);
            }
        }
        array_push($datosR3,$menorR3,$mayorR3);

        for ($i=0;$i<count($datosHorasr4);$i++){

            if ($mayorR4<$datosHorasr4[$i]){
                $mayorR4=(int)str_replace(' ', '',$datosHorasr4[$i]);
            }
            if ($menorR4>$datosHorasr4[$i]){
                $menorR4=(int)str_replace(' ', '',$datosHorasr4[$i]);
            }
        }
        array_push($datosR4,$menorR4,$mayorR4);

        for ($i=0;$i<count($datosHorasr5);$i++){

            if ($mayorR5<$datosHorasr5[$i]){
                $mayorR5=(int)str_replace(' ', '',$datosHorasr5[$i]);
            }
            if ($menorR5>$datosHorasr5[$i]){
                $menorR5=(int)str_replace(' ', '',$datosHorasr5[$i]);
            }
        }
        array_push($datosR5,$menorR5,$mayorR5);

        for ($i=0;$i<count($datosHorasr6);$i++){

            if ($mayorR6<$datosHorasr6[$i]){
                $mayorR6=(int)str_replace(' ', '',$datosHorasr6[$i]);
            }
            if ($menorR6>$datosHorasr6[$i]){
                $menorR6=(int)str_replace(' ', '',$datosHorasr6[$i]);
            }
        }
        array_push($datosR6,$menorR6,$mayorR6);

        for ($i=0;$i<count($datosHorasr7);$i++){

            if ($mayorR7<$datosHorasr7[$i]){
                $mayorR7=(int)str_replace(' ', '',$datosHorasr7[$i]);
            }
            if ($menorR7>$datosHorasr7[$i]){
                $menorR7=(int)str_replace(' ', '',$datosHorasr7[$i]);
            }
        }
        array_push($datosR7,$menorR7,$mayorR7);

        for ($i=0;$i<count($datosHorasr8);$i++){

            if ($mayorR8<$datosHorasr8[$i]){
                $mayorR8=(int)str_replace(' ', '',$datosHorasr8[$i]);
            }
            if ($menorR8>$datosHorasr8[$i]){
                $menorR8=(int)str_replace(' ', '',$datosHorasr8[$i]);
            }
        }
        array_push($datosR8,$menorR8,$mayorR8);

        for ($i=0;$i<count($datosHorasr9);$i++){

            if ($mayorR9<$datosHorasr9[$i]){
                $mayorR9=(int)str_replace(' ', '',$datosHorasr9[$i]);
            }
            if ($menorR9>$datosHorasr9[$i]){
                $menorR9=(int)str_replace(' ', '',$datosHorasr9[$i]);
            }
        }
        array_push($datosR9,$menorR9,$mayorR9);

        for ($i=0;$i<count($datosHorasr10);$i++){

            if ($mayorR10<$datosHorasr10[$i]){
                $mayorR10=(int)str_replace(' ', '',$datosHorasr10[$i]);
            }
            if ($menorR10>$datosHorasr10[$i]){
                $menorR10=(int)str_replace(' ', '',$datosHorasr10[$i]);
            }
        }
        array_push($datosR10,$menorR10,$mayorR10);

        for ($i=0;$i<count($datosHorasr11);$i++){

            if ($mayorR11<$datosHorasr11[$i]){
                $mayorR2=(int)str_replace(' ', '',$datosHorasr11[$i]);
            }
            if ($menorR11>$datosHorasr11[$i]){
                $menorR11=(int)str_replace(' ', '',$datosHorasr11[$i]);
            }
        }
        array_push($datosR11,$menorR11,$mayorR11);
        //print_r("hola");
        for ($i=0;$i<count($datosHorasr12);$i++){

            if (!empty($datosHorasr12[$i])){
                $mayorR12=0;
                $menorR12=0;

            }

            if ($mayorR12<$datosHorasr12[$i]){
                $mayorR12=(int)str_replace(' ', '',$datosHorasr12[$i]);
            }
            if ($menorR12>$datosHorasr12[$i]){
                $menorR12=(int)str_replace(' ', '',$datosHorasr12[$i]);
            }
        }
        array_push($datosR12,$menorR12,$mayorR12);


        //--------------------------------------------------------------------------------------
        //CREACIÓN DE MATRIZ PARA ENVIAR DATOS A LA VISTA
        $envioDatos=array();
        array_push($envioDatos,$datosR1,$datosR2,$datosR3,$datosR4,$datosR5,$datosR6,
            $datosR7,$datosR8,$datosR9,$datosR10,$datosR11,$datosR12);

        return $envioDatos;

    }

    public function DatosTemperaturaDias()
    {
        $datos=self::conexionS();
        $array=array();
        $array=$datos;

        //$fechaComparar = strtotime($fecha);

        $fechaS='2018-08-30';
        $fecha = date($fechaS);
        $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );;

        for ($i=0;$i<count($array);$i++){

            if ($array[$i][4] == $fechaS){

            }
        }

    }


    public function DatosTemperaturaMeses(){

        $datos=self::conexionS();
        $array=array();
        $array=$datos;

        $datosMes1=array();
        $datosMes2=array();
        $datosMes3=array();
        $datosMes4=array();
        $datosMes5=array();
        $datosMes6=array();
        $datosMes7=array();
        $datosMes8=array();
        $datosMes9=array();
        $datosMes10=array();
        $datosMes11=array();
        $datosMes12=array();

        //ERROR IMPRIME DOS VECES UNA FECHA 
        $mesElegido1= date('2018-01');
        $mes1=date("Y-m", strtotime($mesElegido1));
        print_r($mes1);
        $mesElegido2= date('2018-02');
        $mes2=date("Y-m", strtotime($mesElegido2));
        $mesElegido3= date('2018-03');
        $mes3=date("Y-m", strtotime($mesElegido3));
        $mesElegido4= date('2018-04');
        $mes4=date("Y-m", strtotime($mesElegido4));
        $mesElegido5= date('2018-05');
        $mes5=date("Y-m", strtotime($mesElegido5));
        $mesElegido6= date('2018-06');
        $mes6=date("Y-m", strtotime($mesElegido6));
        $mesElegido7= date('2018-07');
        $mes7=date("Y-m", strtotime($mesElegido7));
        $mesElegido8= date('2018-08');
        $mes8=date("Y-m", strtotime($mesElegido8));
        $mesElegido9= date('2018-09');
        $mes9=date("Y-m", strtotime($mesElegido9));
        $mesElegido10= date('2018-10');
        $mes10=date("Y-m", strtotime($mesElegido10));
        $mesElegido11= date('2018-11');
        $mes11=date("Y-m", strtotime($mesElegido11));
        $mesElegido12= date('2018-12');
        $mes12=date("Y-m", strtotime($mesElegido12));

        for ($i=0;$i<count($array);$i++){

            $fechaBD= $array[$i][4];
            $mesFecha=date("Y-m", strtotime($fechaBD));
            $fechaComparar=(int)str_replace('','',$mesFecha );

            if ($mes1==$mesFecha){
                array_push($datosMes1,$array[$i][1]);
            }
            if ($mes2==$mesFecha){
                array_push($datosMes2,$array[$i][1]);
            }
            if ($mes3==$mesFecha){
                array_push($datosMes3,$array[$i][1]);
            }
            if ($mes4==$mesFecha){
                array_push($datosMes4,$array[$i][1]);
            }
            if ($mes5==$mesFecha){
                array_push($datosMes5,$array[$i][1]);
            }
            if ($mes6==$mesFecha){
                array_push($datosMes6,$array[$i][1]);
            }
            if ($mes7==$mesFecha){
                array_push($datosMes7,$array[$i][1]);
            }
            if ($mes8==$mesFecha){
                array_push($datosMes8,$array[$i][1]);
            }
            if ($mes9==$mesFecha){
                array_push($datosMes9,$array[$i][1]);
            }
            if ($mes10==$mesFecha){
                array_push($datosMes10,$array[$i][1]);
            }
            if ($mes11==$mesFecha){
                array_push($datosMes11,$array[$i][1]);
            }
            if ($mes12==$mesFecha){
                array_push($datosMes12,$array[$i][1]);
            }
        }

        $datosRM1=array();$datosRM2=array();$datosRM3=array();
        $datosRM4=array();$datosRM5=array();$datosRM6=array();
        $datosRM7=array();$datosRM8=array();$datosRM9=array();
        $datosRM10=array();$datosRM11=array();$datosRM12=array();

        $mayorR1=0;$menorR1=50;
        $mayorR2=0;$menorR2=50;
        $mayorR3=0;$menorR3=50;
        $mayorR4=0;$menorR4=50;
        $mayorR5=0;$menorR5=50;
        $mayorR6=0;$menorR6=50;
        $mayorR7=0;$menorR7=50;
        $mayorR8=0;$menorR8=50;
        $mayorR9=0;$menorR9=50;
        $mayorR10=0;$menorR10=50;
        $mayorR11=0;$menorR11=50;
        $mayorR12=0;$menorR12=50;

        for ($i=0;$i<count($datosMes1);$i++){

            if ($mayorR1<$datosMes1[$i]){
                $mayorR1=(int)str_replace(' ', '',$datosMes1[$i]);
            }
            if ($menorR1>$datosMes1[$i]){
                $menorR1=(int)str_replace(' ', '',$datosMes1[$i]);
            }
        }
        array_push($datosRM1,$menorR1,$mayorR1);

        for ($i=0;$i<count($datosMes2);$i++){

            if ($mayorR2<$datosMes2[$i]){
                $mayorR2=(int)str_replace(' ', '',$datosMes2[$i]);
            }
            if ($menorR2>$datosMes2[$i]){
                $menorR2=(int)str_replace(' ', '',$datosMes2[$i]);
            }
        }
        array_push($datosRM2,$menorR2,$mayorR2);

        for ($i=0;$i<count($datosMes3);$i++){

            if ($mayorR3<$datosMes3[$i]){
                $mayorR3=(int)str_replace(' ', '',$datosMes3[$i]);
            }
            if ($menorR3>$datosMes3[$i]){
                $menorR3=(int)str_replace(' ', '',$datosMes3[$i]);
            }
        }
        array_push($datosRM3,$menorR3,$mayorR3);

        for ($i=0;$i<count($datosMes4);$i++){

            if ($mayorR4<$datosMes4[$i]){
                $mayorR4=(int)str_replace(' ', '',$datosMes4[$i]);
            }
            if ($menorR4>$datosMes4[$i]){
                $menorR4=(int)str_replace(' ', '',$datosMes4[$i]);
            }
        }
        array_push($datosRM4,$menorR4,$mayorR4);

        for ($i=0;$i<count($datosMes5);$i++){

            if ($mayorR5<$datosMes5[$i]){
                $mayorR5=(int)str_replace(' ', '',$datosMes5[$i]);
            }
            if ($menorR5>$datosMes5[$i]){
                $menorR5=(int)str_replace(' ', '',$datosMes5[$i]);
            }
        }
        array_push($datosRM5,$menorR5,$mayorR5);

        for ($i=0;$i<count($datosMes6);$i++){

            if ($mayorR6<$datosMes6[$i]){
                $mayorR6=(int)str_replace(' ', '',$datosMes6[$i]);
            }
            if ($menorR6>$datosMes6[$i]){
                $menorR6=(int)str_replace(' ', '',$datosMes6[$i]);
            }
        }
        array_push($datosRM6,$menorR6,$mayorR6);

        for ($i=0;$i<count($datosMes7);$i++){

            if ($mayorR7<$datosMes7[$i]){
                $mayorR7=(int)str_replace(' ', '',$datosMes7[$i]);
            }
            if ($menorR7>$datosMes7[$i]){
                $menorR7=(int)str_replace(' ', '',$datosMes7[$i]);
            }
        }
        array_push($datosRM7,$menorR7,$mayorR7);

        for ($i=0;$i<count($datosMes8);$i++){

            if ($mayorR8<$datosMes8[$i]){
                $mayorR8=(int)str_replace(' ', '',$datosMes8[$i]);
            }
            if ($menorR8>$datosMes8[$i]){
                $menorR8=(int)str_replace(' ', '',$datosMes8[$i]);
            }
        }
        array_push($datosRM8,$menorR8,$mayorR8);

        for ($i=0;$i<count($datosMes9);$i++){

            if ($mayorR9<$datosMes9[$i]){
                $mayorR9=(int)str_replace(' ', '',$datosMes9[$i]);
            }
            if ($menorR9>$datosMes9[$i]){
                $menorR9=(int)str_replace(' ', '',$datosMes9[$i]);
            }
        }
        array_push($datosRM9,$menorR9,$mayorR9);

        for ($i=0;$i<count($datosMes10);$i++){

            if ($mayorR10<$datosMes10[$i]){
                $mayorR10=(int)str_replace(' ', '',$datosMes10[$i]);
            }
            if ($menorR10>$datosMes10[$i]){
                $menorR10=(int)str_replace(' ', '',$datosMes10[$i]);
            }
        }
        array_push($datosRM10,$menorR10,$mayorR10);

        for ($i=0;$i<count($datosMes11);$i++){

            if ($mayorR11<$datosMes11[$i]){
                $mayorR11=(int)str_replace(' ', '',$datosMes11[$i]);
            }
            if ($menorR11>$datosMes11[$i]){
                $menorR11=(int)str_replace(' ', '',$datosMes11[$i]);
            }
        }
        array_push($datosRM11,$menorR11,$mayorR11);

        for ($i=0;$i<count($datosMes12);$i++){

            if ($mayorR12<$datosMes12[$i]){
                $mayorR12=(int)str_replace(' ', '',$datosMes12[$i]);
            }
            if ($menorR12>$datosMes12[$i]){
                $menorR12=(int)str_replace(' ', '',$datosMes12[$i]);
            }
        }
        array_push($datosRM12,$menorR12,$mayorR12);

        $matriz = array();
        array_push($matriz,$datosRM1,$datosRM2,$datosRM3,$datosRM4,
                        $datosRM5,$datosRM6,$datosRM7,$datosRM8,$datosRM9,
                        $datosRM10,$datosRM11,$datosRM12);
        //print_r($matriz);
        return $matriz;
    }


    public function DatosTemperaturaAños(){
        $datos=self::conexionS();
        $array=array();
        $array=$datos;

        // FECHAS POR AÑOS
        $fecha1= date('2018-02-03');
        $fechaage1=date("Y", strtotime($fecha1));
        $f1=(int)str_replace('','',$fechaage1 );

        $fecha2= date('2017-02-03');
        $fechaage2=date("Y", strtotime($fecha2));
        $f2=(int)str_replace('','',$fechaage2);

        $fecha3= date('2016-02-03');
        $fechaage3=date("Y", strtotime($fecha3));
        $f3=(int)str_replace('','',$fechaage3 );

        $fecha4= date('2015-02-03');
        $fechaage4=date("Y", strtotime($fecha4));
        $f4=(int)str_replace('','',$fechaage4 );

        $fecha5= date('2014-02-03');
        $fechaage5=date("Y", strtotime($fecha5));
        $f5=(int)str_replace('','',$fechaage5 );

        //ARRAYS PARA ALMACENAR DATOS POR AÑOS
        $datosAge1=array();
        $datosAge2=array();
        $datosAge3=array();
        $datosAge4=array();
        $datosAge5=array();

        for ($i=0;$i<count($array);$i++){
            //OBTENER FECHA Y CONVERTIR EL AÑO PARA HACER COMPARACIÓN
            $fechaBD= $array[$i][4];
            $añoFecha=date("Y", strtotime($fechaBD));
            $fechaComparar=(int)str_replace('','',$añoFecha );

            if ($fecha1==$fechaComparar){
                array_push($datosAge1,$array[$i][1]);
            }
            if ($fecha2==$fechaComparar){
                array_push($datosAge2,$array[$i][1]);
            }
            if ($fecha3==$fechaComparar){
                array_push($datosAge3,$array[$i][1]);
            }
            if ($fecha4==$fechaComparar){
                array_push($datosAge4,$array[$i][1]);
            }
            if ($fecha5==$fechaComparar){
                array_push($datosAge5,$array[$i][1]);
            }
        }

        //ARRAYS A RETORNAR
        $datosRH1=array();
        $datosRH2=array();
        $datosRH3=array();
        $datosRH4=array();
        $datosRH5=array();

        $mayorR1=0;$menorR1=50;
        $mayorR2=0;$menorR2=50;
        $mayorR3=0;$menorR3=50;
        $mayorR4=0;$menorR4=50;
        $mayorR5=0;$menorR5=50;

        for ($i=0;$i<count($datosAge1);$i++){

            if ($mayorR1<$datosAge1[$i]){
                $mayorR1=(int)str_replace(' ', '',$datosAge1[$i]);
            }
            if ($menorR1>$datosAge1[$i]){
                $menorR1=(int)str_replace(' ', '',$datosAge1[$i]);
            }
        }
        array_push($datosRH1,$menorR1,$mayorR1);

        for ($i=0;$i<count($datosAge2);$i++){

            if ($mayorR2<$datosAge2[$i]){
                $mayorR2=(int)str_replace(' ', '',$datosAge2[$i]);
            }
            if ($menorR2>$datosAge2[$i]){
                $menorR2=(int)str_replace(' ', '',$datosAge2[$i]);
            }
        }
        array_push($datosRH2,$menorR2,$mayorR2);

        for ($i=0;$i<count($datosAge3);$i++){

            if ($mayorR3<$datosAge3[$i]){
                $mayorR3=(int)str_replace(' ', '',$datosAge3[$i]);
            }
            if ($menorR3>$datosAge3[$i]){
                $menorR3=(int)str_replace(' ', '',$datosAge3[$i]);
            }
        }
        array_push($datosRH3,$menorR3,$mayorR3);

        for ($i=0;$i<count($datosAge4);$i++){

            if ($mayorR4<$datosAge4[$i]){
                $mayorR4=(int)str_replace(' ', '',$datosAge4[$i]);
            }
            if ($menorR4>$datosAge4[$i]){
                $menorR4=(int)str_replace(' ', '',$datosAge4[$i]);
            }
        }
        array_push($datosRH4,$menorR4,$mayorR4);

        for ($i=0;$i<count($datosAge5);$i++){

            if ($mayorR5<$datosAge5[$i]){
                $mayorR5=(int)str_replace(' ', '',$datosAge5[$i]);
            }
            if ($menorR5>$datosAge5[$i]){
                $menorR5=(int)str_replace(' ', '',$datosAge5[$i]);
            }
        }
        array_push($datosRH5,$menorR5,$mayorR5);

        //MATRIZ A RETORNAR

        $datosAgesG=array();
        array_push($datosAgesG,$datosRH1,$datosRH2,$datosRH3,$datosRH4,$datosRH5);

        return $datosAgesG;
    }
}