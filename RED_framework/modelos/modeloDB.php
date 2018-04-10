<?php
class DatoConexion{
    private $db;
    private $personas;

    public function __construct()
    {
        $this->db=Conectar::conexion();
        $this->personas=array();

    }
    public function get_personas()
    {
        $consulta = $this->db->query("SELECT * FROM personas");
        while($filas = $consulta->fetch_assoc())
        {
            $this->personas[]=$filas;
        }
        return $this->personas;
    }
}
?>