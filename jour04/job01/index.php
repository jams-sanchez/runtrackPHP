<?php

$count = 0;

foreach ($_GET as $key => $value) {
    $count++;
}

echo $count;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>

    <form action="index.php" method="get">
        <p>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" />
        </p>
        <p>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" />
        </p>
        <p>
            <label for="age">Age:</label>
            <input type="text" name="age" />
        </p>
        <button type="submit">Envoyer</button>
    </form>

</body>

</html>