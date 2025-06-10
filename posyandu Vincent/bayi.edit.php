<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nama = $_POST["Nama"];
    $Tanggal_lahir = $_POST["Tanggal_lahir"];
    $Berat_badan = $_POST["Berat_badan"];
    $Tinggi_badan = $_POST["Tinggi_badan"];
    $No = $_GET["No"];

    $sql = "UPDATE kader SET Nama=?, Tanggal_lahir=?, Berat_badan=?, Tinggi_badan=? WHERE No=?";
    $row = $koneksi->execute_query($sql, [$Nama, $Tanggal_lahir, $Berat_badan, $Tinggi_badan, $No]);
    if ($row) {
        header("location:databayi.php");
    };
} else if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $No = $_GET['No'];
    $sql = "SELECT * FROM kader WHERE No=?";
    $bayi = $koneksi->execute_query($sql, [$No])->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit bayi</title>
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
        <h1>Edit bayi</h1>
        <form action="" method="POST">

            <label for="Nama">Nama</label>
            <input type="text" name="Nama" id="Nama" value="<?= htmlspecialchars($bayi['Nama']) ?>"><br>
            <label for="Tanggal_lahir">Tanggal lahir</label>
            <input type="text" name="Tanggal_lahir" id="Tanggal_lahir" value="<?= $bayi['Tanggal_lahir'] ?>"><br>
            <label for="Berat_badan">Berat badan</label>
            <input type="Berat_badan" name="Berat_badan" id="Berat_badan" value="<?= $bayi['Berat_badan'] ?>"><br>
            <label for="Tinggi_badan">Tinggi badan</label>
            <input type="Tinggi_badan" name="Tinggi_badan" id="Tinggi_badan" value="<?= $bayi['Tinggi_badan'] ?>"><br>
            <button type="submit">submit</button>
        </form>
        <a href="databayi.php">Kembali</a>
</body>
</div>

</html>