<?php 
include'dbconfig.php';
$a1 = new batman();
$link = $a1->info();
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y');
$array='';
$x="select * from tblattend where DATE_FORMAT(created_at,'%d-%m-%y')='$date'";
echo$x;
$a11=mysqli_query($link,$x);		
$pos=0;
$no='';
while($d1=mysqli_fetch_array($a11)){ 
if($d1['flno']!=''){	
$pos++;
$music=$d1['flno'];
$no.= $musi;
}
else{
	$no='';
}
$qry="select * from tblfamily_member where not slno in('$music')";
echo$qry;
$qr=mysqli_query($link,$qry);		
$count=0;			
while($dt=mysqli_fetch_array($qr)){
echo$count." Data:".$dt['slno']."<br>";
$count++;
}
}
?>