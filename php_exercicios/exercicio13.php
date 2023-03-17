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
        <input type="submit" value="Confirmar"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $sorteio = rand(1,3);
        $escolha = intval($_POST["escolha"]);
        echo "<hr/>";
        switch ($sorteio) {
            case 1:
                echo "Oponente escolheu Pedra. ✊ vs ";
                switch ($escolha) {
                    case 1:
                        echo "Você escolheu Pedra. ✊ <br/>";
                        echo "É um empate!";
                        break;
                    case 2:
                        echo "Você escolheu Papel. ✋ <br/>";
                        echo "Você ganhou!";
                        break;
                    case 3:
                        echo "Você escolheu Tesoura. ✌️ <br/>";
                        echo "Você perdeu!";
                        break;
                }
                break;
            case 2:
                echo "Oponente escolheu Papel. ✋ vs ";
                switch ($escolha) {
                    case 1:
                        echo "Você escolheu Pedra. ✊ <br/>";
                        echo "Você perdeu!";
                        break;
                    case 2:
                        echo "Você escolheu Papel. ✋ <br/>";
                        echo "É um empate!";
                        break;
                    case 3:
                        echo "Você escolheu Tesoura. ✌️ <br/>";
                        echo "Você ganhou!";
                        break;
                }
                break;
            case 3:
                echo "Oponente escolheu Tesoura. ✌️ vs ";
                switch ($escolha) {
                    case 1:
                        echo "Você escolheu Pedra. ✊ <br/>";
                        echo "Você ganhou!";
                        break;
                    case 2:
                        echo "Você escolheu Papel. ✋ <br/>";
                        echo "Você perdeu!";
                        break;
                    case 3:
                        echo "Você escolheu Tesoura. ✌️ <br/>";
                        echo "É um empate!";
                        break;
                }
                break;
        }
    }
?>
</html>