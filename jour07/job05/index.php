<?php

session_start();

$joueur1 = "X";
$joueur2 = "O";


for ($i = 1; $i < 10; $i++) {
    if ($_GET[$i] = '-') {
        echo $_GET[$i];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
</head>

<body>

    <form method="get" action="index.php">
        <input type="submit" name="1" value="-">

    </form>

</body>

</html>