<?php
// incluyo el archivo controlador_pagina donde tengo la clase ControladorPaginas
include_once('controladores/controlador_paginas.php');

// creo una instancia de la clase ControladorPaginas y la guardo en $controlador
$controlador = new ControladorPaginas();

// accedo al método inicio de la clase controlador
$controlador->inicio();

?>