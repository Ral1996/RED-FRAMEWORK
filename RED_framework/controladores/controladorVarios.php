<?php

    class VariosController
    {
        public $titulo = "Dashboard";
        public $titulo2 = "Imágenes";
        public $titulo3 = "Videos";
        public $titulo4 = "Texto";
        public $descripcionTexto = "
        
        ¿Que es el patrón MVC?
        
        El patrón de diseño (de software) MVC se encarga de separar la lógica de negocio de la interfaz de usuario y
        es el mas utilizado en aplicaciones web, framework, etc, ya que facilita la funcionalidad, mantenibilidad, y 
        escalabilidad del sistema, de forma comoda y sencilla, a la vez que ayuda no mezclar lenguajes de programación
        en el mismo código, el conocido “código espagueti”.MVC divide las aplicaciones en tres niveles de abstracción:
        Modelo: es la lógica de negocios. Es decir las clases y métodos que se comunican directamente con la base de 
        datos.Vista: es la encargada de mostrar la información al usuario, con de forma gráfica y legible.
        Controlador: el intermediario entre la vista y el modelo, se encarga de controlar las interacciones del usuario
        en la vista, pide los datos al modelo y los devuelve de nuevo a la vista para que esta los muestre al usuario. 
        Es decir las llamadas a clases y métodos, y los datos recibidos de formularios.
        

        ";
        public $imagen = "vistas/assets/img/r1.jpg";
    }

    $variosControlador = new VariosController();

?>