<?php 
include'dbconfig.php';
$conn =new batman();
$link= $conn->info();



$flno = $_GET['flno'];
$attend_entry = $_GET['attend_entry'];
$fname = $_GET['fname'];
$fphone = $_GET['fphone'];
$remark = $_GET['remark'];
$qr="insert into tblattend(flno,attend_entry,fname,fphone,remark)values('$flno','$attend_entry','$fname','$fphone','$remark')";
echo$qr;
$result=mysqli_query($link,$qr);
?>