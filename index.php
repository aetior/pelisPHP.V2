<?php

session_start();


require('./controller/controller.php');
require_once './model/userModel.php';

// Comprobar si el usuario está autenticado
if (isset($_SESSION['email'])) {
    // Si está autenticado, mostrar el contenido
    include('header.php');
    
    include('./menu-06/index.php');
    include('./cards-01/cards.php');

} else {
    // Si no está autenticado, redirigir al login
    include('./login-01/index.php');
}

// Asegurarse de que la validación de sesión esté activa en cada página.









// comprobar usuarios
$conexion = new Conexion();
$usuario = new Usuario($conexion);
$usuarios = $usuario->obtenerUsuarios();

foreach ($usuarios as $u) {
    echo "ID: " . $u['id'] . " - Nombre: " . $u['nombre'] . " -email; ".$u['email']." contra: ".$u['password']."<br>";
}

?>
<!-- <script src="./menu-06/script.js"></script> -->
