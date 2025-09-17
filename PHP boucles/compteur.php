<?php

$str = "La répétition fait le maître";
$i = 0;
$compteur = 0;
while (isset($str[$i])) {
    $i++;
    $compteur++;
}

echo "La phrase \"$str\" contient $compteur caractères.<br/>";

// Autre méthode

echo strlen($str);