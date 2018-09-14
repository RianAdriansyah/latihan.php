<?php
$day   = date("D");
$month = date("F");
$year  = date("Y");
$time  = date("P");
$date  = date("G");
$clock = date("H s A");

echo "Sekarang Pukul <b>$clock</b>";

echo "Sekarang Tanggal <b>$date</b><br>";

switch($day){
    case 'Sun' : $hari = "Minggu" ; break;
    case 'Mon' : $hari = "Senin"  ; break;
    case 'Tue' : $hari = "Selasa" ; break;
    case 'Wed' : $hari = "Rabu"   ; break;
    case 'Thu' : $hari = "Kamis"  ; break;
    case 'Fri' : $hari = "Jum'at" ; break;
    case 'Sat' : $hari = "Sabtu"  ; break;
    default    : $hari = "Kiamat";
}
echo "Hari Ini Hari <b>$hari</b>";

/*switch($month){
    case 'Jan' : $bulan = "Januari"    ; break;
    case 'Feb' : $bulan = "Februari"   ; break;
    case 'Mar' : $bulan = "Maret"      ; break;
    case 'Apr' : $bulan = "April"      ; break;
    case 'May' : $bulan = "Mei"        ; break;
    case 'Jun' : $bulan = "Juni"       ; break;
    case 'Jul' : $bulan = "Juli"       ; break;
    case 'Aug' : $bulan = "Agustus"    ; break;
    case 'Sep' : $bulan = "September"  ; break;
    case 'Oct' : $bulan = "Oktober"    ; break;
    case 'Nov' : $bulan = "November"   ; break;
    case 'Des' : $bulan = "Desember"   ; break;
    default    : $bulan = "Kiamat";
}*/
echo "<br>Sekarang Adalah Bulan <b>$bulan</b>";

echo "<br>Sekarang Tahun <b>$year</b>";

echo "<br>Zona Waktu di Indonesia adalah GMT <b>$time</b>";

echo "<br>Jadi Sekarang Tanggal <b>$date</b> Hari <b>$hari</b> Bulan <b>$month</b> Tahun <b>$year</b>"
?>