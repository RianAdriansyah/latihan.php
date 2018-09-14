<?php
$array  = ["Hasan","Dani","Toto","Dadang","Dani"];
$array2 = array("Ujang","Teti","Winda","Wiwin");
$array3 = (["Dadang"=>"Bandung","Hasan"=>"Sumenep","Joni"=>"Cikalong"]);

foreach ($array3 as $a => $u) {
    echo "$a Orang $u <br>";
}
?>