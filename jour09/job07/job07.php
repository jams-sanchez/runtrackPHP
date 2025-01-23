<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$etages = "SELECT SUM(superficie) AS nombre FROM etage;";
$stmt = $bdd->prepare($etages);
$stmt->execute();
$superficieEtages = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
                <th>Superficie Totale </th>
            </tr>
        </thead>

        <tbody>
            <?php

            foreach ($superficieEtages as $value) {
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