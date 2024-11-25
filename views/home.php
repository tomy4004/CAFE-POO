<?php


  








?>





<div class="d-flex justify-content-center p-5">
    <div>
        <h1 class="text-center mb-5 fw-bold">Bienvenido a la Tienda CaFeTEar</h1>
        <div class="row mb-5 d-flex align-items-center">

            <div class="col-7">
                <p class="borges fs-4 text-center"> “El olor del café y de los periódicos. El domingo y su tedio. La mañana y la entrevista,esa vana publicación de versos alegóricos de un colega feliz”. </p>
                <p class="fs-4 text-center aling">                 Jorge Luis Borges</p>
                <p class="fs-4 text-center">
                    Una taza de café es mucho más que una bebida caliente, el café es cultura, es historia, es misterio, es la causa que activa las endorfinas que brindan sensación de bienestar, muy parecida al amor.
                              
                </p>

            </div>
            <div class="col-5 mb-5">
                <img class="d-block mx-auto img-fluid" src="/img/covers/taza 2.jpg" alt="...">


                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/covers/bolsa.jpg" class="d-block w-100" alt="taza">
                        </div>
                        <div class="carousel-item">
                            <img src="img/covers/molinillo 2.jpg" class="d-block w-100" alt="molinillo">
                        </div>
                        <div class="carousel-item">
                            <img src="img/covers/taza.jpg" class="d-block w-100" alt="granos">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>



    </div>
</div>

<h1 class="text-center mb-4 ">Productos Destacados</h1>

<div class="row">

    <?php foreach ($productos as $infuciones) { ?>
    
    <div class="col-2">
        <div class="card mb-3">
            <img src="img/<?=$infuciones['portada'] ?>" class="card-img-top" alt="<?=$infuciones['clase'] ?>">
            <div class="card-body">
                <p class="fs-6 m-0 fw-bold text-danger"><?=$infuciones['clase'] ?> - <?=$infuciones['nacionalidad'] ?>   
                <h5 class="card-title"><?=$infuciones['nombre'] ?></h5>
                <p class="card-text"><?=($infuciones['sensaciones']) ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Notas: <?=$infuciones['notas'] ?></li>
                <li class="list-group-item">Varietal: <?=$infuciones['varietal'] ?></li>
                <li class="list-group-item">Nacionalidad: <?=$infuciones['peso'] ?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$infuciones['precio'] ?></p>
                <a href= "index.php?sec=productos&id=<?= $infuciones['id'] ?>"class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>
   

</div>

<div class="mt-3 mb-5">
    <h2 class="text-center">Ver Todo Nuestro Catalogo</h2>

    <a href="index.php?sec=todos">
        <img width="400" class="d-block mx-auto" src="img/covers/molinillo 2.jpg">


    </a>



</div>