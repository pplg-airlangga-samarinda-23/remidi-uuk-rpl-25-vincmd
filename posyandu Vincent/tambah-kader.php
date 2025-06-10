<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nama = $_POST["Nama"];
    $Umur = $_POST["Umur"];
    $Jenis_kelamin = $_POST["Jenis_kelamin"];
    $Kelebihan_dan_kekurangan = $_POST["kelebihan_dan_kekurangan"];


    $sql = "INSERT INTO admin (Nama, Umur, Jenis_kelamin,Kelebihan_dan_kekurangan) values (?, ?, ?,?)";
    $row = $koneksi->execute_query($sql, [$Nama, $Umur, $Jenis_kelamin, $Kelebihan_dan_kekurangan]);
    if ($row) {
        header("location:data-kader-posyandu.php");
        exit;
    } else {
        echo "Gagal menyimpan data.";
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
        <form class="Login" action="" method="post">
            <label for="Nama">Nama:</label><br>
            <input type="text" name="Nama" id="Nama" required><br>
            <label for="Umur">Umur:</label><br>
            <input type="text" name="Umur" id="Umur" required><br>
            <label for="Jenis_kelamin">Jenis Kelamin:</label><br>
            <select name="Jenis_kelamin" id="Jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br>
            <label for="Kelebihan_dan_kekurangan">Kelebihan dan kekurangan:</label><br>
            <input type="text" name="kelebihan_dan_kekurangan" id="kelebihan_dan_kekurangan" required><br>
            <button type="submit">Submit</button>
            <a href="data-kader-posyandu.php">Kembali</a>
        </form>
</body>
</div>

</html>