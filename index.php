<?php
$jogador = "";

if (isset($_COOKIE['jogador'])) {
    $jogador = $_COOKIE['jogador'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Descubra seu Dev Interior</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>

    <div class="container">

        <h1>Descubra seu Dev Interior</h1>

        <p>
            Responda algumas perguntas e descubra qual é seu verdadeiro perfil no mundo da tecnologia.
        </p>

        <?php
        if ($jogador != "") {
            echo "<p class='volta'>Bem-vindo de volta, <b>$jogador</b>!</p>";
        }
        ?>

        <a class="botao" href="quiz.php">Começar Quiz</a>

    </div>

</body>

</html>