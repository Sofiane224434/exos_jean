<?php

$voyelle = ["A", "E", "I", "O", "U", "Y", "a", "e", "i", "o", "u", "y"];
$str = "Apprendre PHP demande de la pratique";
$i = 0;
while (isset($str[$i])) {
    foreach ($voyelle as $v) {
        if ($str[$i] == $v) {
            echo $str[$i];
        }
    }
    $i++;
}