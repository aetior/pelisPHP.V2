<?php
// Iniciar sesión
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de login (o la página de inicio)
header("Location: ./index.php");
exit; // Aseguramos que el código posterior no se ejecute
?>
