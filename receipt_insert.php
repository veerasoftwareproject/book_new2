<?php 
$receipt_date=$_POST['receipt_date'];
$offering = $_POST['offering'];
$offering_with = $_POST['offering_with'];
$description = $_POST['description'];
$amount_type = $_POST['amount_type'];
$amount = $_POST['amount'];
$rno = $_POST['rno'];

include 'dbconfig.php';  # file import
$object = new batman(); // object create
$link=$object-> info(); //function call


$sql="insert into tblreceipt(receipt_date,offering,offering_with,description,amount_type,amount,rno)
values('$receipt_date','$offering','$offering_with','$description','$amount_type','$amount','$rno')";

echo$sql;

$result=mysqli_query($link,$sql);

header("location:receipt_entry.php")    
?>