<html>
<head>
    <title>Nota</title>
    <meta charset="utf-8">
</head>
<body>
</body>
<?php
    $nota = $_POST["nota"];
    if ($nota < 0 || $nota > 10) {
        echo '
        <form action="exercicio3_resposta.php" method="post">
            <label>Insira uma nota de 0 a 10.</label>
            <br/>
            <input type="number" name="nota"/>
            <br/> <br/>
            <input type="submit" value="Confirmar"/>
        </form> 
        <hr/>
        <p>Insira um valor válido.</p>';
    } else {
        echo "Nota ",$nota,".";
    }
?>
</html>