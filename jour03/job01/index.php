<?php

$tableau = array(200, 204, 173, 98, 171, 404, 459);

foreach ($tableau as $index => $num) {
    if ($num % 2 == 0) {
        echo $num . " est pair <br>";
    } else {
        echo $num . " est impair <br>";
    }
}
