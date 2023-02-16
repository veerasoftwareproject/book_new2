<?php

// include 'dbconfig.php';  # file import
// $object = new batman(); // object create
// $link=$object-> info(); //function call


include'dbconfig.php';
$a1 = new batman();
$link = $a1->info();

$fno = $_GET['fno'];
$fh2 = $_GET['fh2']; 
$fh3 = $_GET['fh3'];

$fa1= $_GET["faa1"];
$fa2 = $_GET["faa2"];
$fa3 = $_GET["faa3"];
$fa4 = $_GET["faa4"];
$fa5 = $_GET["faa5"];
$fa6 = $_GET["faa6"];
$fa7 = $_GET["faa7"];
$fa8 = $_GET["faa8"];
$fa9 = $_GET["faa9"];
$fa10 = $_GET["faa10"];
$fa11 = $_GET["faa11"];
$fa12 = $_GET["faa12"];
$fa13 = $_GET["faa13"];
$fa14 = $_GET["faa14"];
$fa15 = $_GET["faa15"];

// echo$vt2;    
for ($i=0; $i<count($fa1); $i++)
{
      $query="insert into tblfamily_member(fno,family_head_name,family_photo,slno,family_member_name,gender,relation,occupation,dob,marriage_date,baptism_date,mobile,ad_no,joining_date,member_status,member_saved,member_photo,street)values('$fno','$fa1[$i]','$fa2[$i]','$fa3[$i]','$fa4[$i]','$fa5[$i]','$fa6[$i]','$fa7[$i]','$fa8[$i]','$fa9[$i]','$fa10[$i]','$fa11[$i]','$fa12[$i]','$fa13[$i]','$fa14[$i]','$fa15[$i]','$fh2','$fh3')";
      echo$query;
    if(mysqli_query($link, $query)){
      // header("location:stock_entry.php?contact_name='hi'");
      // echo "<script>alert('Records added successfully'); </script>";
      echo$query;
      }
    //   $qrexe = $conn->query($query);

}


$sql2="insert into tblfamily_head(fno,family_head_name,family_photo)values('$fno','$fh2','$fh3')";

echo$sql2;

$result=mysqli_query($link,$sql2);

header("");

?>








<!-- ?> -->