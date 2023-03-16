<html>
<head>
    <title>Triângulos</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <label>Primeiro lado.</label>
        <br/>
        <input type="number" name="A"/>
        <br/> <br/>
        <label>Segundo lado.</label>
        <br/>
        <input type="number" name="B"/>
        <br/> <br/>
        <label>Terceiro lado.</label>
        <br/>
        <input type="number" name="C"/>
        <br/> <br/>
        <input type="submit" value="Confirmar"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $A = $_POST["A"];
        $B = $_POST["B"];
        $C = $_POST["C"];
        echo "<hr/>";
        if ($A + $B > $C && $A + $C > $B && $B + $C > $A) {
            if ($A == $B && $A == $C) {
                echo "É um triângulo equilátero.";
            } else if ($A != $B && $A != $C && $B != $C) {
                echo "É um triângulo escaleno.";
            } else {
                echo "É um triângulo isósceles";
            }
        } else {
            echo "Estas medidas não formam um triângulo.";
        }
    }
?>
</html>