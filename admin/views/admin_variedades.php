<?php
$variedades = (new Variedades())->lista_completa();

/* echo "<pre>"
    print_r($personaje);
    echo "</pre>";*/




?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administrador de Variedades</h1>
        <div class="row mb-5 d-flex aling-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tipo</th>
                    
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($variedades as $v) { ?>
                        <tr> 
                            <td><img src="../img/variedades/<?= $v->getImagen()?>" class="img-fluid rounded" alt=""></td>
                            <th scope="row"><?= $v->getId() ?></th>
                            <td><?= $v->getTipo() ?></td>
                           
                            <td>
                                <a class="btn btn-warning" href="index.php?sec=edit_variedades&id=<?= $p->getId()?>">Editar</a>

                                <a class="btn btn-danger" href="index.php?sec=delete_variedades&id=<?= $p->getId()?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>


            </table>

            <a class="btn btn-primary mt-5" href="index.php?sec=add_personajes">Cargar nuevo personaje</a>

        </div>



    </div>





</div>