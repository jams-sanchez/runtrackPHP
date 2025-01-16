<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$str = strtolower($str);

// $strToTab = str_split($str);

$strToTab = [];
$index = 0;

while (isset($str[$index])) {
    array_push($strToTab, $str[$index]); // liste des lettres $str dans $strToTab
    $index++;
}

foreach ($strToTab as $value) {
    if ($value == 'a' or $value == 'e' or $value == "i" or $value == "o" or $value == "u" or $value == "y") {
        echo $value . " ";
    }
}
