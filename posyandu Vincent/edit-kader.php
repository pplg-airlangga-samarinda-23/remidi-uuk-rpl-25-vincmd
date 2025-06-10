<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nama = $_POST["Nama"];
    $Umur = $_POST["Umur"];
    $Jenis_kelamin = $_POST["Jenis_kelamin"];
    $Kelebihan_dan_kekurangan = $_POST["Kelebihan_dan_kekurangan"];
    $No = $_GET["No"];

    $sql = "UPDATE admin SET Nama=?, Umur=?, Jenis_kelamin=?,Kelebihan_dan_kekurangan=? where No=?";
    $row = $koneksi->execute_query($sql, [$Nama, $Umur, $Jenis_kelamin, $Kelebihan_dan_kekurangan, $No]);
    if ($row) {
        header("location:data-kader-posyandu.php");
    };
} else if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $No = $_GET['No'];
    $sql = "SELECT * FROM admin WHERE No=?";
    $kader = $koneksi->execute_query($sql, [$No])->fetch_assoc();
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
            <label for="Nama">Nama:</label>
            <input type="text" name="Nama" id="Nama" value="<?= htmlspecialchars($kader['Nama']) ?>"><br>
            <label for="Umur">Umur:</label>
            <input type="text" name="Umur" id="Umur" value="<?= $kader['Umur'] ?>"><br>
            <label for="Jenis_kelamin">Jenis kelamin:</label>
            <select name="Jenis_kelamin" id="Jenis_kelamin" required>
                <option value="Laki-laki" <?= $kader['Jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="Perempuan" <?= $kader['Jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select><br>
            <label for="Kelebihan_dan_kekurangan">Kelebihan dan kekurangan:</label>
            <input type="text" name="Kelebihan_dan_kekurangan" id="Kelebihan_dan_kekurangan" value="<?= $kader['Kelebihan_dan_kekurangan'] ?>"><br>
            <button type="submit">submit</button>
        </form>
        <a href="data-kader-posyandu.php">Kembali</a>
</body>
</div>

</html>