<?php
/**
 * Created by PhpStorm.
 * User: AnaMariaTibaduiza
 * Date: 5/09/2018
 * Time: 11:14 AM
 */
$vr = new verificacionCodigo();
if (@$_GET['action'] == "login"){
    $vr->verificarC();
}
class verificacionCodigo
{
        function verificarC (){
        try {
            $codigo="123invernadero";
            $codigoIngresado= $_POST['codigo'];
            if ($codigo == $codigoIngresado){
                header("Location: ../Vista/index.php") ;
            } else{
                header("Location: ../Vista/preControl.php?respuesta=error");
            }
        } catch (Exception $e) {
            var_dump($e);
            header("Location: ../Vista/preControl.php?respuesta=error");
        }
    }
}