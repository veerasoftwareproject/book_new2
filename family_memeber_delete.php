<?php 
include'dbconfig.php';
$conn  = new batman();
$link = $conn->info();
$slno = $_GET['slno'];
$qr="delete from tblfamily_member where slno='$slno'";
echo$qr;
$res = mysqli_query($link, $qr);
// header("location:receipt_list.php");
?>