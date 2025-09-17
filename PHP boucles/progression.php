<?php
$compteur = 0;
for ($i = 1; $i < 15; $i++) {
    if ($i % 2 == 0) {
        echo "Jour $i : révision et quiz<br/>";
    } else {
        echo "Jour $i : exercice de boucles<br/>";
    }
    $compteur++;
}
echo "Total d'iterations : $compteur";