<?php

    class Imagen{

        public function subirImagen($directorio,$datosArchivo){

                if(!empty($datosArchivo['tmp_name'])){
                    //le vamos a dar un nuevo nombre a la imagen 
                    $og_name = (explode(".",$datosArchivo['name']));
                    $extension = end($og_name);
                    $filename = time() . ".$extension";

                    $fileUpload = move_uploaded_file($datosArchivo['tmp_name'],"$directorio/$filename");

                    if (!$fileUpload) {
                        throw new Exception("no se pudo cargar la imagen");
                    
                    }else {
                        return $filename;
                    }
                }

        }

        /*borrar <imagen */ 

            public function borrarImagen($archivo){
                if(file_exists($archivo)){
                    $fileDelete = unlink($archivo);

                    if(!$fileDelete){
                        throw new Exception("No se borran las imagenes");
                    }else {
                        return TRUE;

                    }

            }else {
                return FALSE;
        }
    }             
        
}    




?>