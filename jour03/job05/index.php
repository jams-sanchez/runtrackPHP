<?php

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$str = strtolower($str);
$strToTab = str_split($str);

$countVoy = 0;
$countCon = 0;

$dic = [
    'voyelles' => [],
    'consonnes' => [],
    'caracteres' => []
];

foreach ($strToTab as $value) {

    if ($value == " " or $value == "'") {
        array_push($dic['caracteres'], $value);
    } elseif ($value == 'a' or $value == 'e' or $value == "i" or $value == "o" or $value == "u" or $value == "y") {
        array_push($dic['voyelles'], $value);
        $countVoy++;
    } else {
        array_push($dic['consonnes'], $value);
        $countCon++;
    }
}

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
            <td></td>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
        <tr>
            <th>Nombres</th>
            <td><?php echo $countVoy; ?></td>
            <td><?php echo $countCon; ?></td>
        </tr>
        <tr>
            <th>Lettres</th>
            <td>
                <?php
                for ($i = 0; $i < count($dic['voyelles']); $i++) {
                    echo ($dic['voyelles'][$i]);
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < count($dic['consonnes']); $i++) {
                    echo ($dic['consonnes'][$i]);
                }
                ?>
            </td>
        </tr>


    </table>


</body>

</html>