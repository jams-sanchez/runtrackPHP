<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$etudiants = "SELECT COUNT(*) AS nombre FROM etudiants";
$stmt = $bdd->prepare($etudiants);
$stmt->execute();
$nbEtudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
                <th>Nombre d'étudiants</th>
            </tr>
        </thead>

        <tbody>
            <?php

            foreach ($nbEtudiants as $value) {
                echo
                "<tr>
                <td>" . $value['nombre'] . "</td>
            </tr>";
            }
            ?>
        </tbody>


    </table>
</body>

</html>