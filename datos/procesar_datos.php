<?php

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $listado = $_POST["consulta"];
    $mensaje = $_POST["mensaje"];








?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda :: mensaje enviado</title>

        <style>
            body {
                font-family: arial,helvetica,sans-serif;
                background-color: #e4a5a5fd;
                text-align: center;


            }
            h1 {
                color: #333;


            }
            h2 {
                color: #555;
            }
            p{
                color: #333;
            }

            




        </style>








</head>
<body>
    <h1>Tu consulta fue enviada con exito</h1>
    <h2>Resumen de la consulta</h2>
    <p>Nombre : <?= $nombre ?></p>
    <p>Apellido : <?= $apellido ?></p>
    <P>Email : <?= $correo ?></P>
    
    <h3>Tipo de consulta</h3>
    <?php
    foreach ($listado as $value) {
        echo "<p> $value </p>";
    }
?>
<h3>Mensaje</h3>
<p><?= $mensaje ?></p>

<img width="400px" src="img/covers/descarga.jpeg" alt="exito imagen">



    
</body>
</html>