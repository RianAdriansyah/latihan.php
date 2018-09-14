<?php
//CONTOH 1
$i = 1;
while ($i <= 10) {
echo $i++;
}
echo "<br><br>";
//CONTOH 2
$i = 1;
while ($i <= 10):
echo "$i";
$i++;
endwhile;
echo "<br><br>";
//CONTOH 3
$i = 1;
while ($i <= 6) {
echo "<h$i>Heading $i</h$i>";
$i++;
}
?>