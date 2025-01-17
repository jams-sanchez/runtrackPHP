<?php

// function leetSpeak($str)
// {

//     $str1 = strtolower($str);

//     for ($i = 0; $i < strlen($str); $i++) {

//         if ($str1[$i] == "a") {
//             $str1[$i] = "4";
//         } elseif ($str1[$i] == "b") {
//             $str1[$i] = "8";
//         } elseif ($str1[$i] == "d") {
//             $str1[$i] = "[)";
//         } elseif ($str1[$i] == "e") {
//             $str1[$i] = "3";
//         } elseif ($str1[$i] == "g") {
//             $str1[$i] = "6";
//         } elseif ($str1[$i] == "h") {
//             $str1[$i] = "#";
//         } elseif ($str1[$i] == "i") {
//             $str1[$i] = "1";
//         } elseif ($str1[$i] == "l") {
//             $str1[$i] = "1";
//         } elseif ($str1[$i] == "o") {
//             $str1[$i] = "0";
//         } elseif ($str1[$i] == "r") {
//             $str1[$i] = "2";
//         } elseif ($str1[$i] == "s") {
//             $str1[$i] = "$";
//         } elseif ($str1[$i] == "t") {
//             $str1[$i] = "7";
//         } else {
//             $str1[$i];
//         }
//     }

//     return $str1;
// }

// echo leetSpeak("salut, je m'appelle James");

function leetSpeak($str)
{
    $tab = [
        "a" => ["4"],
        "b" => ["8"],
        "c" => ["("],
        "d" => ["[)"],
        "e" => ["3"],
        "f" => ["|="],
        "g" => ["6"],
        "h" => ["#"],
        "i" => ["1"],
        "j" => ["_|"],
        "k" => ["|<"],
        "l" => ["|_"],
        "m" => ["|v|"],
        "n" => ["^/"],
        "o" => ["0"],
        "p" => ["|*"],
        "q" => ["(_,)"],
        "r" => ["2"],
        "s" => ["$"],
        "t" => ["7"],
        "u" => ["|_|"],
        "v" => ["\/"],
        "w" => ["\/\/"],
        "x" => ["><"],
        "y" => ["'/"],
        "z" => ["=/="]
    ];

    $result = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $strLow = strtolower($str[$i]);
        if (array_key_exists($strLow, $tab)) {
            $result .= $tab[$strLow][0];
        } else {
            $result .= $strLow;
        }
    }
    return $result;
}


echo leetSpeak("Salut l'etranger, moi c'est James!");
