<?php

session_start();

if (!isset($_SESSION["nbVisites"])) { // si nbVisites n'est pas créé
    $_SESSION["nbVisites"] = 0; // créer et donne la valeur de 0 a nbVisites
} else {
    $_SESSION["nbVisites"]++; // si elle existe ajoute +1
}

if (isset($_POST["reset"])) { // si Reset
    $_SESSION["nbVisites"] = 0; // reset nbVisites a 0
    session_destroy(); // detruit la session
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



    <p>Nombre de visites = <?= $_SESSION["nbVisites"]; ?></p>
    <form action="index.php" method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>

</html>