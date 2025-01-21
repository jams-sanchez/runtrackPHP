<?php

function bold($text)
{

    echo "<b> $text </b>";
}

function cesar($text, $num = 2) {}

function plateforme($text)
{
    $result = "";
    $textSplit = explode(" ", $text); // sépare chaque mot du texte
    for ($i = 0; $i < count($textSplit); $i++) { // boucle sur chaque mot
        $newText = $textSplit[$i]; // recupère le mot actuel
        if (strlen($newText) >= 2 and substr($newText, -2) == 'me') { // vérifie s'il a au moins 2 lettres et s'il termine par "me"
            $result .= $newText . "_\n"; // si oui : affiche le mot avec '_' 
        } else {
            $result .= $newText . "\n"; // si non : affiche le mot
        }
    }
    return $result;
}

if (isset($_GET["text"]) and isset($_GET["select"])) {
    $text = $_GET['text'];
    $option = $_GET['select'];

    switch ($option) {
        case "gras":
            $text = bold($text);
            break;
        case "cesar":
            $text = cesar($text, $shift = 2);
            break;
        case "plateforme":
            $text = plateforme($text);
            break;
    }

    echo $text;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texte</title>
</head>

<body>
    <form action="index.php" method="get">
        <p>
            <label>Texte</label>
            <input type="text" name="text" />
        </p>
        <p>
            <select name="select">
                <option value="">option</option>
                <option value="gras">Gras</option>
                <option value="cesar">César</option>
                <option value="plateforme">Plateforme</option>
            </select>
        </p>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>