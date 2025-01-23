<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$etudiants = "SELECT * FROM etudiants";
$donneesEtudiants = $bdd->prepare($etudiants);
$donneesEtudiants->execute();
$donneesEtudiants->fetch($bdd::FETCH_ASSOC);

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
            <th>Prenom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>

        </tr>

        <?php

        while ($listeEtudiants = $donneesEtudiants->fetch()) {
            echo
            "<tr>
                <td>" . $listeEtudiants['prenom'] . "</td>"
                . "<td>" . $listeEtudiants['nom'] . "</td>"
                . "<td>" . $listeEtudiants['naissance'] . "</td>"
                . "<td>" . $listeEtudiants['sexe'] . "</td>"
                . "<td>" . $listeEtudiants['email'] . "</td>
            </tr>";
        }

        $donneesEtudiants->closeCursor();
        ?>

    </table>
</body>

</html>