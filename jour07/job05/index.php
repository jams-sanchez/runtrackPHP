<?php

session_start();

$joueur1 = "X";
$joueur2 = "O";




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
</head>

<body>

    <form method="post" action="index.php">
        <input type="submit" name="un" value="-">
        <input type="submit" name="deux" value="-">
        <input type="submit" name="trois" value="-">
        <br>
        <input type="submit" name="quatre" value="-">
        <input type="submit" name="cinq" value="-">
        <input type="submit" name="six" value="-">
        <br>
        <input type="submit" name="sept" value="-">
        <input type="submit" name="huit" value="-">
        <input type="submit" name="neuf" value="-">
    </form>

</body>

</html>