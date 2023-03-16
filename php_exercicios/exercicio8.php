<html>
<head>
    <title>Sorteio</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <label>Escolha 1 número de 1 a 50.</label>
        <br/>
        <input type="number" name="num" min="1" max="50"/>
        <br/> <br/>
        <input type="submit" value="Confirmar"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num = $_POST["num"];
        $sorteio = rand(1,50);
        echo "<hr/>";
        echo "Número sorteado: ",$sorteio;
        echo "<br/>";
        if ($sorteio == $num) {
            echo "Parábens, você acertou!";
        } else {
            echo "Mais sorte da próxima vez...";
        }
    }
?>
</html>