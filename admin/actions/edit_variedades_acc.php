<?php

require_once "../../function/autoload.php";


$postData = $_POST;




$id = $_GET['id'] ?? FALSE;




/*echo "<pre>";
    print_r($fileData);
    
    
    echo "</pre>";

    die();
   
   echo "<pre>";
    print_r($postData);
    
    
    echo "</pre>";*/




try {

    $variedades = new Variedades();

    if (!empty($fileData['tmp_name'])) {
        if (!empty($fileData['og_name'])) {
            (new Imagen())->borrarImagen(__DIR__ . "/../../img/". $postData['imagen_og']);
        }

        $imagen = (new Imagen())->subirImagen(__DIR__ .  "/../../img/", $fileData);

        
    }


    $articulos->edit($postData['tipo'], $id);
    header("location: ../index.php?sec=admin_variedades");
} catch (\Exception $v) {
    die("no se pudo cargar el articulo" . $v);
}
