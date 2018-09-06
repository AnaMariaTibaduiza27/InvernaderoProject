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

        for ($i=0;$i<count($datosHorasr12);$i++){

            if ($mayorR12<$datosHorasr12[$i]){
                $mayorR12=(int)str_replace(' ', '',$datosHorasr12[$i]);
            }
            if ($menorR12>$datosHorasr12[$i]){
                $menorR12=(int)str_replace(' ', '',$datosHorasr12[$i]);
            }
        }
        array_push($datosR12,$menorR12,$mayorR12);

        //--------------------------------------------------------------------------------------
        //CREACIÓN DE MATRIZ PARA ENVIAR DATOS A LA vISTA
        $envioDatos=array();
        array_push($envioDatos,$datosR1,$datosR2,$datosR3,$datosR4,$datosR5,$datosR6,
            $datosR7,$datosR8,$datosR9,$datosR10,$datosR11,$datosR12);

        return $envioDatos;

    }

    public function DatosTemperaturaDias()
    {
        $array=self::conexionS();

        $fechaS='2018-08-22';
        $fecha = date($fechaS);
        $nuevafecha = strtotime ( '-7 day' , strtotime ( $fecha ) ) ;
        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

        print_r($nuevafecha);
    }
}