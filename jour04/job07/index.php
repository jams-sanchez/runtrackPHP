<?php

if (count($_GET) != 0) {

    $haut = $_GET["hauteur"];
    $larg = $_GET["largeur"];
    $tot = $larg / $haut * 2;

    for ($j = 0; $j < $haut; $j++) {
        echo str_repeat("\u{00A0}", $tot-- * 2) . "/" . str_repeat("_", $j * 2 + 2) . "\\ <br>";
    }

    for ($i = 0; $i < $haut; $i++) {
        echo "|" . str_repeat("_", $larg) . "\n| <br>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maison</title>
</head>

<body>

    <form action="index.php" method="$_GET">
        <label>hauteur</label>
        <input type="text" name="hauteur">
        <label>largeur</label>
        <input type="text" name="largeur">
        <button type="submit">Envoyer</button>
    </form>

</body>

</html>