<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url állapot Tartás</title>
</head>

<body>
    <?php
    $szamlalo = 0;
    if (isset($_GET["szamlalo"])) {
        $szamlalo = $_GET["szamlalo"];
    }
    echo $szamlalo."<br>";
    $szamlalo++;


    ?><a href="url.php?szamlalo=<?php echo $szamlalo ?>">Kattints ide</a>
</body>

</html>