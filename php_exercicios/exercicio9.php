<html>
<head>
    <title>Verificador de número</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <label>Digite um número.</label>
        <br/>
        <input type="number" name="num"/>
        <br/> <br/>
        <input type="submit" value="Confirmar"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num = $_POST["num"];
        echo "<hr/>";
        if (empty($num)==false) {
            if ($num>0) {
                echo "<p>Valor positivo.</p>";
            } else if ($num<0) {
                echo "<p>Valor negativo.</p>";
            } else {
                echo "<p>Igual a zero.</p>";
            }
        }
    }
?>
</html>
</html>
</html>