<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$index = 0;

$strToTab = [];

// $strToTab = str_split($str, 1);

while (isset($str[$index])) {
    array_push($strToTab, $str[$index]);
    $index++;
}


foreach ($strToTab as $key => $value) {
    if ($key % 2 == 0) {
        echo " ";
    } else {
        echo $value;
    }
}
