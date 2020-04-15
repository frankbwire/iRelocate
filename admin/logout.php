<?php
session_start();
session_destroy();
//echo "<script type='text/javascript'>alert('Logout Successfull'); window.location='../index.php';</script>";
header("location:../index.php");
exit;
?>