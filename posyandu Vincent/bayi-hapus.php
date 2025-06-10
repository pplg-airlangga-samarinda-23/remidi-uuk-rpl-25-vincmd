<?php
session_start();
require "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $No = $_GET['No'];
    $sql = "DELETE FROM kader WHERE No=?";
    $row = $koneksi->execute_query($sql, [$No]);
    if ($row) {
        header("location:databayi.php");
    }
}
