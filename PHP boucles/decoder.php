<?php

// un caractère sur deux en comprenant les espaces

$str = "Coder tous les jours, un petit pas à la fois";
$i = 0;
while (isset($str[$i])) {
    if ($str[$i - 1] . $str[$i] == "à") {
        echo "";
        $i += 1;
    } else {
        echo $str[$i];
        $i += 2;
    }
}

echo "<br>";

// un caractère sur deux en comprenant pas les espaces

$str = "Coder tous les jours, un petit pas à la fois";
$i = 0;
while (isset($str[$i])) {
    if ($str[$i] == " ") {
        $i += 1;
    }
    if ($str[$i] . $str[$i + 1] == "à") {
        echo $str[$i] . $str[$i + 1];
        $i += 2;
    } else {
        echo $str[$i];
        $i += 2;
    }
}