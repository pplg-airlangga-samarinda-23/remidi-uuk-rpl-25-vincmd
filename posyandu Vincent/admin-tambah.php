<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO login (username,password) VALUES (?, ?)";
    $row = $koneksi->execute_query($sql, [$username, $password]);

    if ($row) {
        header("Location:login-admin.php");
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
        <span class="dot"></span>
        <form action="" method="post">
            <label for="username">username:</label><br>
            <input type="text" name="username" id="username"><br>
            <label for="password">password:</label><br>
            <input type="password" name="password" id="password"><br>
            <button type="submit">Submit</button>
            <a href="login-admin.php">Kembali</a>
        </form>
</body>
</div>

</html>