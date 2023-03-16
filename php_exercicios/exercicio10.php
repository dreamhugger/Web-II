<html>
<head>
    <title>Par ou ímpar</title>
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
        $num = $_POST['num'];
        echo "<hr/>";
        if ($num % 2 == 0) {
            echo "<p>Esse número é par.</p>";
        } else {
            echo "<p>Esse número é ímpar.</p>";
        }
    }
?>
</html>