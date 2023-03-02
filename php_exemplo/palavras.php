<html>
<head>
    <title>Palavras</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    $nome = "Ruth ";
    $sobreNome = "Cardoso";
    $nacionalidade = "Brasileira";
    $localDoNascimento = "Araraquara, São Paulo";
    $diaDoNascimento = 19;
    $mesDoNascimento = 9;
    $anoDoNascimento = 1953;

    echo "Nome: " . $nome . $sobreNome;
    echo "<br/> <br/>";
    echo "Nacionalidade: " . $nacionalidade;
    echo "<br/> <br/>";
    echo "Local do nascimento: " . $localDoNascimento;
    echo "<br/> <br/>";
    echo "Data de nascimento: " . $diaDoNascimento . "/" . $mesDoNascimento . "/" . $anoDoNascimento;
    echo "<br/> <br/>";
?>
<?php
    echo "<br/> <br/>";
    echo "<a href='index.php'>voltar</a>"
?>
</body>
</html>