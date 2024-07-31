<?php
/* Siletium est Aurum */

// compruebo si el controlador ha realizado alguna petición vía GET
if( isset($_GET['controlador']) && isset($_GET['accion']) )
{
    // si hubo alguna petición con la palabra controlador, lo guardo en una variable que llamo controlador
    $controlador = $_GET['controlador'];

    // lo mismo si hubo una petición con acción
    $accion = $_GET['accion'];

    // para que estoy recibiendo bien esta información la voy a imprimir
    print_r($controlador);
    print_r($accion);
}
require_once('vistas/template.php');
?>
