<?php
require_once 'conexionbd.php';
class Card{
    private $db;

    function __construct(Conexion $conexion){
        $this->db = $conexion->getConexion();
    }
    public function getTarjeta(){
       $sql="SELECT * FROM datospeli";
       $stmt = $this->db->prepare($sql);
       $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>