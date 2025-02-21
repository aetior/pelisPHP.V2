<?php

include('model/userModel.php');

// function entrar(){
//     $conexion = new Conexion();

    
//     $usuario = new Usuario($conexion);
    
//     if(isset($_POST)&&isset($_POST['validar'])){
    
//         if($usuario->validarUsuario($_POST['email'],$_POST['password'])){            
//          $_SESSION['email']=$_POST['email']; 
//             $idUser=$usuario['id'];
//             print_r($idUser);
//           return true;
//         }else{

//             session_destroy();
//             return false;
//         }
//     }
// }
function entrar() {
    $conexion = new Conexion(); // Obtener la conexión
    $usuario = new Usuario($conexion);
    
    if (isset($_POST['validar'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Verificamos el usuario
        $usuarioData = $usuario->validarUsuario($email, $password);
        
        if ($usuarioData) {
            // Si el usuario es válido, guardamos el ID y el email en la sesión
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $usuarioData['id']; // Guardar el ID del usuario
            return true;
   
        } else {

            session_unset();
            // Si la validación falla, destruimos la sesión y mostramos un mensaje
            session_destroy();
            return false;
        }
    }else{
   
    }
    
}
if(isset($_POST['validar'])){
    entrar();
}

if(isset($_POST['like'])){
    $id= $_POST['id'];
    addLike($id);
}
