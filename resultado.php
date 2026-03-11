<?php

$nome = $_POST['nome'];

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];
$p9 = $_POST['p9'];
$p10 = $_POST['p10'];

$frontend = 0;
$bugs = 0;
$arquitetura = 0;
$algoritmos = 0;

$respostas = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10];

foreach ($respostas as $r) {

    if ($r == "frontend") {
        $frontend++;
    }

    if ($r == "bugs") {
        $bugs++;
    }

    if ($r == "arquitetura") {
        $arquitetura++;
    }

    if ($r == "algoritmos") {
        $algoritmos++;
    }
}

if ($frontend > $bugs && $frontend > $arquitetura && $frontend > $algoritmos) {

    $perfil = "🎨 Ninja do Front-end";

    $desc = "Você ama criar interfaces bonitas e intuitivas.
Seu foco está na experiência do usuário.
HTML, CSS e JavaScript são suas armas principais.
Seu talento transforma ideias em interfaces incríveis.";

    $img = "img/frontend.jpg";
} elseif ($bugs > $frontend && $bugs > $arquitetura && $bugs > $algoritmos) {

    $perfil = "🐛 Caçador de Bugs";

    $desc = "Você possui olhar crítico e investigativo.
Nada escapa da sua análise.
Seu talento está em encontrar e corrigir erros.
Você garante que tudo funcione perfeitamente.";

    $img = "img/bugs.jpg";
} elseif ($arquitetura > $frontend && $arquitetura > $bugs && $arquitetura > $algoritmos) {

    $perfil = "🏗️ Arquiteto do Código";

    $desc = "Você pensa grande e planeja sistemas completos.
Sua habilidade está em estruturar projetos.
Organização e lógica são seus pontos fortes.
Sem você, o projeto não teria base sólida.";

    $img = "img/arquiteto.jpg";
} else {

    $perfil = "🧠 Mestre dos Algoritmos";

    $desc = "Você ama desafios lógicos e problemas complexos.
Algoritmos e estruturas de dados são seu território.
Seu raciocínio rápido resolve qualquer desafio.
Você é o cérebro por trás das soluções.";

    $img = "img/algoritimos.jpg";
}

setcookie("jogador", $nome, time() + 3600);


/* contador de jogadas */

$arquivo = "contador.txt";

$contador = file_get_contents($arquivo);

$contador++;

file_put_contents($arquivo, $contador);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

    <div class="container resultado">

        <h1>Resultado do Quiz</h1>

        <p>Jogador: <b><?php echo $nome; ?></b></p>

        <h2><?php echo $perfil; ?></h2>

        <img src="<?php echo $img; ?>" width="200">

        <p><?php echo $desc; ?></p>

        <p>Quiz jogado <?php echo $contador; ?> vezes.</p>

        <a class="botao" href="index.php">Jogar novamente</a>

    </div>

</body>

</html>