<?php
require 'koneksi.php';
if ($_SERVER['REQUEST_METHOD']  === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT username,password FROM login1 WHERE username = ?";
    $row = $koneksi->execute_query($sql, [$username])->fetch_assoc();
    if ($password === $row['password']) {
        session_start();
        $_SESSION["username"] = $row["username"];
        header('location:databayi.php');
    } else {
        echo "password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            background: white;
        }

        .content {
            max-width: 500px;
            margin: auto;
            background: skyblue;
            padding: 10px;
            justify-content: center;
            text-align: center;
            border-style: solid;
            margin-top: 10%;
        }
    </style>
    <div class="content">
        <h1>login</h1>
        <form action="" method="post">
            <div class="form-item">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-item">
                <label for="password">password</label><br>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">Login</button>
        </form>
</body>
<footer>
    <h2>Tidak ada user?</h2><br>
    <a href="kader-posyandu-tambah.php">Klik disini untuk registrasi</a><br>
    <a href="index.html">Halaman awal</a></a></h4>


</footer>
</div>

</html>