<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$etudiantsInT = "SELECT * FROM `etudiants` WHERE prenom LIKE 'T%'";
$stmt = $bdd->prepare($etudiantsInT);
$stmt->execute();
$donneesEtudiantsInT = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

        foreach ($donneesEtudiantsInT as $value) {
            echo
            "<tr>
                <td>" . $value['prenom'] . "</td>"
                . "<td>" . $value['nom'] . "</td>"
                . "<td>" . $value['naissance'] . "</td>"
                . "<td>" . $value['sexe'] . "</td>"
                . "<td>" . $value['email'] . "</td>
            </tr>";
        }
        ?>

    </table>
</body>

</html>