<?php
$autorise = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$str = "Cod,e:r, t,o:us ,le,;s jour,s";
$i = 0;
while (isset($str[$i])) {
    foreach ($autorise as $a) {
        if ($str[$i] == $a) {
            echo $str[$i];
        }
    }
    $i += 1;
}

