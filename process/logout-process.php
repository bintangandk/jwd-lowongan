<?php 

require_once("../function/helper.php");
require_once("../function/koneksi.php");

session_start();
unset($_SESSION['id']);
unset($_SESSION['role']);

header("location:login.php");
?>