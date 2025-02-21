<?php
include('./searchBar/searchBar.php');
include('./tarjetasIndividual/tarjeta.php');
include('./model/cardModel.php');

$conexion1 = new Conexion();
$card = new Card($conexion1);
$tarjetas = $card->getTarjeta();

?>

<div class="background2">
    
    <div class="centering">
        <div class="articles">
        <?php echo bar(); ?>
        <?php foreach ($tarjetas as $tarjeta) {
                     $img=$tarjeta['img'];
                        // $id=$targeta['id'];
                    $titulo=$tarjeta['titulo'];
                     $descripcion=$tarjeta['descripcion'];
                        // $liked=$targeta['liked'];
                        echo tarjeta("dawda","https://webevolmind.b-cdn.net/wp-content/uploads/2019/07/%C2%BFPor-que-es-util-la-imagen-como-recurso-educativo.webp","fwefwf");
                echo tarjeta($titulo,$img,$descripcion); // Asumiendo que tarjeta() acepta un título como argumento
            } ?>
        </div>
    </div>
</div>

</body>
</html>
