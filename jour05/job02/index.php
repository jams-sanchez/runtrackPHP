<?php

function bonjour(bool $jour)
{
    if ($jour == True) {
        return "Bonjour";
    } else {
        return "Bonsoir";
    }
}

echo bonjour(True) . "<br>";
echo bonjour(False);
