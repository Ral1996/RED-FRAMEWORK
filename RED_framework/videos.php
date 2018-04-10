<?php

// INCLUIMOS TODOS LOS CONTROLADORES NECESARIOS PARA PODER VISUALIZAR LA PLANTILLA.
require_once "controladores/templates2.php";
require_once "controladores/controllerHead.php";
require_once "controladores/controllerMenuL.php";
require_once "controladores/controllerFooter.php";
require_once "controladores/controllerScripts.php";

// Cuerpo Formulario Principal
$template2 = new TemplateVideos();
$template2 -> template2();
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