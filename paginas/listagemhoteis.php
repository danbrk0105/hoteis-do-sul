<?php
    require "../dados/hoteis.php";
    if(isset ($_GET["i"])){
        $i=$_GET["i"];
        $h = $hoteis[$i];
    }else{
        header("location: index.php");
        die; 
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotéis do Sul | Nossos Hotéis</title>
</head>
<body>
        <div class="card-hotel">
            <img src="<?=$h["foto"]?>"alt="<?=$h["nome"]?>">
            <h3><?=$h["nome"]?></h3>
            <h4><?=$h["local"]?></h4>
            <p>Salário: <?=$h["avaliacao"]?></p>
            <p><?=$h["preco"]?></p>
            <a href="../index.php" class="link">Voltar</a>
        </div>
</body>
</html>