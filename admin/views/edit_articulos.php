<?php
    
    $id = $_GET['id'] ?? FALSE;

    $articulos = (new Articulos())->get_x_id($id);


?>



<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Editar Articulos</h1>

        <div class="row mb-5 d-flex align-items">
            <form class="row g-3" action="actions/edit_articulos_acc.php?id=<?= $articulos->getId()?>" method="POST" enctype="multipart/form-data">
                
                <div class="col-6 mb-3">
                    <label class="form-label" for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$articulos->getNombre() ?>">
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="alias">varietal:</label>
                    <input type="text" class="form-control" name="alias" id="varietal" value="<?=$articulos->getVarietal() ?>">
                </div>

              

                <div class="col-2 mb-3">
                    <label class="form-label" for="imagen">Imagen Actual:</label>
                    <img width="150px" src="../img/<?= $articulos->getPortada()?>" alt="">
                    <input type="hidden" class="form-control" name="imagen_og" id="imagen" value="<?= $articulos->getPortada()?>" >
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label" for="imagen">Reemplazar Imagen</label>
                    <input type="file" class="form-control" name="imagen" id="imagen"  > 
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="peso">Peso:</label>
                    <input type="number"  class="form-control" name="peso" id="primera aparicion" value="<?=$articulos->getPeso() ?>" require>
                    <div class="form-text">Ingresar el el peso</div>
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label" for="notas">Notas:</label>
                    <input type="text"  class="form-control" name="notas" id="notas" value="<?=$articulos->getNotas() ?>" require>
                    <div class="form-text">Ingresar Notas</div>
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label" for="sensaciones">Sensaciones:</label>
                    <input type="text"  class="form-control" name="sensaciones" id="sensaciones" value="<?=$articulos->getSensaciones() ?>" require>
                    <div class="form-text">Ingresar Sensaciones</div>
                </div>

                

                


                <div class="col-6 mb-3">
                    <label class="form-label" for="precio">Precio:</label>
                    <input type="text" class="form-control" name="precio"  id="precio" require>
                    <div class="form-text">Ingresar Precio</div>
                </div>
                </div>


                <button type="text">Cargar Articulo</button>

                


            </form>

        </div>

    </div>




</div>