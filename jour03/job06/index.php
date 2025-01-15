<?php

$str = "Les choses que l'on possede finissent par nous posseder";
$str = strtolower($str);

// $strReverse = strrev($str);
// echo $strReverse . "<br>";

$strToTab = str_split($str);

$count = 0;

foreach ($strToTab as $value) {
    $count++;
    $reversed = array_reverse($strToTab);
}

for ($i = 0; $i < $count; $i++) {
    echo $reversed[$i];
}
