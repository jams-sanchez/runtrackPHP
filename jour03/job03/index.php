<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$str = strtolower($str);

$strToTab = str_split($str);

foreach ($strToTab as $value) {
    if ($value == 'a' or $value == 'e' or $value == "i" or $value == "o" or $value == "u" or $value == "y") {
        echo $value . " ";
    }
}
