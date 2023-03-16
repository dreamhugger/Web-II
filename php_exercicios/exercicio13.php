<html>
<head>
    <title>Jokenpo</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <label>Jokenpo.</label>
        <br/>
        <select name="escolha">
            <option value="1">Pedra</option>
            <option value="2">Papel</option>
            <option value="3">Tesoura</option>
        </select>
        <br/> <br/>
        <input type="submit" value="Confirmar"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $sorteio = rand(1,3);
        $escolha = $_POST["escolha"];
        echo "<hr/>";
        switch ($escolha, $sorteio) {
            case 1, 1:
                echo "";
                break;
        }
    }
?>
</html>