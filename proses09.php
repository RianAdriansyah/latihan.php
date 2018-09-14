<?php
if(isset($_POST['Proses'])){
    $saran = nl2br($_POST['saran']);
    echo "Kritik dan Saran Anda adalah : <br>";
    echo "<font color=blue><b>$saran</b></font>";
}
?>