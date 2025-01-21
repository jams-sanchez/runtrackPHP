<?php


if (!isset($_COOKIE["nbVisites"])) { // si nbVisites n'existe pas
    setcookie("nbVisites", 1); // creer et assigne la valeur 1
} else {
    setcookie("nbVisites", $_COOKIE["nbVisites"] + 1); // sinon ajoute +1 à sa valeur
}

if (isset($_POST["reset"])) {
    unset($_COOKIE["nbVisites"]);
    setcookie("nbVisites", 1);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nombre de visites</title>
</head>

<body>

    <p>Nombre de visites =
        <?php
        if (!isset($_COOKIE["nbVisites"])) {
            echo 1;
        } else {
            echo $_COOKIE["nbVisites"] + 1;
        } ?>
    </p>
    <form action="index.php" method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>

</html>