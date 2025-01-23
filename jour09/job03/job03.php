<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$etudiantsF = "SELECT nom, prenom, naissance FROM etudiants WHERE sexe = 'Femme'";
$stmt = $bdd->prepare($etudiantsF);
$stmt->execute();
$donneesEtudiantsF = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($donneesEtudiantsF as $value) {
                echo
                "<tr>
                <td>" . $value['prenom'] . "</td>"
                    . "<td>" . $value['nom'] . "</td>"
                    . "<td>" . $value['naissance'] . "</td>
            </tr>";
            }

            ?>
        </tbody>


    </table>
</body>

</html>