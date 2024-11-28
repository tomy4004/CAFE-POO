<?php
$articulos = (new Articulos())->catalogo_completo();

/*  echo "<pre>";
    print_r($articulos);
    echo "</pre>";
 */



?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administrador de Articulos</h1>
        <div class="row mb-5 d-flex aling-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width=15% >Portada</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Varietal</th>
                        <th scope="col">Notas</th>
                        <th scope="col">Sensaciones </th>
                        <th scope="col">Precio</th>
                       
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articulos as $a) { ?>
                        <tr> 
                            <td><img src="../img/<?= $a->getPortada() ?>" class="img-fluid rounded" alt=""></td>
                            <th scope="row"><?= $a->getNombre() ?></th>
                            <td><?= $a->getVarietal() ?></td>
                            <td><?= $a->getNotas() ?></td>
                            <td><?= $a->getSensaciones() ?></td>
                            <td><?= $a->getPeso() ?></td>
                            <td><?= $a->getPrecio() ?></td>
                            
                            <td>
                                <a class="btn btn-warning" href="index.php?sec=edit_articulos&id=<?= $a->getId()?>">Editar</a>

                                <a class="btn btn-danger" href="index.php?sec=delete_articulos&id=<?= $a->getId()?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>


            </table>

            <a class="btn btn-primary mt-5" href="index.php?sec=add_articulos">Cargar nuevo articulo</a>

        </div>



    </div>





</div>