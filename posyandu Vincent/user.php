<?php
require "koneksi.php";
$sql = "SELECT username FROM login";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
$no = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <h1> Data user</h1>
    <a href="user-tambah.php"></a>
    <table>
        <thead>
            <td>no</td>
            <td>username</td>
            <td>password</td>
        </thead>
        <?php
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><?= ++$no ?></td>
                <td><?= $row['username'] ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>