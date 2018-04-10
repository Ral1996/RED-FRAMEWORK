<!DOCTYPE html>
<html lang="es">

<body>

<div class="wrapper">
    

    <div class="main-panel">
       
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                    <?php
                        include_once "controladores/controladorVarios.php";
                        echo "$variosControlador->titulo";
                    ?>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Raúl Portilo
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Usuario</a></li>
                                <li><a href="#">Cerrar Sesión</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenedor Central -->
        <div class="content">
            <div class="container-fluid">
                <center><h3><strong>Bienvenidos a el Panel Informátivo de RED - FRAMEWORK</strong></h3></center>
                <br><br>
                <p class="text-justify">
                    <strong>RED - FRAMEWORK</strong> es un mini-framework desarrollado en PHP, aplicandole además el patrón MVC
                        (Modelo,Vista,Controlador), para una mejor comprensión de el Patrón MVC lo describiremos de la siguiente forma:
                        Modelo-vista-controlador (MVC), es un patrón de arquitectura de software, que separa los datos y la lógica de 
                        negocio de una aplicación de la interfaz de usuario y el módulo encargado de gestionar los eventos y las
                        comunicaciones. Para ello MVC propone la construcción de tres componentes distintos que son el modelo, la vista
                        y el controlador, es decir, por un lado define componentes para la representación de la información, y por otro
                        lado para la interacción del usuario.
                </p>
                <br><br>
                <div class="col-md-12">
                        <div class="col-md-8" id="infoDesarrollador">
                            <h3>Datos desarrollador:</h3>
                            <p><strong>Carrera: </strong>Ingeniería de Sistemas Informáticos.</p>
                            <p><strong>Catedrá: </strong>Ingeniería de Software.</p>
                            <p><strong>Docente: </strong>Ing.Ligia Astrid Bonilla Hernández.</p>
                            <p><strong>Desarrollador: </strong>Raúl Mauricio Portillo Muñoz.</p>
                            <p><strong>Carnet: </strong>PM13004</p>
                        </div>
                        <div class="col-md-4" id="FotoDesarrollador">
                            <img src="vistas/assets/img/p2.png" class="img-responsive" alt="">
                        </div>
                </div>
            </div>
        </div>
        <!-- Final Contenedor Central -->

    </div>
</div>


</body>
</html>
