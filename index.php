<?php
    require "dados/hoteis.php"; 
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <div class="container">
        <?php
            foreach($hoteis as $i => $h){

        ?>
        <div class="card-hotel">
            <a href="paginas/listagemhoteis.php?i=<?=$i?>">
                <img src="<?=$h["foto"]?>" alt="<?= $h["nome"]?>">
            </a>
            <h3><a href="paginas/listagemhoteis.php?i=<?=$i?>">
                <?= $h["nome"]?>
                </a>
            </h3>
            
        </div>
        <?php
            }
        ?>
        
    </div>
</body>
</html>