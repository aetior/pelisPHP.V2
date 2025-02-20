<?php
session_start();
    if(!isset($_SESSION['email'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>prueba favoritos</h1>
    <form action="./index.php"method="POST">
        <input type="hidden"name="fav">
        <input type="submit" value="enviar">
    </form>
</body>
</html>