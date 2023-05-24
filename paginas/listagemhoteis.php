<!DOCTYPE html>
<html>
<head>
  <title>Escolha do Estado</title>
  <link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
 
</head>
<body>
  <header class="hEstado">
    <h1>Escolha o estado que deseja</h1>
    <nav>
      <ul>
        <li><a href="../index.php">Início</a></li>
        <li><a href="listagemhoteis.php">Hotéis</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>
  </header>
  <section id="banner1">
    <h2>Bem-vindos ao Hotéis do Sul</h2>
    <p>Escolha o estado desejado e aproveite nossos preços.</p>
    <a href="#" class="button">Clique aqui para ver os quartos</a>
  </section>

  <section id="states">
    <h2>Escolha um Estado:</h2>
    <ul>
      <li><a href="parana.html">Paraná</a></li>
      <li><a href="riograndedosul.html">Rio Grande do Sul</a></li>
      <li><a href="santacatarina.html">Santa Catarina</a></li>
    </ul>
  </section>
        <div class="card-hotel">
            <img src="<?=$h["foto"]?>"alt="<?=$h["nome"]?>">
            <h3><?=$h["nome"]?></h3>
            <h4><?=$h["local"]?></h4>
            <p>Salário: <?=$h["avaliacao"]?></p>
            <p><?=$h["preco"]?></p>
            <a href="../index.php" class="link">Voltar</a>
        </div>
    <footer>
        <p>&copy; 2023 Hoteis Sul. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
