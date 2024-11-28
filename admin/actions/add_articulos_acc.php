<?php

    require_once "../../function/autoload.php";
   

    $postData = $_POST;


    $fileData = $_FILES['imagen'];

    




    try {
        $imagen = (new Imagen())->subirImagen(__DIR__ .  "/../../img/", $fileData);


        (new Articulos())->insert(
            $postData['nombre'],
            $postData['peso'],
            $postData['varietal'],
            $postData['notas'],
            $postData['sensaciones'],
            $postData['precio'],
            $imagen,
            $postData['id_variedades'],
            $postData['id_nacionalidad'],
          

        );
            
        

        header("location: ../index.php?sec=admin_articulos");
    } catch (\Exception $a ) {
        die("no se pudo cargar el artivulo". $a);
    }


?>