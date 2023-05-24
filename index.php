<?php
    require "dados/hoteis.php"; 
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Hotéis do Sul</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    </head>
    <body>
        <header>
            <img src="imagens/logo.png" alt="">
            <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="paginas/listagemhoteis.php">Hotéis</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            </nav>
        </header>

        <section id="banner">
            <h2>Bem-vindos ao Hotéis do Sul</h2>
            <p>Escolha o estado desejado e aproveite nossos preços.</p>
            <a href="teste1.php" class="button">Clique aqui para ver os quartos</a>
        </section>

    <section id="rooms">
        <h2>Quartos mais acessados</h2>
        <div class="room">
        <img src="imagens/img1.jpg" alt="Room 1">
        <h3>Recanto Cataratas - Thermas Resort & Convention</h3>
        <p>Hotel muito bom. Limpo e com instalacoes bonitas. Bom atendimento.</p>
        <a href="#" class="button">Mais informações</a>
        </div>
        <div class="room">
        <img src="imagens/img2.jpg" alt="Room 2">
        <h3>Hotel Fazzenda Park</h3>
        <p>Excelente, ótimo atendimento, ambientes confortáveis, limpos e aconchegante.</p>
        <a href="#" class="button">Mais informações</a>
        </div>
        <div class="room">
        <img src="imagens/img5.jpg" alt="Room 3">
        <h3>Daara</h3>
        <p>Educação dos funcionarios, agilidade no atendimento, quarto luxuoso.</p>
        <a href="#" class="button">Mais informações</a>
        </div>
    </section>

    <!--<div class="container">
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
            ?>-->
            
        </div>
        <footer>
        <p>&copy; 2023 Hoteis Sul. Todos os direitos reservados.</p>
    </footer>
    </body>
</html>
</body>
</html>