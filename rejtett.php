<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $szamlalo = 0;
    if (isset($_POST["szamlalo"])) {
        $szamlalo = $_POST["szamlalo"];
    }
    echo (++$szamlalo) . "<br>";
    
    
    ?>
    <form action-"rejtett.php" method="post"> <input type="text" name="szamlalo" 
    value="<?php echo $szamlalo?>"> <input type="submit" value="Növel">
    </form>

</body>

</html>