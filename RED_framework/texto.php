<?php

// INCLUIMOS TODOS LOS CONTROLADORES NECESARIOS PARA PODER VISUALIZAR LA PLANTILLA.
require_once "db/db.php";
require_once "controladores/controllerDB.php";
require_once "controladores/templates3.php";
require_once "controladores/controllerHead.php";
require_once "controladores/controllerMenuL.php";
require_once "controladores/controllerFooter.php";
require_once "controladores/controllerScripts.php";


// Linkeados CSS
$head = new HeadController();
$head -> head1();
// Menu Lateral
$menuLateral = new MenuLateralController();
$menuLateral -> menu_lateral1();
// Footer
$footer = new FooterController();
$footer -> footer1();
// Linkeados Scripts
$script = new ScriptsController();
$script -> scripts1();

?>