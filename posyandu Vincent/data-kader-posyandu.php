<?php
require "koneksi.php";
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login-admin.php");
}
$sql = "SELECT * FROM admin";
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
                <P>
                    <a href="user.php">Data user</a>
            </div>
            <div class="cf">
                <a href="admin-tambah.php">Tambah kader</a><br>
            </div>

            <div class="cg">
                <a href="login-admin.php">Kembali?</a>
            </div>
            <div class="ch">
                <a href="logout-admin.php">Logout</a>
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
                        <a href="tambah-kader.php">Tambah</a>
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
                        <td>Umur</td>
                        <td>Jenis kelamin</td>
                        <td>Kelebihan dan kekurangan</td>
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
                            <td><?= $item["Umur"]; ?></td>
                            <td><?= $item["Jenis_kelamin"]; ?></td>
                            <td><?= $item["Kelebihan_dan_kekurangan"]; ?></td>
                            <td>
                                <a href="edit-kader.php?No=<?= $item['No'] ?>">Edit </a>
                                <a href="kader-hapus.php?No=<?= $item['No'] ?>">Hapus</a>
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