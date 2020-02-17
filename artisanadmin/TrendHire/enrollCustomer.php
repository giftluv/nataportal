<?php
session_start();
include_once("../connection.php");
ob_start();

if((!isset($_SESSION['user']))&&(!isset($_SESSION['pwd'])))
{
header('Location:../index.php') ;
}

if(isset($_POST['enroll']))
{
	//$seleDB=mysql_select_db('nden');
	//if($seleDB){
$admNo=$_POST['admNo'];
$name=$_POST['name'];

$sql1="INSERT INTO user_id(admNo) VALUES('$admNo')";

$result1 = mysqli_query($con,$sql1);
if($result1)
{
//Admission entry
$sql2="INSERT INTO user_records(admNo,name) 
VALUES('$admNo','$name')";
$result2 = mysqli_query($con,$sql2);

//Last Entry
$sql5="UPDATE last_entry SET admNo='$admNo',name='$name' WHERE id='1'";
$result5 = mysqli_query($con,$sql5);

echo '<script type="text/javascript">alert("Artisan Registration is successful!");</script>';
echo"<script language=javascript>window.location='../mainpage.php'</script>";
}
else 
{
include"enroll.php";
//echo "</br></br></br></br></br></br></br></br>";
echo '<script type="text/javascript">alert("Admission Number already Exists/ Inavalid!");</script>';

}
}
else
{
	echo '<script type="text/javascript">alert("Unauthorided Entry!");</script>';
	echo"<script language=javascript>window.location='../mainpage.php'</script>";

}
//}
ob_end_flush();

?>