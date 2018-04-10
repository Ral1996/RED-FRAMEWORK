<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "79896680", "mvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>