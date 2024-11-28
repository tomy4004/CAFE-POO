<?php

    require_once "../../function/autoload.php";
   

    $postData = $_POST;


 

    

   /*echo "<pre>";
    print_r($fileData);
    
    
    echo "</pre>";

    die();
   
   echo "<pre>";
    print_r($postData);
    
    
    echo "</pre>";*/




    try {
        


        (new Variedades())->insert($postData['tipo']);
        header("location: ../index.php?sec=admin_variedades");
<<<<<<< HEAD
    } catch (\Exception $v ) {
        die("no se pudo cargar el variedad". $v);
=======
    } catch (\Exception $a ) {
        die("no se pudo cargar el personaje". $a);
>>>>>>> b113fc67ecc959c4eba98a21caa621aa78ff1326
    }


?>