<html>
<head>
<title>Dokumen Rahasia!</title>
</head>
</html>

<?php
echo "<h1>Sistem Raport Sederhana</h1>";
 
    if(isset($_POST['Simpan'])){
    $nama = $_POST['nama'];
    echo " Nama : <b>$nama</b><br>";

    $nis = $_POST['nis'];
    echo "NIS : <b>$nis</b><br>";

    $alamat = $_POST['alamat'];
    echo "Alamat : <b>$alamat</b><br>";

    $jk = $_POST['jk'];
    echo "Jenis Kelamin : <b>$jk</b><br>";

    $agama = $_POST['agama'];
    echo "Agama : <b>$agama</b><br>";

    $sekolah = $_POST['sekolah'];
    echo "Sekolah : <b>$sekolah</b><br>";

    $email = $_POST['email'];
    echo "Email : <b>$email</b><br>";

    $pengajar = $_POST['pengajar'];
    echo "Pengajar : <b>$pengajar</b><br>";

    echo "Mata Pelajaran Yang Kamu Sukai : <br>";

    if(isset($_POST['mpl1'])){
        echo "<b>~ " . $_POST['mpl1'] . " ~<br></b>";
    }
    if(isset($_POST['mpl2'])){
        echo "<b>~ " . $_POST['mpl2'] . " ~<br></b>";
    }
    if(isset($_POST['mpl3'])){
        echo "<b>~ " . $_POST['mpl3'] . " ~<br></b>";
    }
    if(isset($_POST['mpl4'])){
        echo "<b>~ " . $_POST['mpl4'] . " ~<br></b>";
    }
    if(isset($_POST['mpl5'])){
        echo "<b>~ " . $_POST['mpl5'] . " ~<br></b>";
    }

    $nilai = $_POST['nilai'];
    if($nilai>=23){
        echo "Nilai Ijazah : <b>$nilai</b><br>";
        echo "<b>EXCELLENT!</b>";
    }else if($nilai==null){
        echo "<b>Anda Tidak Memiliki NIlai</b>";
    }
    else{
        echo "NIlai Ijazah : <b>$nilai</b><br>";
        echo "<b>FAILED!</b>";
    }
}

?>
