<?php

session_start();

    function autoloadClases($nombreClase){

        //variable magic Dir -> ruta absoluta ->la carpeta base donde estoy ejecutando

        $archivoClase = __DIR__ . "/../classes/" . $nombreClase . ".php";

        if (file_exists($archivoClase)) {
            require_once $archivoClase;
            # code...
        }




    }


    spl_autoload_register("autoloadClases");







?>