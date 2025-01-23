<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$salles = "SELECT * FROM salles";
$donneesSalles = $bdd->prepare($salles);
$donneesSalles->execute();
$donneesSalles->fetch($bdd::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>

<body>

    <table>
        <tr>
            <th>Nom</th>
            <th>Capacité</th>
        </tr>

        <?php

        while ($listeSalles = $donneesSalles->fetch()) {
            echo
            "<tr>
                <td>" . $listeSalles['nom'] . "</td>"
                . "<td>" . $listeSalles['capacite'] . "</td>
            </tr>";
        }

        $donneesSalles->closeCursor();
        ?>

    </table>
</body>

</html>