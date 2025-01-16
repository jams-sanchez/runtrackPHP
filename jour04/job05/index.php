<?php

$username = "John";
$password = "Rambo";

if (count($_POST) != 0) {
    if (strtolower($_POST["username"]) == strtolower($username) and strtolower($_POST["password"]) == strtolower($password)) {
        echo "c'est pas ma guerre";
    } else {
        echo "votre pire cauchemar";
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
    <form action="index.php" method="post">
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" />
        </p>
        <p>
            <label for="password">Mot de passe:</label>
            <input type="text" name="password" />
        </p>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>