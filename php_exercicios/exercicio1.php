<html>
<head>
    <title>Maioridade</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <label>Qual seu nome?</label>
        <br/>
        <input type="text" name="nome"/>
        <br/> <br/>
        <label>Qual sua idade?</label>
        <br/>
        <input type="number" name="idade"/>
        <br/> <br/>
        <input type="submit" value="Confirmar"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        if ($idade > 0) {
            echo "<hr/>";
            if ($idade < 18) {
                echo "<p>",$nome," não é maior de 18 anos e tem ",$idade," anos.</p>";
            } else {
                echo "<p>",$nome," é maior de 18 anos e tem ",$idade," anos.</p>";
            }
        }
    }
?>
</html>