<?php 
$event_date=$_POST['event_date'];
$event_time = $_POST['event_date'];
$event_no = $_POST['event_no'];
$event_name = $_POST['event_name'];
$guest_name = $_POST['guest_name'];
$event_msg = $_POST['event_msg'];
$remark = $_POST['remark'];

include 'dbconfig.php';  # file import
$object = new batman(); // object create
$link=$object-> info(); //function call


$sql="insert into tblevent(event_date,event_time,event_no,event_name,guest_name,event_msg,remark)
values('$event_date','$event_time','$event_no','$event_name','$guest_name','$event_msg','$remark')";

echo$sql;

$result=mysqli_query($link,$sql);


?>