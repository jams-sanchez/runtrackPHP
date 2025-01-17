<?php

function bonjour(bool $jour)
{
    if ($jour == True) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

bonjour(True);
bonjour(False);
