<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>

<body>

    <form action="index.php" method="post">
        <p>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" />
        </p>
        <p>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" />
        </p>
        <p>
            <label for="age">Age:</label>
            <input type="text" name="age" />
        </p>
        <button type="submit">Envoyer</button>
    </form>


    <table>
        <tr>
            <th>Arguments</th>
            <th>Valeurs</th>
        </tr>
        <tr>
            <td>
                <?php
                foreach ($_POST as $key => $value) {
                    echo $key . "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                foreach ($_POST as $value) {
                    echo $value . "<br>";
                }
                ?>
            </td>
        </tr>
    </table>



</body>

</html>