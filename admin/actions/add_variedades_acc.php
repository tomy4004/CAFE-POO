<?php

    require_once "../../function/autoload.php";
   

    $postData = $_POST;


    $fileData = $_FILES['imagen'];

    

   /*echo "<pre>";
    print_r($fileData);
    
    
    echo "</pre>";

    die();
   
   echo "<pre>";
    print_r($postData);
    
    
    echo "</pre>";*/




    try {
        $imagen = (new Imagen())->subirImagen(__DIR__ .  "/../../img/variedades", $fileData);


        (new Variedades())->insert($postData['tipo']);
        header("location: ../index.php?sec=admin_variedades");
    } catch (\Exception $a ) {
        die("no se pudo cargar el personaje". $a);
    }


?>