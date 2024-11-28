<?php

require_once "../../function/autoload.php";






$id = $_GET['id'] ?? FALSE;

$variedades = (new Variedades())->get_x_id($id);








try {

   


   
$variedades->delete();


    
    header("location: ../index.php?sec=admin_variedades");
} catch (\Exception $v) {
    die("no se pudo eliminar la variedad" . $v);
}