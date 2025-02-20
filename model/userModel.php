<?php
require_once 'conexionbd.php';

class Usuario {
    private $db;

    public function __construct(Conexion $conexion) {
        $this->db = $conexion->getConexion();
    }

    public function obtenerUsuarios() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function validarUsuario($email, $password) {
        $sql = "SELECT id, nombre, password FROM usuarios WHERE email = :email LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($usuario && $password== $usuario['password']) {
          
            return [
                "id" => $usuario['id'],
                "nombre" => $usuario['nombre'],
                "email" => $email
            ];
        } else {
       
            return false; // Usuario o contraseña incorrectos
        }
    }
    
}
?>
