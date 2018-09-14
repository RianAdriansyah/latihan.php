<?php
function luaspersegipanjang($panjang,$lebar){
    return $panjang * $lebar;
}
$p=6;
$l=15;
echo "Panjang : $p <br>";
echo "Lebar : $l <br>";
echo "Luas Persegi Panjang : ";
echo luaspersegipanjang($p,$l);
?>