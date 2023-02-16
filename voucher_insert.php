<?php 
$voucher_date=$_POST['voucher_date'];
$paid_to = $_POST['paid_to'];
$description = $_POST['description'];
$amount_type = $_POST['amount_type'];
$amount = $_POST['amount'];
$vno = $_POST['vno'];

include 'dbconfig.php';  # file import
$object = new batman(); // object create
$link=$object-> info(); //function call


$sql="insert into tblvoucher(voucher_date,paid_to,description,amount_type,amount,vno)
values('$voucher_date','$paid_to','$description','$amount_type','$amount','$vno')";

echo$sql;

$result=mysqli_query($link,$sql);


?>