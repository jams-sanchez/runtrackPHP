<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$strToTab = str_split($str, 1);


foreach ($strToTab as $key => $value) {
    if ($key % 2 == 0) {
        echo " ";
    } else {
        echo $value;
    }
}
