<?php

for ($i = 1; $i <= 100; $i++) {
    if (!($i % 3) and !($i % 5)) {
        echo "FizzBuzz" . "<br>";
    } elseif (!($i % 3)) {
        echo "Fizz" . "<br>";
    } elseif (!($i % 5)) {
        echo "Buzz" . "<br>";
    } else {
        echo $i . "<br>";
    }
}
