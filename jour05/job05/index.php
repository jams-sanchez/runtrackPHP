<?php

function occurences($str, $char)
{

    $count = 0;

    for ($i = 0; $i < strlen($str); $i++) {

        if ($str[$i] == $char) {
            $count++;
        }
    }

    return "il y a $count de $char dans $str.";
}

echo occurences("hahahaha", "h");
