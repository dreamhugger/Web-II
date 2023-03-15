<html>
<head>
    <title>Números</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="get">
        <input type="submit" value="Um embaixo do outro"/>
    </form>
    <form method="post">
        <input type="submit" value="Um do lado do outro"/>
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        for ($i = 1;$i < 21;$i++) {
            echo $i;
            echo "<br/>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        for ($i = 1;$i < 21;$i++) {
            echo $i;
            echo " ";
        }
    }
?>
</html>