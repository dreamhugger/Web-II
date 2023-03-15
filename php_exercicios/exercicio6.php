<html>
<head>
    <title>Intervalo</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <label>Digite um número.</label>
        <br/>
        <input type="number" name="A"/>
        <br/> <br/>
        <label>Digite outro número.</label>
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
        while($A<$B-1) {
            $A += 1;
            echo $A;
        };
    }
?>
</html>