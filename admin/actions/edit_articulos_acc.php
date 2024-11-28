<?php

require_once "../../function/autoload.php";


$postData = $_POST;


$fileData = $_FILES['imagen'];

$id = $_GET['id'] ?? FALSE;
$fileData = $_FILES['imagen'] ?? FALSE;



/*echo "<pre>";
    print_r($fileData);
    
    
    echo "</pre>";

    die();
   
   echo "<pre>";
    print_r($postData);
    
    
    echo "</pre>";*/




try {

    $articulos = new Articulos();

    if (!empty($fileData['tmp_name'])) {
        if (!empty($fileData['og_name'])) {
            (new Imagen())->borrarImagen(__DIR__ . "/../../img/articulos/". $postData['imagen_og']);
        }

        $imagen = (new Imagen())->subirImagen(__DIR__ .  "/../../img/articulos", $fileData);

        $articulos->reemplazar_imagen($imagen, $id);
    }


    $articulos->edit($postData['nombre'], $postData['peso'], $postData['varietal'], $postData['notas'], $postData['sensaciones'],$postData['precio'], $id);
    header("location: ../index.php?sec=admin_articulos");
} catch (\Exception $a) {
    die("no se pudo cargar el articulo" . $a);
}
