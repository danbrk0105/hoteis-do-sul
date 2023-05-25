<?php
    require "dados/hoteis.php"; 
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Hotéis do Sul</title>
    <link rel="stylesheet" type="text/css" href="estilo/estilos.css">
    </head>
    <body>
        <header>
            <img src="imagens/logo2.png" alt="">
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
            <p>Escolha o hotel desejado e aproveite nossos preços.</p>
            <a href="paginas/listagemhoteis.php" class="button">Clique aqui para ver os hoteis</a>
        </section>

    <section id="rooms">
        <h2>Hoteis mais acessados</h2>
        <div class="room">
        <img src="imagens/HotelKitnetRififi.jpg" alt="Room 1">
        <h3>Hotel Kitnet Rififi</h3>
        <p>Hotel muito bom. Limpo e com instalacoes bonitas. Bom atendimento.</p>
        </div>
        <div class="room">
        <img src="imagens/img2.jpg" alt="Room 2">
        <h3>Hotel Fazzenda Park</h3>
        <p>Excelente, ótimo atendimento, ambientes confortáveis, limpos e aconchegante.</p>
        </div>
        <div class="room">
        <img src="imagens/HotelTriunfo.jpg" alt="Room 3">
        <h3>Hotel Triunfo</h3>
        <p>Educação dos funcionarios, agilidade no atendimento, quarto luxuoso.</p>
        </div>
    </section>
        <footer>
        <p>&copy; 2023 Hoteis Sul. Todos os direitos reservados.</p>
    </footer>
    </body>
</html>
</body>
</html>
