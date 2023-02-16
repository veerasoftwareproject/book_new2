<?php 
include'dbconfig.php';
$conn  = new batman();
$link = $conn->info();
$id = $_GET['id'];
$qr="delete from tblreceipt where id='$id'";
echo$qr;
$res = mysqli_query($link, $qr);

?>