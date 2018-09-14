<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>

<form action="" method="POST">
Email    : <input type="email" name="imel"><br>
Password : <input type="password" name="pw"><br>
<input type="submit" name ="input"value="Login">
</form>
    
</body>
</html>

<?php
if(isset($_POST ['input'])){
    $a = $_POST ['imel'];
    $b = $_POST ['pw'];
    if($a == "rianjh2@gmail.com" && $b == "123"){
        echo "<b>Login Sukses";
    }else{
        echo "Login Gagal</b>";
    }
}
?>