<?php

$str = "Dans l'espace, personne ne vous entend crier";
$index = 0;

while (isset($str[$index])) {
    $index++;
}

echo "Il y a <b>$index</b> caractères présents dans cette chaine";


// Autre solution avec fonction: 

// $strToTab = str_split($str);
// $count = 0;

// $strToTab = [];

// foreach ($strToTab as $value) {
//     $count++;
// }

// echo "Il y a <b>$count</b> caractères présents dans cette chaine";
