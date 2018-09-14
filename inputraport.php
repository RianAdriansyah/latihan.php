<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumen Rahasia!</title>
</head>
<body>
    
    <form action="prosesraport.php" method="post">
    <h1><center> Sistem Raport Sederhana</center></h1>
    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
    </tr>
    <tr>
    <td>NIS</td>
    <td>:</td>
    <td><input type="number" name="nis"></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea name="alamat"cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jk"value="Laki Laki"checked>Laki Laki
            <input type="radio" name="jk"value="Perempuan">Perempuan
            <input type="radio" name="jk"value="Netral">Netral</td>
    </tr> 
    <tr> 
    <td>Agama</td>
    <td>:</td>
    <td><select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="BUddha">Buddha</option>
            </select> 
    </td>
    </tr>
    <tr>
    <td>Sekolah</td>
    <td>:</td>
    <td><input type="text" name="sekolah"></td>
    </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="email" name="email"></td>
    </tr>
    <tr>
    <td>Pengajar</td>
    <td>:</td>
    <td><input type="text" name="pengajar"></td>
    </tr>
    <tr>
    <td>Mata Pelajaran Yang Disukai</td>
    <td>:</td>
    <td><input type="checkbox" name="mpl1"value="Olahraga"checked>Olahraga
    <input type="checkbox" name="mpl2"value="Bahasa Inggris">Bahasa Inggris
    <input type="checkbox" name="mpl3"value="Matematika">Matematika
    <input type="checkbox" name="mpl4"value="Sejarah">Sejarah
    <input type="checkbox" name="mpl5"value="KWU">KWU</td>
    </tr>
    <tr>
    <td> Masukkan NIlai Ijazah SD</td>
    <td>:</td>
    <td><input type="number" name="nilai">
    </tr>
    <tr>
    <td><br><input type="submit"value="SImpan"name="Simpan">
    <input type="reset" value="Reset"name="Reset"></td>
    </tr>
    </form>
    </table>
</body>
</html>