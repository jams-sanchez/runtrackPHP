<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$salles = "SELECT * FROM salles ORDER BY capacite DESC;";
$stmt = $bdd->prepare($salles);
$stmt->execute();
$sallesOrdreDesc = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
                <th>Nom </th>
                <th>ID_etage </th>
                <th>Capacité </th>
            </tr>
        </thead>

        <tbody>
            <?php

            foreach ($sallesOrdreDesc as $value) {
                echo
                "<tr>
                <td>" . $value['nom'] . "</td>"
                    . "<td>" . $value['id_etage'] . "</td>"
                    . "<td>" . $value['capacite'] . "</td>
            </tr>";
            }
            ?>
        </tbody>


    </table>
</body>

</html>