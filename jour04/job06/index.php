<?php

if (count($_GET) != 0) {
    if ($_GET["nombre"] % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>

<body>
    <form action="index.php" method="get">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
        </p>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>