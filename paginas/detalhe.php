<?php 
		
		require "../dados/hoteis.php";
		
		if (!isset($_GET["i"])) {
			header("location: index.php");
			die;
		}

		$indice = $_GET["i"];
		$b = $hoteis[$indice];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Escolha do Estado</title>
  <link rel="stylesheet" type="text/css" href="../estilo/estilos.css">
 
</head>
<body>
  <header class="hEstado">
  <img src="../imagens/logo2.png" alt="">
    <nav>
      <ul>
        <li><a href="../index.php">Início</a></li>
        <li><a href="listagemhoteis.php">Hotéis</a></li>
        <li><a href="../contato.php">Contato</a></li>
      </ul>
    </nav>
    </header>
	<div class="container-detalhe">
		
		
		<div class="card">
			<?php if (isset($b)) {
				
			?>
			<img src="<?=$b["foto"]?>" alt="<?=$b["nome"]?>">
			<h3><?=$b["nome"]?></h3>
			<h4><?=$b["local"]?></h4>
			<p><?=$b["avaliacao"]?></p>
			<p> Preço: <?=$b["preco"]?> </p>

			<?php }else{
				echo "<h3> Not </h3>";
			}?>
		</div>
			
		
	</div>
</body>
</html>
