<?php

require_once "../function/autoload.php";




$secciones_validas = [

  "login" => [
        "titulo" => "Inicio de sesion"
  ],
     "dashboard" => [
        "titulo" => "Panel de control"
     ],
     "admin_articulos" => [
        "titulo" => "Administrador de articulos"
     ],
     "add_articulos"=> [
        "titulo" => "Agregar Articulos"

     ],
     "edit_articulos"=> [
        "titulo" => "Editar Articulos"

     ],
     "delete_articulos"=>[
       "titulo" => "Eliminar Articulos"
     ],
     "admin_variedades" =>[
      "titulo" => "Administar Variedades"
     ],
     "add_variedades" =>[
      "titulo" => "Cargar Variedades"
     ],
     
     "edit_variedades" => [
      "titulo" => "Editar Variedades"
     ],

     "delete_variedades" => [
      "titulo" => "Borrar variedades"
     ]


  ];




  $seccion = $_GET['sec'] ?? "dashboard";


  /* Buscar si existe los que viene por sec , y si esta en el array secciones_validas  */

  if(!array_key_exists($seccion, $secciones_validas)){
      $vista= "404";
      $titulo = "404 - pagina no encontrada";
  }else {
     $vista= $seccion;
     $titulo = $secciones_validas[$seccion]['titulo'];
  }



  


  
  


 


?>


<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda :: <?= $titulo  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>

  <!-- Navegacion -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CaFeTEar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?sec=admin_articulos">Admin de Articulos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?sec=admin_comics">Admin de Variedades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?sec=login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?sec=auth_logout.php">LogOut</a>
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

    <footer class="bg-secondary">
        <p class="text-light text-center p-4">Todos los derechos reservados - 2024 - cafetear - CFP20</p>
    </footer>

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>