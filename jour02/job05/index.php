<?php

for ($i = 1; $i <= 1000; $i++) {

    $nbDiviseur = 0;

    for ($j = 1; $j <= $i; $j++) {
        if (($i % $j) == 0)
            $nbDiviseur++;
    }

    if ($nbDiviseur == 2) {
        echo $i . "<br>";
    }
}
