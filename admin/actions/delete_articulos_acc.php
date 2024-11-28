<?php

require_once "../../function/autoload.php";






$id = $_GET['id'] ?? FALSE;

$articulos = (new Articulos())->get_x_id($id);








try {

   

    if(!empty($articulos->getPortada())) {
    
            (new Imagen())->borrarImagen(__DIR__ . "/../../img/". $articulos->getPortada());
        }

   
$articulos->delete();


    
    header("location: ../index.php?sec=admin_articulos");
} catch (\Exception $a) {
    die("no se pudo eliminar el articulo" . $a);
}
