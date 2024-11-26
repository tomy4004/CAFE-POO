<?php


    $nacionalidad = (new Nacionalidad())->lista_completa();
    $variedades = (new Variedades())->lista_completa();
  


?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Agregar nuevo Articulo</h1>

        <div class="row mb-5 d-flex align-items">
            <form class="row g-3" action="actions/add_articulos_acc.php" method="POST" enctype="multipart/form-data">
                
                <div class="col-6 mb-3">
                    <label class="form-label" for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" require>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="alias">Variedades:</label>
                    <select class="form-select" name="id_variedades" id="id_variedades">
                    <option value="" selected disabled>elija una opcion</option>
                    <?php foreach($variedades as $v) {?>
                        <option value="<?= $v->getId() ?>"><?= $v->getTipo() ?></option>
                    <?php } ?>

                    </select>
                    
                </div>


                <div class="col-6 mb-3">
                    <label class="form-label" for="alias">Nacionalidad:</label>
                    <select class="form-select" name="id_nacionalidad" id="id_nacionalidad">
                    <option value="" selected disabled>elija una opcion</option>
                    <?php foreach($nacionalidad as $n) {?>
                        <option value="<?= $n->getId() ?>"><?= $n->getPais() ?></option>
                    <?php } ?>

                    </select>
                    
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="nombre">Peso:</label>
                    <input type="number" class="form-control" name="peso" id="peso" require>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="nombre">Varietal:</label>
                    <input type="text" class="form-control" name="varietal" id="varietal" require>
                </div>


                <div class="col-6 mb-3">
                    <label class="form-label" for="imagen">Notas:</label>
                    <input type="text" class="form-control" name="notas" id="notas" >
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="imagen">Sensaciones:</label>
                    <input type="text" class="form-control" name="sensaciones" id="sensaciones" >
                </div>

                
                

                

               

                <div class="col-6 mb-3">
                    <label class="form-label" for="nombre">Precio:</label>
                    <input type="text" class="form-control" name="precio" id="precio" require>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="imagen">Imagen:</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" >
                </div>






                <button type="text" href="index.php?sec=add_articulos">Cargar Articulo</button>

                


            </form>

        </div>

    </div>




</div>
