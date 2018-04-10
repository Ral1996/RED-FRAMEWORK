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
                        echo "$variosControlador->titulo4";
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
                <center><h3><strong>Bienvenidos a el apartado de Texto</strong></h3></center>
                <br><br>
                <p class="text-justify"><?php echo "$variosControlador->descripcionTexto";?></p>
                <br><br>
                <h3>Datos traidos desde la Base de Datos</h3>
                <?php
                    foreach($datos as $dato)
                    {
                        echo $dato["nombre"]."<br>";
                    }
                ?>

                
            </div>
        </div>
        <!-- Final Contenedor Central -->

    </div>
</div>


</body>
</html>
