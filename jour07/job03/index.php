<?php

session_start();

if (!isset($_SESSION["listePrenom"])) {
    $_SESSION["listePrenom"] = "";
}

if (isset($_SESSION["listePrenom"]) and isset($_POST["envoyer"])) {
    $_SESSION["listePrenom"] .= $_POST["prenom"] . "<br>";
}

if (isset($_POST["reset"])) {
    $_SESSION["listePrenom"] = "";
    session_destroy();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de prénoms</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Entrer votre prénom : </label>
        <input type="text" name="prenom" />
        <button type="submit" name="envoyer">Envoyer</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <p>
        Liste des prenoms :
        <?= "<br>" . $_SESSION["listePrenom"]; ?>
    <p>
</body>

</html>