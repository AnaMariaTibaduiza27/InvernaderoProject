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
        mysqli_select_db($conexion, "bdinvernadero");
        $consulta = "select * from dato where Tipo='Temperatura'";
        $resultado = mysqli_query($conexion, $consulta);

        $array=[];
        while ($row = mysqli_fetch_array($resultado)) {
            $array = ($row);
        }

        return $array;

    }


    public function DatosTemperaturaHoras()
    {


        $array=self::conexionS();

        for ($i=0; $i<count($array) ; $i++) {

            $fecha = '2018-08-22';
            $tipo = 'Temperatura';
            //$datosHoras = array();

            $horaR1 = strtotime('00:00:00');
            $horaR2 = strtotime('02:00:00');
            $horaR3 = strtotime('02:05:00');
            $horaR4 = strtotime('04:00:00');
            $horaR5 = strtotime('04:05:00');
            $horaR6 = strtotime('06:00:00');
            $horaR7 = strtotime('06:05:00');
            $horaR8 = strtotime('08:00:00');
            $horaR9 = strtotime('08:05:00');
            $horaR10 = strtotime('10:00:00');
            $horaR11 = strtotime('10:05:00');
            $horaR12 = strtotime('12:00:00');
            $horaR13 = strtotime('12:05:00');
            $horaR14 = strtotime('14:00:00');
            $horaR15 = strtotime('14:05:00');
            $horaR16 = strtotime('16:00:00');
            $horaR17 = strtotime('16:05:00');
            $horaR18 = strtotime('18:00:00');
            $horaR19 = strtotime('18:05:00');
            $horaR20 = strtotime('20:00:00');
            $horaR21 = strtotime('20:05:00');
            $horaR22 = strtotime('22:00:00');
            $horaR23 = strtotime('22:05:00');
            $horaR24 = strtotime('24:00:00');

            $hora1= $array[$i][5];
            $hora1F = strtotime($hora1);



            if ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR1 && $hora1F<=$horaR2) {
                $datosHorasr1=array_push($datosHorasr1,$array[$i][1]);


            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR3 && $hora1F<=$horaR4){
                $datosHorasr2=array_push($datosHorasr2,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR5 && $hora1F<=$horaR6){
                $datosHorasr3=array_push($datosHorasr3,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR7 && $hora1F<=$horaR8){
                $datosHorasr4=array_push($datosHorasr4,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR9 && $hora1F<=$horaR10){
                $datosHorasr5=array_push($datosHorasr5,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR11 && $hora1F<=$horaR12){
                $datosHorasr6=array_push($datosHorasr6,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR13 && $hora1F<=$horaR14){
                $datosHorasr7=array_push($datosHorasr7,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR15 && $hora1F<=$horaR16){
                $datosHorasr8=array_push($datosHorasr8,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR17 && $hora1F<=$horaR18){
                $datosHorasr9=array_push($datosHorasr9,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR19 && $hora1F<=$horaR20){
                $datosHorasr10=array_push($datosHorasr10,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR21 && $hora1F<=$horaR22){
                $datosHorasr11=array_push($datosHorasr11,$array[$i][1]);

            } elseif ('2018-08-22'==$array[$i][5] && $hora1F>=$horaR23 && $hora1F<=$horaR24){
                $datosHorasr12=array_push($datosHorasr12,$array[$i][1]);

            }
        }



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