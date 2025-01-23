<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', '');

$sallesEtages = "SELECT salles.nom AS salles, etage.nom AS etages FROM salles INNER JOIN etage ON salles.id_etage = etage.id";
$stmt = $bdd->prepare($sallesEtages);
$stmt->execute();
$donneesSallesEtages = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                <th>Nom des salles </th>
                <th>Nom des etages</th>
            </tr>
        </thead>

        <tbody>
            <?php

            foreach ($donneesSallesEtages as $value) {
                echo
                "<tr>
                <td>" . $value['salles'] . "</td>"
                    . "<td>" . $value['etages'] . "</td>
            </tr>";
            }
            ?>
        </tbody>


    </table>
</body>

</html>