<?php
require "koneksi.php";
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login-kader-posynadu.php");
}
$sql = "SELECT * FROM kader";
$rows = $koneksi->execute_query($sql, []);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="pp">


        <div class="cc">
            <div class="cd">

            </div>

            <div class="ce">
                <a href="user.php">Data user</a>
            </div>
            <div class="cg">
                <a href="login-kader-posyandu.php">Kembali?</a>
            </div>
            <div class="ch">
                <a href="logout-kader-posyandu.php">Logout</a>
            </div>
        </div>

        <div class="ci">

            <div class="b">
                <div class="d">

                    <div class="circle"></div>
                    <h3>username</a></h3>

                </div>
                <div class="ky">
                    <div class="dd">
                        <a href="bayi-tambah.php">Tambah</a>
                    </div>
                </div>

            </div>
            <div class="kpl">
                <h2>Selamat datang, <?= $_SESSION['username'] ?></h2>

                <br>

            </div>
            <table border="1">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Tanggal lahir</td>
                        <td>Berat badan</td>
                        <td>Tinggi badan</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    foreach ($rows as $item) :
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $item["Nama"]; ?></td>
                            <td><?= $item["Tanggal_lahir"]; ?></td>
                            <td><?= $item["Berat_badan"]; ?></td>
                            <td><?= $item["Tinggi_badan"]; ?></td>
                            <td>
                                <a href="bayi.edit.php?No=<?= $item['No'] ?>">Edit</a>
                                <a href="bayi-hapus.php?No=<?= urlencode($item['No']) ?>">Hapus</a>
                            </td>

                        </tr>

                    <?php
                        $no += 1;
                    endforeach;
                    ?>
                    <?php foreach ($rows as $row) : ?>
                    <?php endforeach; ?>
                </tbody>


            </table>
        </div>


    </div>
    </div>

    <footer>
        <div class="ow">
            <h3> Copyright</h3>
            <h3>versi 10</h3>
        </div>
    </footer>

</body>

</html>