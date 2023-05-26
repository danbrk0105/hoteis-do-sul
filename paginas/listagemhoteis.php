<?php
  require "../dados/hoteis.php";
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
  <section>
  <div class="container">
		
            <?php 
                foreach ($hoteis as $i =>  $b) {
                    
                
            ?>

      <div class="card">
              <a href="detalhe.php?i=<?=$i?>">
            <img src="<?=$b["foto"]?>" alt="<?=$b["nome"]?>">
              </a>
        <h3><a href="detalhe.php?i=<?=$i?>"> <?=$b["nome"]?></a></h3>
        
      </div>

         <?php } ?>
    </div>
    </section>
    <footer>
        <p>&copy; 2023 Hoteis Sul. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
