<?php
session_start();
    if(!isset($_SESSION['email'])){
        header('Location: index.php');
    }else{
        include('header.php');
        include('./menu-06/index.php');
        include('./cards-01/cardsFav.php');
    }
 ?>

           <form action="./index.php"method="POST">
        <input type="hidden"name="fav">
        <input type="submit" value="salir"></form>
