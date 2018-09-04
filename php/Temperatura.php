<?php


class Conexion{

    public function conexionS()
    {
        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion, "bdinvernadero");
        $consulta = "select * from dato where Tipo='Temperatura'";
        $resultado = mysqli_query($conexion, $consulta);

        while ($row = mysqli_fetch_array($resultado)) {
            $datos = json_encode($row);
        }

        return $datos;

    }
}

class Temperatura{


    public function DatosTemperaturaHoras()
    {

        $datos= new Conexion();
        $datos->conexionS();
        $array = json_encode($datos);

        for ($i=0; $i<count($array) ; $i++) {

          $fecha = '2018-08-22';
          $tipo = 'Temperatura';
          $datosHoras = array();
          $hora1 = '00:00:00';
          $hora2 = '02:00:00';
          if ($fecha=$array[$i]->Fecha && $hora1>=$array[$i]->Hora && $hora2<=$array[$i]->Hora && $tipo=$array[i]->Tipo ) {
            $datosHoras= add($array[$i]->Dato);

            $menor = 0;
            $mayor=0;

            for ($j=0; $j<count($datosHoras); $j++){
                if ($datosHoras[$j]<$menor){
                    $datoMin=$datosHoras[$j];
                } else if ($datosHoras[$j]>$mayor){
                    $datoMax=$datosHoras[$j];
                }
            }

          }
        }

        return $datoMax;
        echo " <h1> $datoMax </h1>";


    }

    public function DatosTemperaturaDias()
    {

    }

    public function DatosTemperaturaMeses()
    {

    }

    public function DatosTemperaturaAges()
    {

    }
}
?>
