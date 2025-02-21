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
            if($tarjeta['liked']==1){
                     $img=$tarjeta['img'];
                     
                    $titulo=$tarjeta['titulo'];
                     $descripcion=$tarjeta['descripcion'];
                   
                echo tarjeta($titulo,$img,$descripcion);  
            }} ?>
        </div>
    </div>
</div>

</body>
</html>
