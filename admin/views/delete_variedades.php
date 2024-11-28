<?php
    $id = $_GET['id'] ?? FALSE;

    $variedades = (new Variedades())->get_x_id($id);



?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Esta seguro que desea eliminar el variedad : <?= $variedades->getTipo()?></h1>

        <a href="actions/delete_variedades_acc.php?id=<?= $variedades->getId() ?>" class="btn btn-danger d-block">Eliminar</a>




</div>