<?php
include"db.php";
session_start();
session_destroy();
echo"<script>window.location.href='driverlogin.html';</script>";

?>

