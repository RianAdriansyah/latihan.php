<?php
function luassegitiga($alas,$tinggi){
    return 0.5 * $alas * $tinggi;
}
$a = 12;
$t = 10;
echo "Alas : $a <br>";
echo "Tinggi : $t <br>";
echo "Luas Segitiga : ";
echo luassegitiga($a,$t);
?>