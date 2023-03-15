<html>
<head>
    <title>Mês</title>
    <meta charset="utf-8"/>
</head>
<body>
    <form method="post">
        <label>Digite o número de um mês.</label>
        <br/>
        <input type="number" name="mes"/>
        <br/><br/>
        <input type="submit" value="Confirmar"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $mes = $_POST["mes"];
        echo "<hr/>";
        switch ($mes) {
            case 1:
                echo "Janeiro.";
                break;
            case 2:
                echo "Fevereiro.";
                break;
            case 3:
                echo "Março.";
                break;
            case 4:
                echo "Abril.";
                break;
            case 5:
                echo "Maio.";
                break;
            case 6:
                echo "Junho.";
                break;
            case 7:
                echo "Julho.";
                break;
            case 8:
                echo "Agosto.";
                break;
            case 9:
                echo "Setembro.";
                break;
            case 10:
                echo "Outubro.";
                break;
            case 11:
                echo "Novembro.";
                break;
            case 12:
                echo "Dezembro.";
                break;
            default: 
            echo "<p>Não existe mês com esse número.</p>";
        }
    }
?>
</html>