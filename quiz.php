<?php

$respondidas = 0;

for ($i = 1; $i <= 10; $i++) {
    if (isset($_POST["p$i"])) {
        $respondidas++;
    }
}

$progresso = ($respondidas / 10) * 100;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quiz Geek</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

    <div class="container">

        <h1>RESPONDA O QUIZ</h1>

        <p class="descricao">
            Escolha as opções que mais combinam com você e descubra seu perfil no mundo da programação.
        </p>


        <form action="loading.php" method="POST">

            <div class="nome-jogador">

                <label>Seu nome:</label>
                <input type="text" name="nome" placeholder="Digite seu nome..." required>

            </div>


            <!-- PERGUNTA 1 -->

            <div class="pergunta">

                <h3>1 - O que você prefere fazer no computador?</h3>

                <label><input type="radio" name="p1" value="frontend"> Criar páginas</label>
                <label><input type="radio" name="p1" value="bugs"> Encontrar erros</label>
                <label><input type="radio" name="p1" value="arquitetura"> Planejar sistemas</label>
                <label><input type="radio" name="p1" value="algoritmos"> Resolver desafios</label>

            </div>


            <!-- PERGUNTA 2 -->

            <div class="pergunta">

                <h3>2 - Qual matéria você mais gosta?</h3>

                <label><input type="radio" name="p2" value="frontend"> Artes</label>
                <label><input type="radio" name="p2" value="bugs"> Informática</label>
                <label><input type="radio" name="p2" value="arquitetura"> Engenharia</label>
                <label><input type="radio" name="p2" value="algoritmos"> Matemática</label>

            </div>


            <!-- PERGUNTA 3 -->

            <div class="pergunta">

                <h3>3 - O que você faria em um projeto?</h3>

                <label><input type="radio" name="p3" value="frontend"> Interface bonita</label>
                <label><input type="radio" name="p3" value="bugs"> Testar tudo</label>
                <label><input type="radio" name="p3" value="arquitetura"> Estrutura do sistema</label>
                <label><input type="radio" name="p3" value="algoritmos"> Resolver a lógica</label>

            </div>


            <!-- PERGUNTA 4 -->

            <div class="pergunta">

                <h3>4 - O que mais te diverte?</h3>

                <label><input type="radio" name="p4" value="frontend"> Criatividade</label>
                <label><input type="radio" name="p4" value="bugs"> Investigar erros</label>
                <label><input type="radio" name="p4" value="arquitetura"> Planejamento</label>
                <label><input type="radio" name="p4" value="algoritmos"> Desafios</label>

            </div>


            <!-- PERGUNTA 5 -->

            <div class="pergunta">

                <h3>5 - Qual linguagem você escolheria?</h3>

                <label><input type="radio" name="p5" value="frontend"> HTML/CSS</label>
                <label><input type="radio" name="p5" value="bugs"> Python</label>
                <label><input type="radio" name="p5" value="arquitetura"> Java</label>
                <label><input type="radio" name="p5" value="algoritmos"> C++</label>

            </div>


            <!-- PERGUNTA 6 -->

            <div class="pergunta">

                <h3>6 - O que você faria primeiro em um projeto?</h3>

                <label><input type="radio" name="p6" value="frontend"> Criar o visual da página</label>
                <label><input type="radio" name="p6" value="bugs"> Testar tudo antes de liberar</label>
                <label><input type="radio" name="p6" value="arquitetura"> Planejar a estrutura do sistema</label>
                <label><input type="radio" name="p6" value="algoritmos"> Resolver a lógica principal</label>

            </div>


            <!-- PERGUNTA 7 -->

            <div class="pergunta">

                <h3>7 - O que você mais gosta em programação?</h3>

                <label><input type="radio" name="p7" value="frontend"> Design e interação</label>
                <label><input type="radio" name="p7" value="bugs"> Encontrar erros escondidos</label>
                <label><input type="radio" name="p7" value="arquitetura"> Organizar grandes projetos</label>
                <label><input type="radio" name="p7" value="algoritmos"> Resolver desafios difíceis</label>

            </div>


            <!-- PERGUNTA 8 -->

            <div class="pergunta">

                <h3>8 - Qual dessas ferramentas você usaria?</h3>

                <label><input type="radio" name="p8" value="frontend"> Figma</label>
                <label><input type="radio" name="p8" value="bugs"> Debugger</label>
                <label><input type="radio" name="p8" value="arquitetura"> UML</label>
                <label><input type="radio" name="p8" value="algoritmos"> IDE para resolver problemas</label>

            </div>


            <!-- PERGUNTA 9 -->

            <div class="pergunta">

                <h3>9 - Em um jogo, qual seria seu papel?</h3>

                <label><input type="radio" name="p9" value="frontend"> Designer da interface</label>
                <label><input type="radio" name="p9" value="bugs"> Testador do jogo</label>
                <label><input type="radio" name="p9" value="arquitetura"> Criador do sistema do jogo</label>
                <label><input type="radio" name="p9" value="algoritmos"> Programador da inteligência do jogo</label>

            </div>


            <!-- PERGUNTA 10 -->

            <div class="pergunta">

                <h3>10 - O que mais te motiva na tecnologia?</h3>

                <label><input type="radio" name="p10" value="frontend"> Criar coisas bonitas</label>
                <label><input type="radio" name="p10" value="bugs"> Melhorar sistemas</label>
                <label><input type="radio" name="p10" value="arquitetura"> Construir grandes projetos</label>
                <label><input type="radio" name="p10" value="algoritmos"> Resolver problemas complexos</label>

            </div>


            <br>


            <div class="botao-area">

                <button type="submit">DESCOBRIR MEU PERFIL</button>

            </div>

        </form>

    </div>

</body>

</html>