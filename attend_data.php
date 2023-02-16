<?php 
include'dbconfig.php';
$conn = new batman();
$link  = $conn->info();
$flno = $_GET['flno'];
$attend_entry = $_GET['attend_entry'];
$fname = $_GET['fname'];
$fphone = $_GET['fphone'];
$qr="insert into tblattend(flno,attend_entry,fname,fphone)values('$flno','$attend_entry','$fname','$fphone')";
echo$qr;
$res = mysqli_query($link, $qr);
?>