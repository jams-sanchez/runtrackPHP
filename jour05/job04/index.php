<?php

function calcule($num1, $type, $num2)
{
    if ($type == "+") {
        return $num1 + $num2;
    } elseif ($type == "-") {
        return $num1 - $num2;
    } elseif ($type == "*") {
        return $num1 * $num2;
    } elseif ($type == "/") {
        return $num1 / $num2;
    } elseif ($type == "%") {
        return $num1 % $num2;
    }
}
echo calcule(2, "%", 3);
