<?php


$id_variedades = $_GET['clas'] ?? FALSE;

$miObjetoVariedades = new Articulos();


$productos = $miObjetoVariedades->catalogo_x_variedades($id_variedades);


$variedadesTitulo = (new Variedades())->get_x_id($id_variedades);

/*
echo "<pre>";

var_dump($productos);
echo "</pre>";

die();*/


?>
<h1 class="text-center my-5">Cafe <?= $variedadesTitulo->getTipo(true)  ?></h1>



<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $articulos) { ?>
    
    <div class="col-4">
        <div class="card mb-3">
            <img src="img/<?=$articulos->getPortada() ?>" class="card-img-top" alt="" style="max-height: 350px;">
        

            <div class="card-body">
                <p class="fs-6 m-0 fw-bold text-danger"><?=$articulos->getPeso() ?></p>
                <h5 class="card-title"><?=$articulos->getNombre() ?></h5>
                <p class="card-text"><?=$articulos->getNacionalidad ()?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Notas: <?=$articulos->getNotas() ?></li>
                <li class="list-group-item">Varietal: <?=$articulos->getVarietal() ?></li>
                <li class="list-group-item">Sensaciones: <?=$articulos->getSensaciones() ?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$articulos->getPrecio () ?></p>
                <a href="index.php?sec=productos&id=<?= $articulos->getId() ?>" class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>