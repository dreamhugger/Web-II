<html>
<head>
    <title>Maior ou menor</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <label>Insira um valor para A.</label>
        <br/>
        <input type="number" name="A"/>
        <br/> <br/>
        <label>Insira um valor para B.</label>
        <br/>
        <input type="number" name="B"/>
        <br/> <br/>
        <input type="submit" value="Confirmar"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $A = $_POST["A"];
        $B = $_POST["B"];
        echo "<hr/>";
        if ($A<$B) {
            echo "<p>A é menor que B.</p>";
        } else if ($A>$B) {
            echo "<p>A é maior que B.</p>";
        } else {
            echo "<p>A é igual a B.</p>";
        }
    }
?>
</html>