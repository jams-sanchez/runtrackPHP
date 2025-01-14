<?php

$myBool = True;
$myString = "This is a string";
$myNum = 12;
$myNumvirgule = 3.5;

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
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <th>Boolean</th>
            <td>$myBool</td>
            <td><?php echo $myBool; ?></td>
        </tr>
        <tr>
            <th>String</th>
            <td>$myString</td>
            <td><?php echo $myString; ?></td>
        </tr>
        <tr>
            <th>Numero</th>
            <td>$myNum</td>
            <td><?php echo $myNum; ?></td>
        </tr>
        <tr>
            <th>Numbre à virgule</th>
            <td>$myNumvirgule</td>
            <td><?php echo $myNumvirgule; ?></td>
        </tr>


    </table>

</body>

</html>