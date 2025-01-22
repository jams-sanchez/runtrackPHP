<?php

setcookie("prenom", " ");
$prenom = " ";

if (isset($_POST["prenom"]) and (isset($_POST["connexion"]))) {
    $_COOKIE["prenom"] = $_POST["prenom"];
    $prenom = $_COOKIE["prenom"];
    setcookie("prenom", $prenom);
} else {
    setcookie("prenom", $prenom);
}

if (isset($_POST["deco"])) {
    unset($_COOKIE["prenom"]);
    setcookie("prenom", " ");
    $prenom = " ";
} else {
    setcookie("prenom", $prenom);
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>

    <?php
    if (!isset($_POST["prenom"])) {
        echo '<form action="index.php" method="post">
        <label>Entrer votre prénom : </label>
        <input type="text" name="prenom" />
        <button type="submit" name="connexion">Connexion</button>
    </form>';
    } else {
        echo "Bonjour,\n" . $_COOKIE["prenom"] . '<br> <button type="submit" name="deco">Deconnexion</button>';
    }
    ?>


</body>

</html>