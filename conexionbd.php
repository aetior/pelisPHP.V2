<?php
class Conexion {
    private $conexion;

    public function __construct() {
        $this->conectar();
    }

    private function conectar() {
        $host = "localhost";
        $dbname = "pelis";
        $usuario = "root";
        $password = "";

        try {
            $this->conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
}
?>