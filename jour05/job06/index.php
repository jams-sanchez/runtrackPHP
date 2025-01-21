<?php

// test 1

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

echo "<br>";


// test 2

function leetSpeak2($str)
{

    $letter = [
        "a",
        "b",
        "c",
        "d",
        "e",
        "f",
        "g",
        "h",
        "i",
        "j",
        "k",
        "l",
        "m",
        "n",
        "o",
        "p",
        "q",
        "r",
        "s",
        "t",
        "u",
        "v",
        "w",
        "x",
        "y",
        "z"
    ];

    $char = [
        "4",
        "8",
        "(",
        "[)",
        "3",
        "|=",
        "6",
        "#",
        "1",
        "_|",
        "|<",
        "|_",
        "|v|",
        "^/",
        "0",
        "|*",
        "(_,)",
        "2",
        "$",
        "7",
        "|_|",
        "\/",
        "\/\/",
        "><",
        "'/",
        "=/="
    ];

    $str = strtolower($str);

    $result = str_replace($letter, $char, $str);

    return $result;
}

echo leetSpeak2("Salut l'etranger, moi c'est James!");
