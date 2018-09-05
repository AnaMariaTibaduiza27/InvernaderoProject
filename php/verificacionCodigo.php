<?php
/**
 * Created by PhpStorm.
 * User: AnaMariaTibaduiza
 * Date: 5/09/2018
 * Time: 11:14 AM
 */

class verificacionCodigo
{
    static public function verificarC (){
        try {
            $codigo="123invernadero";
            $codigoIngresado= $_POST['codigo'];

            if (strcmp($codigo==$codigoIngresado)){
                header("Location: ../Vista/preControl.php?respuesta=correcto");
            } else{
                header("Location: ../Vista/preControl.php?respuesta=error");
            }

        } catch (Exception $e) {
            header("Location: ../Vista/preControl.php?respuesta=error");
        }
    }
}