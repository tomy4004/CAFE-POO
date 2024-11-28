<?php


require_once "../../function/autoload.php";

$posData = $_POST;

$login = (new Autenticacion())->log_in($posData['username'], $posData['pass']);


if($login){
    header('Location: ../index.php?sec=dashboard');
} else {
    header('Location: ../index.php?sec=login');
}



?>