<?php

$str = "Dans l'espace, personne ne vous entend crier";
$strToTab = str_split($str);
$count = 0;

foreach ($strToTab as $value) {
    $count++;
}

echo "Il y a <b>$count</b> caractères présents dans cette chaine";
