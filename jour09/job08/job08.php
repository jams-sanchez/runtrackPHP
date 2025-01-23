<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$salles = "SELECT SUM(capacite) AS nombre FROM salles";
$stmt = $bdd->prepare($salles);
$stmt->execute();
$capaciteSalles = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
                <th>Capacité Totale </th>
            </tr>
        </thead>

        <tbody>
            <?php

            foreach ($capaciteSalles as $value) {
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