<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nama = $_POST["Nama"];
    $Tanggal_lahir = $_POST["Tanggal_lahir"];
    $Berat_badan = $_POST["Berat_badan"];
    $Tinggi_badan = $_POST["Tinggi_badan"];


    $sql = "INSERT INTO Kader (Nama, Tanggal_lahir, Berat_badan,Tinggi_badan) values (?, ?, ?,?)";
    $row = $koneksi->execute_query($sql, [$Nama, $Tanggal_lahir, $Berat_badan, $Tinggi_badan]);
    if ($row) {
        header("location:databayi.php");
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
            <label for="Tanggal lahir">Tanggal lahir:</label><br>
            <input type="date" name="Tanggal lahir" id="Tanggal lahir" required><br>
            <label for="Berat badan">Berat badan:</label><br>
            <input type="text" name="Berat badan" id="Berat badan" required><br>
            <label for="Tinggi badan">Tinggi badan:</label><br>
            <input type="text" name="Tinggi badan" id="Tinggi badan" required><br>
            <button type="submit">Submit</button>
            <a href="databayi.php">Kembali</a>
        </form>
</body>
</div>

</html>