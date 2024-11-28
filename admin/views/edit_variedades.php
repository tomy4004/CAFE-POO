<?php
    
    $id = $_GET['id'] ?? FALSE;

    $variedades = (new Variedades())->get_x_id($id);


?>



<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Editar variedad</h1>

        <div class="row mb-5 d-flex align-items">
            <form class="row g-3" action="actions/edit_variedades_acc.php?id=<?= $variedades->getId()?>" method="POST" enctype="multipart/form-data">
                
                <div class="col-6 mb-3">
                    <label class="form-label" for="tipo">Tipo:</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" value="<?=$variedades->getTipo() ?>">
                </div>

               


                <button type="text">Editar Variedad</button>

                


            </form>

        </div>

    </div>




</div>