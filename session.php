<?php
$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
session_start();
$p=$_SESSION['username'];
?>