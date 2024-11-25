
<?php

require_once "classes/Conexion.php";
require_once "classes/Variedades.php";
require_once "classes/Articulos.php";
require_once "classes/Nacionalidad.php";



$secciones_validas = [
     "home" => [
        "titulo" => "Bienvenidos"
     ],
     "envios" => [
      "titulo" => "Politica de envios"
     ],
     "quienes_somos" => [
        "titulo" => "¿Quienes Somos?"
     ],
     "infuciones" => [
        "titulo" => "Nuestro Catalogo"
     ],
     "productos" => [
       "titulo" => "Detalle de producto"
     ],
     "todos" => [
      "titulo" => "Todos los productos"
     ],
     "contacto" => [
        "titulo" => "Contacto"
     ],
     "creador" => [
        "titulo" => "creador"
     ],

  ];


/*segundo paso para llamar la funcion de las secciones*/
$seccion = $_GET["sec"] ?? "home";

if(!array_key_exists($seccion,$secciones_validas,)){
  $vista = "404";
  $titulo = "404 - pagina no encontrada";

}else {
  $vista = $seccion;
  $titulo = $secciones_validas[$seccion]["titulo"];
}


?>


















<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto KFET AR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    
  
  <nav class="navbar navbar-expand-lg" style="background-color:#555" data-bs-theme="dark">
  <div class="container-fluid ">
  
    <a class="navbar-brand " href="index.php">
    <img width="70px" heigth = "50" src="img/covers/Logo_cafetear.png" alt="">
    Tienda CaFeTEar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?sec=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=quienes_somos">¿Quienes Somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=infuciones&clas=3">Tostado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=infuciones&clas=2">En Granos</a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=infuciones&clas=1">Torrado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=envios">Envios
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=contacto">Contacto
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=creador">Creador
          </a>
        </li>

        
      </ul>
    </div>
     
   
  </div>
</nav>

<main class="container">

        <?php
           
            require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
        ?>

 </main>



<footer class="bg-dark text-center py-3 mt-5 text-white ">
  
        <p  class="fs-3">Todos los derechos reservados - 2024 - CaFeTEar</p>


   </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>