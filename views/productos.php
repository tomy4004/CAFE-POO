<?php

require_once "libraries/productos.php";

$id = $_GET["id"] ?? FALSE;


$infuciones = producto_x_id($id);









?>

<div class="row">
    <?php if (isset($infuciones)) { ?>
        <h1 class="text-center my-5"> <?= $infuciones["formato de cafe"] ?>  <?= $infuciones["nombre"] ?>
            # <?= $infuciones["nacionalidad"] ?></h1>
        <div class="col">
            <div class="card mb-5">
                <div class="row g-0">
                    <div class="col-5">
                        <img class="img-fluid rounded-start" src="img/<?= $infuciones["portada"] ?>" alt="<?= $infuciones["nombre"] ?>">

                    </div>
                    <div class="col-7 d-flex flex-colum p-3">
                        <div class="card-body flex-grow-0">
                            <h2 class="fs-4 m-0 fw-bold text-danger"><?= $infuciones["nombre"] ?> <?= $infuciones["formato de cafe"] ?>
                                </h2>
                                <h2 class="fs-4 m-0 fw-bold text-danger"><?= $infuciones["nacionalidad"] ?>
                            
                            <h2 class="card-title fs-2 mb-4"><?= $infuciones["peso"] ?>

                            </h2>
                            <h3 class="card-text ">varietal - <?= $infuciones["varietal"] ?></h3>

                            <div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Notas : <?= $infuciones["notas"] ?></li>
                                    <li class="list-group-item">Sensaciones : <?= $infuciones["sensaciones"] ?></li>
                                    <li class="list-group-item">Altura :<?= $infuciones["altura"] ?></li>

                                </ul>

                                <div class="card-body">
                                 <h2 class="card-title fs-6 mb-4 text-danger">Medios de Pago</h2>
                                 <div class="d-flex">
                                     <i class="fa-brands fa-cc-visa me-3 fs-3 text-info"></i>
                                     <i class="fa-brands fa-cc-mastercard me-3 fs-3 text-warning"></i>
                                     <i class="fa-brands fa-cc-paypal me-3 fs-3 text-primary"></i>
                                     <i class="fa-solid fa-money-bill me-3 fs-3 text-primary-emphasis"></i>
                                     <i class="fa-solid fa-credit-card me-3 fs-3 text-success"></i>
                                  </div>
                            </div>
                                <div class="card-body">
                                    <p class="fs-3 mb-3 fw-bold text-danger text-center"><?= $infuciones["precio"] ?></p>
                                    <a href="#" class="btn btn-danger w-100 fw-bold">Comprar</a>

                                </div>
                                
                            </div>
                            </div>


                        </div>


                    </div>


                </div>
            </div>


        </div>




</div>
<?php } else { ?>

    <h2 class="text-center m-5 text-danger">no se encontro producto</h2>
<?php } ?>

