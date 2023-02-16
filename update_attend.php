<?php 
include'dbconfig.php';
$conn  = new batman();
$link = $conn->info();
$flno = $_GET['flno'];
$remark = $_GET['remark'];
$attend_entry = $_GET['attend_entry'];
$qr="update tblattend set remark='$remark', attend_entry='$attend_entry' where flno='$flno'";
echo$qr;
$res = mysqli_query($link, $qr);
?>