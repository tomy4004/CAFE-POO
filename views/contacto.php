<?php

    $options = [
        "compra" => "compra",
        "cambio" => "cambio",
        "devolucion" => "Devolucion"

    ]





?>


<section class="container p-5 mb-3 rounded" style="background-color: #c97d7dfd;">

        <h1 class="text-center">Contactanos</h1>

        <div class="col-6 mx-auto">
            <form action="datos/procesar_datos.php" method="POST">
                <div class="mb-3">
                    <label class="mb-3 form-label" for="nombre">nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" require>
                </div>
                <div class="mb-3">
                    <label class="mb-3 form-label" for="apellido">apellido</label>
                    <input class="form-control" type="text" name="apellido" id="apellido" require>
                </div>
                <div class="mb-3">
                    <label class="mb-3 form-label" for="correo">correo</label>
                    <input class="form-control" type="email" name="correo" id="correo" require>
                </div>

                <p>Tipo de consulta</p>

                <?php foreach ($options as $key => $value) { ?>
                    <div class="mb-3">
                        <input type="radio" name="consulta[]" value="<?= $key ?>">
                        <label class="text-white" for=""><?= $value?></label>


                    </div>
                  
                <?php } ?>

                <label class="form-label text-whte" for = "mensaje">mensaje</label>
                <textarea class="form-control" name = "mensaje" id="mensaje">mensaje</textarea>
                <div class="">

                <div class="text-center">
                    <input class="btn-succes" type="submit" value="enviar"">

            </form>

        </div>

</section>