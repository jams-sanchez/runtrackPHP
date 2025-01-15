<?php

$str = "Certaines choses changent, d'autres ne changeront jamais.";

$strTab = [];
$index = 0;

while (isset($str[$index])) {
    array_push($strTab, $str[$index]); // liste des lettres $str
    $index++;
}
$strTab2 = array_shift($strTab); // prend la 1ere lettre de $str
array_push($strTab, $strTab2); // met la 1ere lettre à la fin de $strTab
$end = implode($strTab); // rassemble les lettres du tableau en une string
echo $end;
