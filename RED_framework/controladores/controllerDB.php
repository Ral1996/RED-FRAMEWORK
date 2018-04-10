<?php

    //Llamamos al modelo
    require_once "modelos/modeloDB.php";
    $per = new DatoConexion();
    $datos = $per->get_personas();

    //Llamada a la vista
    require_once "vistas/template3.php";

?>