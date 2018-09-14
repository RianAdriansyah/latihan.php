<?php
$str = "Is your name  O'Reilly ?";
$str2 = addslashes($str);
$str3 = stripslashes($str2);

echo "<b>Sring Asli</b> : $str";;
echo "<br><b>addslashes()</b> : $str2";
echo "<br><b>stripslash()</b> : $str3";
?>