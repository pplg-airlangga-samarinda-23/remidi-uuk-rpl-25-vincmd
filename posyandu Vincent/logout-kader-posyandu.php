<?php
session_start();
session_destroy();

header("location:login-kader-posyandu.php");
exit;
