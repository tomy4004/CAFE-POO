<?php
    $id = $_GET['id'] ?? FALSE;

    $articulos = (new Articulos())->get_x_id($id);



?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Esta seguro que desea eliminar el articulo : <?= $articulos->getNombre()?></h1>

        <a href="actions/delete_articulos_acc.php?id=<?= $articulos->getId() ?>" class="btn btn-danger d-block">Eliminar</a>




</div>