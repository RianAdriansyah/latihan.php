<?php
$uang    = 50000;
$makan   = 25000;
$minum   = 10000;
$belanja = $makan+$minum;
$sisa    = $uang - $belanja;

echo "Uang Harry Rp.$uang <br>";
echo "Harga Makanan Rp.$makan <br>";
echo "Harga Minum Rp.$minum <br>";
echo "Harry Belanja Total Rp.$belanja <br>";
echo "Sisa Uang Harry Rp.$sisa <br>";

if(0<$sisa){
    echo "Harry adalah Orang yang <b>HEMAT</b>";
}else{
    echo " Harry adalah Orang yang <b>BOROS</b>";
}
?>